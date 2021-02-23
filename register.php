<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="src/css/register.css">
</head>
<body>
	<div class="container">
	    <form method="post" action="">
	        <div id="div_register">
	            <h1 onClick="window.location.href='./';">Register</h1>
	            <div>
	                <input type="text" class="textbox" id="txt_uname" name="txt_name" placeholder="Name"/>
	            </div>
	            <div>
	                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
	            </div>
	            <div>
	                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
	            </div>
	            <div>
	                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
	            </div>
	        </div>
	    </form>
	</div>
</body>
</html>