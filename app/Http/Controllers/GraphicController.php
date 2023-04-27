<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class GraphicController extends Controller
{
    //
    public function index()
    {
         $bln = $_GET['bulan'];
         $thn = $_GET['tahun'];
         $bln1 = $_GET['bulan1'];
         $thn1 = $_GET['tahun1'];
         $query = DB::table('timbangans');
         $gfirst = $query
         ->whereYear('created_at', '=', $thn)
         ->whereMonth('created_at', '=', $bln);
        date_default_timezone_set('Asia/Jakarta');
            for($hari=1;$hari <=31 ;$hari++){
                $chartuser     = collect(DB::SELECT("SELECT SUM(berat) AS berat from timbangans
                where year(created_at)='$thn'
                AND month(created_at)='$bln'
                AND day(created_at)='$hari' "))
                ->first();
                $bulan1 = $chartuser->berat;
                $jumlah_user[] = $bulan1 / 1000;
                $graphic1     = collect(DB::SELECT("SELECT SUM(berat) AS berat from timbangans
                where year(created_at)='$thn1'
                AND month(created_at)='$bln1'
                AND day(created_at)='$hari' "))
                ->first();
                $bulan2 = $graphic1->berat;
                $jumlah_graphic[] = $bulan2 / 1000;              
                $day[] = $hari;
            }
        return view('dashboard.graphic', [
            "title" => "Graphic",
            "db"=> $query,
            "chart" => $jumlah_user,
            "hari" => $day,      
            "graphic" => $jumlah_graphic
        ]);
    }

    public function cetak()
    {
        $bln = $_GET['bulan'];
        $thn = $_GET['tahun'];
        $bln1 = $_GET['bulan1'];
        $thn1 = $_GET['tahun1'];
        $query = DB::table('timbangans');
         $gfirst = $query
         ->whereYear('created_at', '=', $thn)
         ->whereMonth('created_at', '=', $bln);
        date_default_timezone_set('Asia/Jakarta');
            for($hari=1;$hari <=31 ;$hari++){
                $chartuser     = collect(DB::SELECT("SELECT SUM(berat) AS berat from timbangans
                where year(created_at)='$thn'
                AND month(created_at)='$bln'
                AND day(created_at)='$hari' "))
                ->first();
                $bulan1 = $chartuser->berat;
                $jumlah_user[] = $bulan1 / 1000;

                $graphic1     = collect(DB::SELECT("SELECT SUM(berat) AS berat from timbangans
                where year(created_at)='$thn1'
                AND month(created_at)='$bln1'
                AND day(created_at)='$hari' "))
                ->first();
                $bulan2 = $graphic1->berat;
                $jumlah_graphic[] = $bulan2 / 1000;
                $day[] = $hari;
            }
        return view('dashboard.print', [
            "title" => "Graphic",
            "db"=> $query,
            "chart" => $jumlah_user,
            "hari" => $day,      
            "graphic" => $jumlah_graphic
        ]);
    }
}
