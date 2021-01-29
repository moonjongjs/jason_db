<?php

	//세션시작함수
	session_start();
	if( isset( $_SESSION['gaib_email'] ) ){

		$txt .= "<h3>환영합니다.</h3>";
		$txt .= "<h4>'".$_SESSION['gaib_email']."' 님!^^</h4>";
		$txt .= "<p><a href='javascript:void(0);' class='logoutBtn'>로그아웃</a></p>";


	}
	else{
		echo "";
    }
		

//session_loop_check.php
?>
