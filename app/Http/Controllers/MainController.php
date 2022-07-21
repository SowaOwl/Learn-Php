<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create_new_user(Request $request)
    {
        $new_user = new User();
        $new_user->name = $request->name;
        $new_user->password = $request->password;
        $new_user->email = $request->email;
        $new_user->save();

    }
    public function get_user_by_id($id){
        $user = User::where('id', $id)->with('userInfo')->first();
        return $user;
    }
    public function get_all_users(){
        $users = User::get();
        return $users;
    }
    public function db_work(){
        //update
//        $user = User::where('id', 1)->first();
//        $user->email = 'test@gmail.com';
//        $user->save();

        //create

        //join
//        $user_with_info = User::with('userInfo');

    }
    public function calc(){
        return view('calc');
    }
    public function calc_result(Request $request){
        $valid = $request->validate([
            'x1' => 'required',
            'x2' => 'required',
        ]);
        $operation = $request->input('operation');
        $x1 = $request->input('x1');
        $x2= $request->input('x2');
        if ($operation == '+'){
            return $x1 + $x2;
        }
        else if ($operation == '-'){
            return $x1 - $x2;
        }
        else if ($operation == '*'){
            return $x1 * $x2;
        }
        else if ($operation == '/'){
            if ($x2 == 0){
                return 'На ноль делить нельзя';
            }
            else{
                return $x1 / $x2;
            }
        }
    }
}
