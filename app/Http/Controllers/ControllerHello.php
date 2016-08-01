d<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ControllerHello extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function hello($name,$age){
	return view('hello', ['name'=>$name,
		'age'=>$age]);
}
    public function hello2(){
    	$data = [];
    	$data['name'] = 'Duy';
		$data['age'] = '21';    	
	return view('hello',$data);
}

}