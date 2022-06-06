<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thanking Diary</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script >
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.open('GET','chat.php',true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">
	<h2 align="center" style="border-bottom: 1px solid grey; font-family:Courier New;"> Thanks Diary</h2>
	<div class="ibox-content">
        <div class="row">
            <div style="margin-left: 10%; font-family:Courier New;" class=" col-md-10">
                <div class="chat-discussion">
                    <div class="chat-message left">
                        <div id="chat"></div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div style="background-color:#E4E9BE;" class="row">
     	<div style="margin-left: 20%; font-family:Courier New;" class="col-md-8">
			<form method="POST" action="main.php">
				<div></div>
				<input type="text" name="name" placeholder="Thank Title" required="">
				<textarea name="message" placeholder="Today's Thanking Message" required=""></textarea>
				<input type="text" name="filename" placeholder="Type image file name" required="">
				<input type="submit" style="color: white;" name="submit" value="upload"/>
			</form>
			<form method="POST" action="calendar.php">
				<div></div>
				<input type="submit" style="color: white;" name="upload" value="Go to Calendar"/>
			</form>
		</div>
	</div>

	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$message = $_POST['message'];
			$filename = $_POST['filename'];
			$query = "INSERT INTO chat (username, m, f) VALUES ('$name','$message', '$filename')";
			$run = $con -> query($query);
		}
	?>
	<div class="footer" style="font-family:Courier New;">
		Used code of : <a href="https://github.com/nikhilamin073">Nikhil Amin</a>
		Developed by : <a href="https://github.com/YMSeo-0918">Yoomin Seo</a>
	</div>
    <!--<embed src="audio/bgm.m4a" loop="true" autostart="true" width="2" height="0"></embed>-->
	</body>
</html>
