<?php include "header.php" ?>


<h2>1) Write a script that gets the current month and prints</h2>

<?php
  $month=date("F");
  if ($month="August") {
    echo "this is 
    February so I don't have any holidays";
  }
  else {
    echo "this is Month-name so I don't have any holidays ";
   
  }
?> 
<h2>2) Assign colour red to a variable </h2>

<?php 
  
  if ($Color="red") {
    echo "The color is red. ";
  }
  else {
    echo "The color is not red. ";
   
  }
 
?> <br>
<?php 
  
  if ($Color=" not red") {
    echo "The color is not red. ";
  }
  else {
    echo "The color is red. ";
   
  }
?> <br>




















<?php include "footer.php" ?>