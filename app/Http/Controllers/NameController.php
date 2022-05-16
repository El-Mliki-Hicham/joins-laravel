<?php

namespace App\Http\Controllers;

use App\Models\name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NameController extends Controller
{
  public function  index(){

    $users = DB::table('product')
    ->join('categories', 'product.id_categores', '=', 'categores.id')
    ->select('*')
    ->get()->toArray();  
    
    

    return view('index',compact('users')) ;

 

}
}
