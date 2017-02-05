<?php
$quotes = array("When you want to succeed as bad as you want to breathe, then you will be successful. - Eric Thomas",
"Hard work beats talent when talent doesn't work hard. -Tim Notke",
"We only get to play this game one time... one life. - Gary Vaynerchuk",
"I find that the harder I work, the more luck I seem to have. - Thomas Jefferson");
?>

<html>
<head>

	<title>Jesse Prescott</title>

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>
<div class="maindiv">
	<div class="centerdiv">
		<h1>Jesse Prescott</h1>

		<img src='images/jesse.jpg' alt='Jesse Prescott'>

		<h2>About Me</h2>
	</div>
	<p>
		My name is Jesse Prescott, and I am a .NET Software Developer, currently living in Augusta, GA. My wife is in the Marine Corps, which is what brought us here (Fort Gordon).<br/>
		<br/>
		I completed my undergraduate degree in Computer Science at the end of 2016 (a 14 year journey of on and off part-time course work). I never imagined I would continue on after that, as I've never viewed a master's degree necessary for a programmer, but once I heard about Harvard Extention School, I thought about how cool it would be to have a Harvard degree!<br/>
		<br/>
		I am very excited for 2017! I'm starting this new adventure as well as becoming a father in April!
	</p>
	<div class="centerdiv">
		<h2>Random Quote</h2>
		<blockquote><?php echo $quotes[rand(0,3)]; ?></blockquote>

	</div>
</div>
</body>
</html>
