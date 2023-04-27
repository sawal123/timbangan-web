<?php

namespace App\Http\Controllers;

use App\Models\Timbangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        $date = date("Y-m-d");
        if (Auth::check()) {
            return redirect('/dashboard?filter='. $date);
        }else{
            return view('auth.login');
        }
    }
    public function cekData()
    {
        
        date_default_timezone_set('Asia/Jakarta');
        $date =   date("Y-m-d");
        error_reporting(0);
        $cekData = DB::table('timbangans')->whereDate('created_at', '=', $date)->count();
        // dd($cekData);
        echo $cekData;
        // return $cekData;
        
        // return view('welcome');
        
        
    }
    
}
