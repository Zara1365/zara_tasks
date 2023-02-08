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
<h2>3) Write a program to grade students based on their total score </h2>
<?php 
$grade=86;
if ($grade >=80 && $grade <=100) {
echo "The grade is Excellent";
}elseif($grade < 80 && $grade >=70) {
    echo "The grade is great";
}
elseif($grade < 70 && $grade >=60) {
    echo "The grade is good";
}
elseif($grade < 60 && $grade >=50) {
    echo "The grade is pass";
}
elseif($grade < 50 ) {
    echo "Failed";
} else {
echo "your grade is not ok,its has a probem please try again";

}
?> 
<h2>3) Write a program to grade students based on their total score </h2>








<?php include "footer.php" ?>