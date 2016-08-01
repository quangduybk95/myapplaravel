<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ReadBook extends Controller
{
    public function index()
    {
    	return view('readbook.index');
    }
    public function getAllTruyen()
    {
    	$truyen = DB::select('select * from truyen order by views DESC limit 24');
    	return view('readbook.index',['data'=>$truyen]);
    }
    public function insert()
    {
    	$ten = 'Dế mèn phiêu lưu kí';
    	$link = 'http://img.v3.news.zdn.vn/w720/Uploaded/Ycgmvlbp/2016_02_28/59244b31.jpg';
    	for($i=0;$i<30;$i++)
    	{
    		$a = $ten.$i;
    	DB::select("insert into truyen (ten_truyen,id_tacgia,link_image) values ($a,1,$link)");
    }
    }
}
