<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meet;

class MeetController extends Controller
{
    public function index(){
        return view('input-meet');
    }
    public function show(){
        $model = new Meet;
        $data=$model->all();
        return view('show-meet',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'nama'=>['required','min:1'],
            'email'=>'required',
            'interaksi'=>'required',
            'sesi'=>'required|min:1|max:3',
            'artist'=>'required'
        ]);
        Meet::create($validatedData);
        return redirect('show-meet')->with('status', 'Data Meet Telah Dimasukan');
    }
    public function delete($id){
        $model = Meet::find($id);
        $model->delete();
        return redirect('show-meet')->with('status-deleted','Data Meet Telah Dihapus');
    }
    public function edit($id){
        $model= Meet::find($id);
        return view('edit-meet')->with('post',$model);
    }
    public function update(Request $request, $id){
        $model= Meet::find($id);
        $validatedData=$request->validate([
            'nama'=>['required','min:1'],
            'email'=>'required',
            'interaksi'=>'required',
            'sesi'=>'required|min:1|max:3',
            'artist'=>'required'
        ]);

        $nama=$validatedData['nama'];
        $email=$validatedData['email'];
        $interaksi=$validatedData['interaksi'];
        $sesi= $validatedData['sesi'];
        $artist= $validatedData['artist'];
        //dd($model->id);
        Meet::where('id', $model->id)
            ->update([
                'nama'=>$nama,
                'email'=>$email,
                'interaksi'=>$interaksi,
                'sesi'=>$sesi,
                'artist'=>$artist
            ]);
        return redirect('show-meet')->with('status', 'Data Meet Telah Diperbarui');
    }
}
