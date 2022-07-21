<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function create_new_user_info(Request $request){
        $new_user_info = new UserInfo();
        $new_user_info->id = $request->id;
        $new_user_info->user_id = $request->user_id;
        $new_user_info->full_name = $request->full_name;
        $new_user_info->info = $request->info;
        $new_user_info->save();
    }
    public function update_user_info_by_id($id,Request $request){
        $new_user_info = UserInfo::where('id', $id)->first();
        $new_user_info->user_id = $request->user_id;
        $new_user_info->full_name = $request->full_name;
        $new_user_info->info = $request->info;
        $new_user_info->save();
    }
    public function delete_user_info_by_id($id){
        UserInfo::where('id', $id)->delete();
    }
    public function get_all_user_info(){
        $users_info = UserInfo::get();
        return $users_info;
    }
    public function get_user_info_by_id($id){
        $user_info = UserInfo::where('id', $id)->first();
        return $user_info;
    }
}
