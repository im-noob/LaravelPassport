<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Test_c extends Controller
{
    public function test_js(Request $request){


        //the incoming rquest is form javascript so i have to get data as follows
        $json = file_get_contents('php://input');
        // decoding the received JSON and store into $obj variable.
        $obj = json_decode($json,true);
        //Checking Email is already exist or not using SQL query.
        $sql_query = $obj['query'];


        $data = DB::table('users')
                     ->select()
                     ->where('email', '=', $sql_query)
                     ->get();
        echo (json_encode(['data'=>$data],201));
    }
    public function test(Request $request){


        //the incoming rquest is form javascript so i have to get data as follows
        
        $data = DB::table('users')
                     ->select()
                     ->where('email', '=', $_POST['query'])
                     ->get();
        echo (json_encode(['data'=>$data],201));
    }
}
