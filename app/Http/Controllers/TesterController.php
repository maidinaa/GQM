<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesterController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_tester= \App\Tester::where('name' , 'LIKE' , '%'.$request->cari. '%')->get();
    	}else{
    		$data_tester = \App\Tester::all();
    	}
    	return view('tester.index',['data_tester'=> $data_tester]);
    }

    public function create(Request $request)
    {
		//insert ke tabel users
		$user = new \App\User;
	//	$user->increments('id');
		$user->role = 'tester';
		$user->name = $request->nama;
		$user->email = 'email@gmail.com';
		$user->password = bcrypt('rahasia');
		$user->remember_token = str_random(60);
		$user->save();

		//insert ke tabel tester
		$request->request->add(['user_id' => $user->id]);
		$tester = \App\Tester::create($request->all());
    	return redirect ('/tester')->with('sukses','Data berhasil diinput');	
    }
    public function edit($id)
    {
    	$tester= \App\Tester::find($id);
    	return view('tester/edit', ['tester' => $tester]);
    }
    public function update(Request $request,$id)
    {
    	$tester= \App\Tester::find($id);
    	$tester->update($request->all());
    	if($request->hasFile('avatar')){
    		$request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
    		$tester->avatar = $request->file('avatar')->getClientOriginalName();
    		$tester->save();
    	}
    	return redirect ('/tester')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
    	$tester= \App\Tester::find($id);
    	$tester->delete();
    	return redirect ('/tester')->with('sukses','Data berhasil terhapus');
    }
    public function profile($id)
    {
    	$tester = \App\Tester::find($id);
    	return view('tester.profile',['tester' => $tester]);
    }
}

