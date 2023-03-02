<?php

namespace rami\Calculater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CalculaterController extends Controller
{
    public function add($a,$b){
        echo $a + $b;
    }

    public function sub($a,$b){
        echo $a - $b;
    }

    public function check(){
        return 5;
    }
}
