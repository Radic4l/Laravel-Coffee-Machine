<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/**
 *
 */
class myController extends Controller
{

    public function list() {
        $drinks = DB::table('drinks')->get();
        return view('list', ['drinks'=>$drinks]);
    }
}



?>
