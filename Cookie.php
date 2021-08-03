<?php
	add_action('init','my_setcookie');
	function my_setcookie(){
		setcookie('bgc_test_cookie','XXXXXX',3*DAYS_IN_SECONDS,COOKIEPATH,COOKIE_DOMAIN);
	}
	if(!isset($_COOKIE['bgc_test_cookie'])){
		echo "The cookie:'".$visitor_username."'is not set.";
	}else{
		echo "The cookie:'".$visitor_username."'is set.";
		echo "The Value of cookie:".$_COOKIE['bgc_test_cookie'];
	}
?>