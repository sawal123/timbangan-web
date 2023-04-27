<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Timbangan;
// use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        $date =   date("Y-m-d");
        $i = 1;
        $tb  = Timbangan::all();
        return view(
            'dashboard.dashboard',
            [
                "date"   => $date,
                "title"  => "Dashboard",
                "tb"     => $tb,
                "i"      => $i
            ]
        );
    }
    public function rekap()
    {
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $tgl = $_GET['filter'];
        $date =   date("Y-m-d");
        $i = 1;
        $tb  =  DB::table('timbangans')->whereDate('created_at', '=', $tgl)->get();
        return view(
            'dashboard.rekap',
            [
                "date"   => $date,
                "title"  => "Table Rekap",
                "tb"     => $tb,
                "i"      => $i
            ]
        );
    }
    
    public function simpanTimbang(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $berat2 = $request->berat;
        $waktu = date("Y-m-d H:i:s");
        $kode = substr(md5(time()), 0, 4);
        $model = new Timbangan;
        // $model2 = 1 / 23;

        $model->berat = $request->berat;
        $model->waktu = $waktu;
        $model->kode = $kode;
        $model->save();
        return  $berat2;
    }
    public function tableAjax(){
        date_default_timezone_set('Asia/Jakarta');
        $date =   date("Y-m-d");
        $tgl  =  DB::table('timbangans')->orderBy('id','desc')->whereDate('created_at', '=', $date)->get();
        $satuan = "Kg";
        $i = 1;
        return view('dashboard.tableajax',
        [
            "satuan" => $satuan,
            "tgl" => $tgl,          
            "i"  => $i
        ]);
    }


    public function tableData(){
        date_default_timezone_set('Asia/Jakarta');
        $date =   date("Y-m-d");
        $berat   =  DB::table('timbangans')->whereDate('created_at', '=', $date)->get()->max('berat');
        $ringan  =  DB::table('timbangans')->whereDate('created_at', '=', $date)->get()->min('berat');
        $avg     =  DB::table('timbangans')->whereDate('created_at', '=', $date)->get()->average('berat');
        $jml     =  DB::table('timbangans')->whereDate('created_at', '=', $date)->get()->sum('berat');        
        $satuan = "Kg";
        $i = 1;
        return view('dashboard.dataajax',
        [
            "satuan" => $satuan,
            "berat"  => $berat / 1000,
            "ringan" => $ringan / 1000,
            "avg"    => round($avg / 1000,2), 
            "jml"    => round($jml / 1000, 2),          
            "i"      => $i
        ]);
    }


    public function destroy($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $berat = Timbangan::find($id);
        $berat->delete();
        $sesHapus = $_SESSION["hapus"] = 'Data Berhasil Dihapus';
        return redirect(url('/rekap?filter='. date("Y-m-d")))->with('success', 'Data Berhasil di Hapus!');
    }

    public function update(Request $request, $id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date =   date("Y-m-d");
        $model = Timbangan::find($id);
        $model->berat = $request->berat;  
        $model->save();
        return redirect(url('/rekap?filter='.$date))->with('success', 'Data Berhasil di Ubah');
    }


    public function beratTimbangan()
    {
        return DataTables::of(Timbangan::query())->toJson();
    }
}
