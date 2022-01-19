<?php

namespace App\Http\Controllers;

use App\Models\RegistrationModel;
use Illuminate\Http\Request;

class ApplyListController extends Controller
{
    function ApplyIndex(){
        return view('ApplyList');
    }

    function getApplyData(){
        $result=json_decode(RegistrationModel::orderBy('r_id','desc')->get());
        return $result;
    }

    function ApplyDelete(Request $req){
        $r_id=$req->input('r_id');
        $result=RegistrationModel::where('r_id','=',$r_id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getApplyDetails(Request $req){
        $r_id=$req->input('r_id');
        $result=RegistrationModel::where('r_id','=',$r_id)->get();
        return $result;
    }


    function ApplyUpdate(Request $req){
        $r_id=$req->input('r_id');
        $fast_name=$req->input('fast_name');
        $last_name=$req->input('last_name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $nid=$req->input('nid');
        $dob=$req->input('dob');
        $father_name=$req->input('father_name');
        $mother_name=$req->input('mother_name');
        $division=$req->input('division');
        $district=$req->input('district');
        $upozila=$req->input('upozila');
        $union=$req->input('union');
        $ward=$req->input('ward');
        $password=$req->input('password');


        $result=RegistrationModel::where('r_id','=',$r_id)->update([
            'r_id'=>$r_id,
            'fast_name'=>$fast_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'phone'=>$phone,
            'nid'=>$nid,
            'dob'=>$dob,
            'father_name'=>$father_name,
            'mother_name'=>$mother_name,
            'division'=>$division,
            'district'=> $district,
            'upozila'=> $upozila,
            'union'=>$union,
            'ward'=>$ward,
            'password'=> $password
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function ApplyAdd(Request $req){
        $fast_name=$req->input('fast_name');
        $last_name=$req->input('last_name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $nid=$req->input('nid');
        $dob=$req->input('dob');
        $father_name=$req->input('father_name');
        $mother_name=$req->input('mother_name');
        $division=$req->input('division');
        $district=$req->input('district');
        $upozila=$req->input('upozila');
        $union=$req->input('union');
        $ward=$req->input('ward');
        $password=$req->input('password');

        $result= RegistrationModel::insert([
            'fast_name'=>$fast_name,
            'last_name'=>$last_name,
            'email'=>$email,
            'phone'=>$phone,
            'nid'=>$nid,
            'dob'=>$dob,
            'father_name'=>$father_name,
            'mother_name'=>$mother_name,
            'division'=>$division,
            'district'=> $district,
            'upozila'=> $upozila,
            'union'=>$union,
            'ward'=>$ward,
            'password'=> $password
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }


}
