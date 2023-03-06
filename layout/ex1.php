<?php include "header.php" ?>
    <h1> 3.1) Write a simple PHP script to print your information (Name and your groupid)</h1>
<?php
echo "zahra hamidi <br>";
echo "group 17";


?>
<h1> 3.2) Write PHP code to display the following message.</h1>
<?php
echo "Hello world ! My name is  \"David\"";
?>
<h1>current Date</h1>
<?php  echo date ("d.m.Y") ?>

<script>
document.write("Hello World this is javascript");
</script>

<noscript>
    please enable javascript to view this content,

</noscript>

<input type="button" onclick="hello()" value="click me">


<h3> 3.4)variable in php </h3>
<?php
$title1 = "php is intersting";

echo "<h1>" . $title . " </h1>";
?>
<script>
    //window.alert
   // window.alert("this will trigger an alert box");
    //window.alert(5+10);
    //document.write
    document.write("hello this is intersting");
</script>
<h3> 3.5) table & variables</h3>
<button onclick="add()" >click to add </button>
<hr>
<p id="place1" style="color:red; background-color: yellow;"> </p>

<span id="place2" style="color:red; background-color: green;"> </span>

<script>




document.getElementById("place1").innerHTML = "this will go to place1";

document.getElementById("place2").innerHTML = "this will go to span";
</script>


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
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr>
<td> 2 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";
?>

<h3> 4) Screenshot of the development environment</h3>
<img src="picture.png" alt="my picture">

<h2> <br> changing background-color </h2>
<form>
    <input type="color" name = "newColor"
     onchange= "changeColor('newColor',this.value)">


</form>
<br>

<?php include "footer.php" ?>




    


