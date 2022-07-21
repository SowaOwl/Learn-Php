<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function calc(){
        return view('calc');
    }
    public function calc_result(Request $request){
        $valid = $request->validate([
            'x1' => 'required',
            'x2' => 'required',
        ]);
        if ($request->input('operation') == '+'){
            return $request->input('x1') + $request->input('x2');
        }
        else if ($request->input('operation') == '-'){
            return $request->input('x1') - $request->input('x2');
        }
        else if ($request->input('operation') == '*'){
            return $request->input('x1') * $request->input('x2');
        }
        else if ($request->input('operation') == '/'){
            if ($request->input('x2') == 0){
                return 'На ноль делить нельзя';
            }
            else{
                return $request->input('x1') / $request->input('x2');
            }
        }
    }
}
