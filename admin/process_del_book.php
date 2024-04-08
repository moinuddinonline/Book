<?php
require('includes/config.php');
$d=$_GET['sid'];
			$query="delete from book where b_id ='$d'";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_book.php");

?>