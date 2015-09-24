<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){

	}

    public function index(){
    $nonce      =$_GET['nonce'];
    $token	    ='weixin';
    $timestamp  =$_GET['timestamp'];
    $echostr	=$_GET['echostr'];
    $signature  =$_GET['signature'];
    $array		=array();
    $array		=array($nonce,$timestamp,$token);
    sort($array);
    $str     	=sha1(implode($array));
    if ($str   ==$signature) {
    	echo $echostr;
    	exit;
    }
    function show(){
    	echo 'imooc';
    }
}