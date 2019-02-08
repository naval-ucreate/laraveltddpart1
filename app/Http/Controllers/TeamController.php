<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
class TeamController extends Controller
{
    public function index(Team $team)
    {
        $teamData  = $team->where('user_id',auth()->user()->id)->get();
        return view('dashboard/team',compact('teamData'));
    }
    protected function validateTeam($data)
    {
        $attributes  =  $data->validate([
                            'name' =>'required',
                            'user_id'=>'required'
                         ]);
        return  $attributes;   
    }
    public function create()
    {
        return view('dashboard/createTeam');
    }
    public function store(Request $request)
    {
        $request['user_id']      =  auth()->user()->id;
        $attributes              =  $this->validateTeam($request); 
        Team::create($attributes);
        return redirect()->route('team.index')->with('success','Team has been created successfully'); 
    }
    public function show(Team $team)
    {
        return view('dashboard/showTeam',compact('team'));
    }
    public function edit($id)
    {
        $teamData  = Team::find($id);
        return view('dashboard/updateTeam', compact('teamData'));
    }
    public function update(Request $request, $id)
    { 
        $request['user_id']      =  auth()->user()->id;
        $attributes              =  $this->validateTeam($request); 
        $team                    =  Team::findOrFail($id);
        $team->fill($attributes)->save();
        return redirect()->route('team.index')->with('success','Team has been updated successfully');   
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();    
        return redirect()->route('team.index')->with('success','Team has been deleted successfully');  
    }
}
