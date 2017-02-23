<?php 


function gen_token() {
	//这里我是贪方便，实际上单使用Rand()得出的随机数作为令牌，也是不安全的。
    //这个可以参考我写的Findbugs笔记中的《Random object created and used only once》
	$token = md5(uniqid(rand(), true));
	return $token;
}
function gen_stoken(){
	session_start();
	$pToken="";
	if($_SESSION['ptoken'] == $pToken){
		$_SESSION['ptoken'] = gen_token();
	}else{
		echo "ok";
	}
}
