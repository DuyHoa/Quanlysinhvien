<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
   /* public function all_course(){
    	$result = DB::table('monhocnganhs')
            ->join('monchuyennganhs', 'monhocnganhs.department_code', '=', 'monchuyennganhs.department_code')
            ->join('mondaicuongs', 'monhocnganhs.department_code', '=', 'mondaicuongs.department_code')
            ->select('monhocnganhs.*', 'contacts.phone', 'orders.price')
            ->get();
            return $result;
    }
    public function get_mon_dc($ma_nganh){
    	$result = DB::table('monhocnganhs')
    }*/

    public function get_mon_hoc($ma_nganh){
    	/*$result = DB::table('mondaicuongs')->select('mondaicuongs.*');*/
    	$result2 = DB::table('monchuyennganhs')->select('monchuyennganhs.*')->where('monchuyennganhs.department_code', '=', $ma_nganh )->get();
    	return $result2;
    }
}
