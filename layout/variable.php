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
<?php
$g1 =5;
$g2 =5;
$g3 =5;
echo "
<table>
<tr>
<th> s.N. </th><th> Name </th><th> Grade</th>
</tr>
<tr>
<td> 1 </td><td> Roham Zahedi</td><td> $g1 </td>
</tr>
<tr>
<td> 2 </td><td> Maryam Mazaheri </td><td> $g2 </td>
</tr>
<tr>
<td> 2 </td><td> Nazi Rahnama </td><td> $g3 </td>
</tr>
</table>
";
?>








</form>







<?php include "footer.php" ?>