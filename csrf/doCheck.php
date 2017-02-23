<?php 
include("token.php");
if($_POST){
	session_start();
	if($_POST['ptoken'] == $_SESSION['ptoken']){
		echo "SUSS";
		$_SESSION['ptoken'] = gen_token();
	}else{
		echo "ERROR";
	}
}


?>