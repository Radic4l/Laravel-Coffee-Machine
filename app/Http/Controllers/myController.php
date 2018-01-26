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

    // public function listOrder() {
    //     $listDesc = Boisson::orderBy('NAME', 'DESC')->get();
    //     $date = [
    //         'title' => 'Drinks list',
    //         'DrinksForView' => $listDesc
    //     ];
    //     return view('show.liste', $data);
    // }

    public function details($id) {
        $drinks = DB::select("select * from drinks where ID = '$id'");
        return view('drink/show', ["drinks"=>$drinks]);
        // $dataId = [
        //     'detail' => $boisson,
        // ];
        // return view('drink.show', $dataId);
    }

    // public function showDetails() {
    //     $showPrice = DB::table('drinks')->get();
    //     $showID = DB::table('drinks')->get();
    //     return view('');
    //     return view('show', ['drinks'=>$showPrice]);
    // }
}



?>
