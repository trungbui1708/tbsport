<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Round;
use App\Tournament;

class RoundController extends Controller
{
    public function getList()
    {
    	$round = Round::all();
    	$tournament = Tournament::all();
    	return view('admin.Round.List',['round' => $round,'tournament'=>$tournament]); 
    }

    public function getAdd()
    {
 
    	$tournament = Tournament::all();
    	return view('admin.Round.Add',['tournament'=> $tournament]);
    }

    public function postAdd(Request $request)
    {
    	$this -> validate($request,[
    		'tournament'=>'required',
    		'round_number'=>'required'
    		],[
    		'tournament.required'=>'You have not entered tournament name',
    		'round_number.required'=>'You have not entered a round_number'
    		]);
    	$round = new Round;
    	$round -> tournament_id = $request -> tournament;
    	$round-> round_number = $request -> round_number;
    	$round -> save();
    	return redirect ('admin/round/add') -> with('notifi','Add successfully');
    }
    public function getEdit($id)
    {
        $tournament = Tournament::all();
        $round = Round::find($id);
        return view('admin.Round.Edit',['round' => $round,'tournament'=>$tournament]);
    }

    public function postEdit(Request $request, $id)
    {

        $round = Round::find($id);
        $this -> validate($request, 
            [
                'tournament' => 'required',
                'round_number' => 'required',
            ],
            [
                'tournament.required'=>'Please enter the tournament name',
                'round_number.required'=>'Please enter the round_number name',
            ]);
        $round-> tournament_id = $request -> tournament;
        $round-> round_number = $request -> round_number;
        $round -> save();
        return redirect ('admin/round/list') -> with('notifi','Edit successfully');
    }
    public function getDelete($id)
    {
        $round = Round::find($id);
        $round -> delete();

        return redirect('admin/round/list') -> with('notifi','Delete successfully');
    }
}
