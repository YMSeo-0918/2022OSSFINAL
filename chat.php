<?php
	include 'connection.php';
	$query = "SELECT * FROM chat ORDER BY id DESC";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
?>
<div id="message">
	<img class="message-avatar" src="images/<?php echo $row['f']?>" alt="">
	<a class="message-author" href="#"> <?php echo $row['username'];?> </a>
	<span class="message-date"> <?php echo formatDate($row['datep']);?> </span>
	<span class="message-content"> <?php echo $row['m'];?> </span>
</div>
<?php endwhile; ?>