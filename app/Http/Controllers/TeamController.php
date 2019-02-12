<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use App\Mail\TeamCreated;
use Illuminate\Support\Facades\Auth;
class TeamController extends Controller
{
    public function index(Team $team){
        if(auth()->user()->id==1)
        {
            $teamData  = $team->get();
        }
        else
        {
            $teamData  = $team->where('user_id',auth()->user()->id)->get();
        }
        return view('dashboard/team',compact('teamData'));
    }
    protected function validateTeam($data){
        $attributes  =  $data->validate(['name' =>'required|min:3|max:50|unique:teams']);
        return  $attributes;   
    }
    public function create(){
        return view('dashboard/createTeam');
    }
    public function store(Request $request){        
        $attributes              =  $this->validateTeam($request); 
        $attributes['user_id']   =  auth()->user()->id;
        $team                    =  Team::create($attributes);
        \Mail::to('naval@ucreate.co.in')->send(
                new TeamCreated($team)
        );
        return redirect()->route('team.index')->with('success','Team has been created successfully'); 
    }
    public function show(Team $team){
        return view('dashboard/showTeam',compact('team'));
    }

    public function edit(Team $team){    

        //abort_if
        //abort_unless
        //$his->authrize
        //$this->authorize('view',$team);
        if(\Gate::denies('view',$team))
        {
            return abort(403);
        }

        //abort_if($team->user_id!=auth()->user()->id,403); //another way make policy
        // if($team->user_id!=auth()->user()->id)
        // {
        //     return abort(403);
        // }   
        return view('dashboard/updateTeam', compact('team'));
    }
    public function update(Request $request, Team $team){           
        $attributes              =  $this->validateTeam($request); 
        $team->fill($attributes)->save();       
        return redirect()->route('team.index')->with('success','Team has been updated successfully');   
    }
    public function destroy(Team $team){
        $team->delete();
        return redirect()->route('team.index')->with('error','Team has been deleted successfully');   
        
    }
}
