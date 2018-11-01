<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class post_c extends Controller
{
    public function encry(Request $request){


        //the incoming rquest is form javascript so i have to get data as follows
       	$a = ['0'=>'amritesh'];
        $encrypted = encrypt($a);
        //var_dump($a);
        //echo "<BR>";
        echo $encrypted;
        //echo "<BR>";
  
		$decrypted = decrypt($encrypted);
		//var_dump ($decrypted);
		//echo $decrypted;
       
    }
}
