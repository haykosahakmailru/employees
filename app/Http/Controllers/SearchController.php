<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller{
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $employees = DB::table('employees')->WHERE('firstname', 'LIKE', '%' . $search_text . '%')->paginate(3);
            return view('search', ['employees' => $employees]);
    }else{
        return view('search');
        }
    }
}

