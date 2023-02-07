<?php include "header.php" ?>

<h3>Exercise 3.in class task variable & operators (variable.php)</h3>

<h2>

1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site
</h2>
<form action="action.php" method="post">


    <div class="row">
    <div class="col">


 <input type="text" name= "fname" required placeholder="first name" class="form-control">
</div>

<div class="col">
<input type="text"  name="lname" required placeholder="last name" class="form-control"> 
</div>

</div>

<div class="row">
    <div class="col">


 <input type="text" name= "Birth date" required placeholder="Birth date " class="form-control">
</div>

<div class="col">
<input type="text"  name="Select fav color" required placeholder="Select fav color" class="form-control"> 
</div>

</div>

<h3> 3. Prepare a simple html table and apply bootstrap style to the table </h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Nickname</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Roham</td>
      <td>Zahedi</td>
      <td>@Roham</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Maryam</td>
      <td>Mazaheri</td>
      <td>@Mari</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Zahra</td>
      <td>Hamidi</td>
      <td>@Zara</td>
    </tr>
  </tbody>
</table>

<h3> 4. Write a PHP script with two string variables</h3>

<?php
$fname = "Historical Place Of ";
$lname = "Finland!";
echo $fname . "  " . $lname . "<br>";
echo strlen($fname) + strlen($lname) ."<br>";
?>

<h3> 5.Use variables to store these numbers and echo statement to output your answer.
 </h3>

 <?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1+$num2+$num3;
echo $num1."+".$num2."+".$num3."=". $sum ."<br>";
?>

<br>
<h3> 6.Write a PHP script to detect the browser being used. </h3>

<?php
echo $_SERVER['HTTP_USER_AGENT'] ."<br>";
?>

</div>

</form>







<?php include "footer.php" ?>