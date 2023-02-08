<?php include "header.php";
$fname = $_POST['fname'];
$age = $_POST['age'];






?>
<?php 


if ($age > 18)
{ 
	echo("Eligible to Vote");} 
else{ 
    echo("Not eligible to vote");}
?>






<?php include "footer.php" ?>