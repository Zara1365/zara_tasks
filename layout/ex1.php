<?php include "header.php" ?>
    <h1> 3.1 Write a simple PHP script to print your information (Name and your groupid)</h1>
<?php
echo "zahra hamidi <br>";
echo "group 17";


?>
<h1> 3.2 Write PHP code to display the following message.</h1>
<?php
echo "Hello world ! My name is  \"David\"";
?>
<h1>current Date</h1>
<?php  echo date ("d.m.Y") ?>

<h3> 3.4 variable in php </h3>
<?php
$title1 = "php is intersting";

echo "<h1>" . $title . " </h1>";
?>
<h3> 3.5 table & variables</h3>
<?php
$g1 =5;
$g2 =4;
$g3 =5;
echo "
<table>
<tr>
<th> s.N. </th><th> Name </th><th> Grade</th>
</tr>
<tr>
<td> 1 </td><td> pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 1 </td><td> johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 1 </td><td> john </td><td> $g3 </td>
</tr>
</table>
";
?>


<?php include "footer.php" ?>




    


