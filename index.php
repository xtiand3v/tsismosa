<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Tsismosa.ph</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel = "stylesheet" type = "text/css" href = "css/styleDefault.css">
	<link rel = "stylesheet" type = "text/css" href = "css/styleIndex.css">
	<link rel = "shortcut icon" type = "image/x-icon" href ="icon/logo.ico" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Quicksand:300,400,500,700|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<script src = "js/jquery.js"></script>
	<script src = "js/index.js"></script>
</head>
<body>
<nav>
	<div class = "navTop">Develop by: Cristian Daron</div>
	<img src = "icon/logoNav.svg"></li>
	<div class = "navBot">&copy 2017 Tsismosa.ph</div>
</nav>
<div id = "navHidden">
<div class = "navBtns">
	<h4>Don't have an account? <span>Register</span></h4>
	<button class = "navClose"><img src = "icon/iconClose.svg"></button>
	<div class = "error"></div><div class = "errorBg"></div>
</div>
<div id = "loginForm">
<h1>Login Now</h1>
<h2>Enter the realm of true gossipers and be a part of a glorious mission to destroy people's lives.</h2>
<form method = "post" name = "frmLogin" class = "frmLogin">
	<img src = "icon/icoUser.svg">
	<input type = "text" name = "userId" class = "userId" placeholder = "Username" maxlength = "18"><img src = "icon/iconOkay.svg" class= "iptOkayU"><img src = "icon/iconClear.svg" class= "iptClearU"><div class = "clearU">Clear</div><br>
	<img src = "icon/icoPass.svg">
	<input type = "password" name = "userPass" class = "userPass" placeholder = "Password" maxlength = "15"><img src = "icon/iconOkay.svg" class= "iptOkayP"><img src = "icon/iconClear.svg" class= "iptClearP"><div class = "clearP">Clear</div>
	<h5>Forgot password? <span>Reset</span></h5>
	<button id = "lSubmit"><div>LOGIN</div></button>
    <button id = "lClose"><div>CANCEL</div></button>
</form>
</div>

<div id = "registerForm">
<h1>Register Now</h1>
<h2>Join the realm of true gossipers and be a part of a glorious mission to destroy people's lives.</h2>
<form method = "post" name = "frmLogin" class = "frmLogin">
	<img src = "icon/icoUser.svg">
	<input type = "text" name = "userId" class = "userId" placeholder = "Username" maxlength = "18"><img src = "icon/iconOkay.svg" class= "iptOkayU"><img src = "icon/iconClear.svg" class= "iptClearU"><div class = "clearU">Clear</div><br>
	<img src = "icon/icoPass.svg">
	<input type = "password" name = "userPass" class = "userPass" placeholder = "Password" maxlength = "15"><img src = "icon/iconOkay.svg" class= "iptOkayP"><img src = "icon/iconClear.svg" class= "iptClearP"><div class = "clearP">Clear</div>
	<h5>Forgot password? <span>Reset</span></h5>
	<a href="home.html"><button id = "lSubmit"><div>LOGIN</div></button></a>
    <button id = "lClose"><div>CANCEL</div></button>
</form>
</div>

</div>
<main>
	<div id = "mainHidden">
	</div>
	<div class = "main">

		<div id = "cover"></div>
		<div class = "mainCont">
			<button class = "btnSali"><span>JOIN NOW</span><div class = "btnBg"></div></button>
			<img src = "icon/logoNew.svg">
			<h1>Tsismosa.ph</h1>
			<h2>Where the best gossipers lurks.</h2>
			<h3 id = "ruin">Ruining people's lives since 2017</h3>
			<img class = "bg" src = "icon/bg.svg">
		</div>
	</div>	
</main>
</body>
</html>
<script src = "js/index.js"></script>