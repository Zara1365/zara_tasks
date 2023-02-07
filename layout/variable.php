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


 <input type="text" name= "birth date" required placeholder="birth date " class="form-control">
</div>

<div class="col">
<input type="text"  name="select fav color" required placeholder="select fav color" class="form-control"> 
</div>

</div>





Birth Date: <input type="date" name="bdate"> <br>
select fav color: <input type="color" name="color"> <br>
<input type="submit" value="submit">



</form>







<?php include "footer.php" ?>