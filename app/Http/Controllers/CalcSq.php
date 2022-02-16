<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcSq extends Controller
{
    public function index(Request $request){

        $number = $request->input('number');

        $number = $number*$number;

        $Sq = 'squared';

        $link = mysqli_connect('mysql57.tcagame01.sakura.ne.jp','tcagame01','tcagame2021','tcagame01_20j70009');
        $stmt = mysqli_prepare($link, "INSERT INTO results (name, result) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $Sq, $number);
        $result = mysqli_stmt_execute($stmt);
        
        mysqli_close($link);
        return $number;
    }

}
