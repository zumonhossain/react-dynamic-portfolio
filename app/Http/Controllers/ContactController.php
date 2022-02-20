<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTableModel;

class ContactController extends Controller{
    function onContactSend(Request $req){
        $ContactArray = json_decode($req->getContent(),true);
        
        $name = $ContactArray['name'];
        $email=$ContactArrayt['email'];
        $msg=$ContactArray['msg'];
        
        $result=ContactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$msg]);

      if($result==true){
        return 1;
      }
      else{
        return 0;
      }   
    }
}
