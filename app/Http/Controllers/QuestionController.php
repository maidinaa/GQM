<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_question= \App\Question::where('deskripsi_qst' , 'LIKE' , '%'.$request->cari. '%')->get();
    	}else{
    		$data_question = \App\Question::all();
    	}
    	return view('question.index',['data_qst'=> $data_question]);
    }

    public function create(Request $request)
    {
    	\App\Question::create($request->all());
    	return redirect ('/question')->with('sukses','Data berhasil diinput');	
    }
    public function edit($id)
    {
    	$goal= \App\Goal::find($id);
    	return view('question/edit', ['goal' => $goal]);
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

}
