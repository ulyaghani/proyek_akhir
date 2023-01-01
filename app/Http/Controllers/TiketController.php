<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    public function index(){
        return view('input-tiket');
    }
    public function show(){
        $model = new Tiket;
        $data=$model->all();
        return view('show-tiket',['data'=>$data]);
    }
    public function input(Request $request){
        $validatedData = $request->validate([
            'nama'=>['required','min:1'],
            'notelp'=>'required|min:4',
            'jadwal'=>'required', 'date',
            'fandom'=>'required',
            'jenistiket'=>'required'
        ]);
        Tiket::create($validatedData);
        return redirect('show-tiket')->with('status', 'Data Pembeli Tiket Telah Terdaftar');
    }
    public function delete($id){
        $model = Tiket::find($id);
        $model->delete();
        return redirect('show-tiket')->with('status-deleted','Data Pembeli Tiket Telah Dihapus');
    }
    public function edit($id){
        $model= Tiket::find($id);
        return view('edit-tiket')->with('post',$model);
    }
    public function update(Request $request, $id){
        $model= Tiket::find($id);
        $validatedData=$request->validate([
            'nama'=>['required','min:1'],
            'notelp'=>'required|min:4',
            'jadwal'=>'required', 'date',
            'fandom'=>'required',
            'jenistiket'=>'required'
        ]);

        $nama=$validatedData['nama'];
        $notelp=$validatedData['notelp'];
        $jadwal=$validatedData['jadwal'];
        $fandom= $validatedData['fandom'];
        $jenistiket= $validatedData['jenistiket'];
        //dd($model->id);
        Tiket::where('id', $model->id)
            ->update([
                'nama'=>$nama,
                'notelp'=>$notelp,
                'jadwal'=>$jadwal,
                'fandom'=>$fandom,
                'jenistiket'=>$jenistiket
            ]);
        return redirect('show-tiket')->with('status', 'Data Pembelian Tiket Telah Diperbarui');
    }
}
