<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merch;

class MerchController extends Controller
{
    public function index(){
        return view('input-merch');
    }
    public function show(){
        $model = new Merch;
        $data=$model->all();
        return view('show-merch',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'nama'=>['required','min:1'],
            'ukurankaos'=>'required',
            'lightstick'=>'required',
            'photocard'=>'required',
            'accessories'=>'required'
        ]);
        //dd($model->id);
        Merch::create($validatedData);
        return redirect('show-merch')->with('status', 'Data Pembelian Merchandise Telah Dimasukan');
    }
    public function delete($id){
        $model = Merch::find($id);
        $model->delete();
        return redirect('show-merch')->with('status-deleted','Data Pembelian Merchandise Telah Dihapus');
    }
    public function edit($id){
        $model= Merch::find($id);
        return view('edit-merch')->with('post',$model);
    }
    public function update(Request $request, $id){
        $model= Merch::find($id);
        $validatedData=$request->validate([
            'nama'=>['required','min:1'],
            'ukurankaos'=>'required',
            'lightstick'=>'required',
            'photocard'=>'required',
            'accessories'=>'required'
        ]);

        $nama=$validatedData['nama'];
        $ukurankaos=$validatedData['ukurankaos'];
        $lightstick=$validatedData['lightstick'];
        $photocard= $validatedData['photocard'];
        $accessories= $validatedData['accessories'];
        //dd($model->id);
        Merch::where('id', $model->id)
            ->update([
                'nama'=>$nama,
                'ukurankaos'=>$ukurankaos,
                'lightstick'=>$lightstick,
                'photocard'=>$photocard,
                'accessories'=>$accessories
            ]);
        return redirect('show-merch')->with('status', 'Data Pembelian Merchandise Telah Diperbarui');
    }
}
