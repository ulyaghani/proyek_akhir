<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meet;
use App\Models\Merch;
use App\Models\Tiket;

class DashboardController extends Controller
{
    public function mount(){
    }
    public function index(){
        $data=Meet::select('interaksi')->get()->groupBy('interaksi');
        // dd($data);
        $jumlah_meet=Meet::count();
        $interaksis=[];
        $interaksiCount=[];
        foreach($data as $interaksi => $values){
            $interaksis[]=$interaksi;
            $interaksiCount[]=count($values);
        }
        
        $item=Meet::select('interaksi')->get()->groupBy('interaksi');
        $jumlah_meet= Meet::count();
        $interaksis=[];
        $interaksiCount=[];
        foreach($item as $interaksi => $values){
            $interaksis[]=$interaksi;
            $interaksiCount[]=count($values);
        }

        $item=Tiket::select('jenistiket')->get()->groupBy('jenistiket');
        $jumlah_tiket= Tiket::count();
        $jenistikets=[];
        $jenistiketCount=[];
        foreach($item as $jenistiket => $values){
            $jenistikets[]=$jenistiket;
            $jenistiketCount[]=count($values);
        }
        // dd($genders,$genderCount);
        $jumlah_merch=Merch::count();
        // dd($jumlah_merch);
        return view('dashboard',['data'=>$data,
                                'interaksi'=>$interaksi,
                                'interaksiCount'=>$interaksiCount,
                                'item'=>$item,
                                'jenistikets'=>$jenistikets,
                                'jenistiketCount'=>$jenistiketCount,
                                'jumlah_tiket'=>$jumlah_tiket,
                                'jumlah_merch'=>$jumlah_merch,
                                'jumlah_meet'=>$jumlah_meet
                                ]);
    }
}
