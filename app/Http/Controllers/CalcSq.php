<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcSq extends Controller
{
    public function index(Request $request){

        $number = $request->input('number');

        $number = $number*$number;

        $Sq = 'squared';
        $link = mysqli_connect('localhost', 'root', '', 'network');
        $stmt = mysqli_prepare($link, "INSERT INTO results (name, result) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $Sq, $number);
        $result = mysqli_stmt_execute($stmt);
        
        mysqli_close($link);
        return $number;
    }

}
