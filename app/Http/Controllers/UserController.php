<?php 
namespace App\Http\Controllers;
session_start();
use Input;
use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Session;
class UserController extends Controller {
  public function dologin() {
   
    if(Request::ajax()) {
      $data = Input::all();
      $user_id=$data['u'];
	  $user_password=md5($data['p']);
	  
	  
	  $result = DB::select("select * from master_user where email = '$user_id' and  passwd = '$user_password'");
	  
	  //print_r($result);
	  if($result)
	  {
	  	
	  if($result[0]->user_type)
	  {
		
		session(['email' => $user_id]);
		session(['nickname' => $result[0]->nickname]);
		session(['usertype' => $result[0]->usertype]);
		
		//$data=Session::all();
		Session::save();
		//print_r($data);
	  	echo "1|".$result[0]->usertype;
		
	  }
	  
	  }
	  else
	  {
	  	echo "0";
	  }
	  die;
    }
    }
}
