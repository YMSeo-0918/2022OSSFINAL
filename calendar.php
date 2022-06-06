<?php
	include 'connection.php';
	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Calendar</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <h2 align="center" style="border-bottom: 1px solid grey; font-family:Courier New;">
        Welcome to Calendar</h2>

    <div style="text-align: center; font-family:Courier New;" class="ibox-content">
        <h4 align="center">Choose a date to see your "Thanks message"
        </h4>
        <form method="POST" action="calendar.php">
            <input type='date' name='dayOfMessage'/>
            <input
                type="submit"
                style="color: white; height: 40px; width: 100px;"
                name="submit"
                value="submit"/>
        </form>
    </div>
    <div style="text-align: center; font-family:Courier New;" class="center">
        <?php
		$v_testDate  =  $_POST['dayOfMessage']; 
		$newTestDate = new  DateTime( $v_testDate );
		$dayInt = $newTestDate ->format( "w" );
		$day = [ "Sunday" , "Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday" , "Saturday" ];
	?>
        <p>
            Thanking Message on
            <?php echo $v_testDate;?>,
            <?php echo $day [ $dayInt ];?>
        </p>
    </div>
    <?php
	$query = "SELECT * FROM chat WHERE datep LIKE '%$v_testDate%'";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
	?>

<div style="height:400px; margin-left: 20%;margin-right: 20%; text-align: center; font-family:Courier New;" id="message">
        <div style="height:150px;"><img class="message-avatar" src="images/<?php echo $row['f']?>.png" alt="" style="height: 100%; width: auto;"></div>
        <div>
		<a class="message-author" href="#" style="font-size: 18pt">
            <?php echo $row['username'];?>
        </a>
	</div>
        <div class="message-date"  style="font-size: 18pt">
            <?php echo $row['datep'];?>
        </div>
        <div class="message-content" style="font-size: 18pt">
            <?php echo $row['m'];?>
	</div>
    </div>

    <?php endwhile; ?>

    <div class="footer" style="font-family:Courier New;">
        <form method="POST" action="index.php">
            <div></div>
            <input type="submit" style="color: white;" name="back" value="Go to Main Page"/>
        </form>

    </div>

    <embed src="audio/bgm.m4a" loop="true" autostart="true" width="2"
    height="0"></embed>
</body>
</html>