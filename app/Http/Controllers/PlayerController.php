<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("test");
    }
    protected function validateTeam($data){
        $attributes  =  $data->validate([
            'name' =>'required',
            'email'=>'email'
        ]);
        return  $attributes;   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($teamId)
    {      
        return view('dashboard/createPlayer',compact('teamId'));
    }
    public function store(Request $request,$teamId){
        $attributes              =  $this->validateTeam($request); 
        $attributes['team_id']   =  $teamId;
        Player::create($attributes);
        flash("Player has been added successfully","success");
        return redirect()->route('team.show',[$teamId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Player $player)
    {    
        $player->delete();
        flash("Player has been deleted successfully","success");       
        return back();
    }
}
