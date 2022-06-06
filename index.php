<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thanking Diary</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h2 align="center" style="border-bottom: 1px solid grey;, font-size:40px; font-family:Courier New;"> <b>Thanks Diary</b></h2>
    
    <p style="text-align: center; font-size:28px; font-family:Courier New;"> Thanks Diary is a website for people who desires to write their Thanking messages to God.</p>
    <p style="text-align: center; font-size:28px; font-family:Courier New;"> It records thanking message and allows the user to search their past thank diaries.</p>
    <p style="text-align: center; font-size:28px; font-family:Courier New;"> It is very convenient and useful tool.</p>
    <p style="text-align: center; font-size:28px; font-family:Courier New;"> Try this and start your Thanking Journey.</p>
    <div style="margin-left: 20%; font-family:Courier New;" class="col-md-8">
			<form method="POST" action="main.php">
            <div ></div>
				<input type="submit" style="color: white;" name="upload" value="Write my Diary"/>
            </div>
			</form>

	<div class="footer" style="font-family:Courier New;">
		Used code of : <a href="https://github.com/nikhilamin073">Nikhil Amin</a>
		Developed by : <a href="https://github.com/YMSeo-0918">Yoomin Seo</a>
	</div>
    <embed src="audio/bgm.m4a" loop="true" autostart="true" width="2" height="0"></embed>
	</body>
</html>
