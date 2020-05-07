<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_goal= \App\Goal::where('deskripsi_goal' , 'LIKE' , '%'.$request->cari. '%')->get();
    	}else{
    		$data_goal = \App\Goal::all();
    	}
    	return view('goal.index',['data_goal'=> $data_goal]);
	}
	
	public function testergoal(Request $request)
    {
    	if($request->has('cari')){
    		$data_goal= \App\Goal::where('deskripsi_goal' , 'LIKE' , '%'.$request->cari. '%')->get();
    	}else{
    		$data_goal = \App\Goal::all();
    	}
    	return view('goal.testergoal',['data_goal'=> $data_goal]);
    }

    public function create(Request $request)
    {
    	\App\Goal::create($request->all());
    	return redirect ('/goal')->with('sukses','Data berhasil diinput');	
    }
    public function edit($id)
    {
    	$goal= \App\Goal::find($id);
    	return view('goal/edit', ['goal' => $goal]);
    }
    public function update(Request $request,$id)
    {
    	$goal= \App\Goal::find($id);
    	$goal->update($request->all());
    	return redirect ('/goal')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
    	$goal= \App\Goal::find($id);
    	$goal->delete();
    	return redirect ('/goal')->with('sukses','Data berhasil terhapus');
	}
	
	public function goal_question($id)
    {
    	$goal = \App\Goal::find($id);
		return view('goal.goal_question',['goal' => $goal]);

    }
}
