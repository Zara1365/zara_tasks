<?php include "header.php" ?>
<h2>1)Write a php script to display courses as list</h2>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $c)
{
echo "$c, ";
}
sort($courses);
echo "<ul>";
foreach ($courses as $c)
{
echo "<li>$c</li>";
}
echo "</ul>";
?>
<h2>2)The unset() function is used to remove element from the array</h2>


<?php
$courses1 = array(1=> "PHP", 2=> "HTML",3=> "JavaScript", 4=>"CMS",5=> "Project");
foreach ($courses1 as $c)
unset($courses1["3"]); 
{

}
sort($courses1);
echo "<ul>";
foreach ($courses1 as $c)
{
echo "<li>$c</li>";
}
echo "</ul>";

?>
<h2>3)a) ascending order sort by value </h2>

<?php

$courses3=array(1=> "PHP", 2=> "HTML",3=> "JavaScript", 4=>"CMS",5=> "Project");
asort($courses3);

foreach ($courses3 as $c)
{
echo "$c, ";
}

?>

<h2>3)b)ascending order sort by Key  </h2>

<?php
$courses3=array(1=> "PHP", 2=> "HTML",3=> "JavaScript", 4=>"CMS",5=> "Project");
 ksort($courses3);
 foreach ($courses3 as $c)
 {
 echo "$c, ";
 }
?>
<h2>3)c) descending order sort by Value </h2>

<?php
$courses3=array(1=> "PHP", 2=> "HTML",3=> "JavaScript", 4=>"CMS",5=> "Project");
arsort($courses3);
foreach ($courses3 as $c)
{
echo "$c, ";
}

?>
<h2>3)d) descending order sort by Key </h2>


<?php
$courses3=array(1=> "PHP", 2=> "HTML",3=> "JavaScript", 4=>"CMS",5=> "Project");
krsort($courses3);
foreach ($courses3 as $c)
{
echo "$c, ";
}
?>
<h2>4) Change the following array's all values to upper case</h2>
<?php
$courses4=array("php"=>1,"html"=>2,"javascript"=>3,"cms"=>4,"project"=>5);
print_r(array_change_key_case($courses4,CASE_UPPER));
?>
<h2>5)List all your favorite colors and their hexadecimal equivalents</h2>

<?php

$colors = array(
    "red" => "#ff0000",
    "green" => "#00ff00",
    "blue" => "#0000ff",
    "yellow" => "#ffff00",
    "purple" => "#800080",
    "pink" => "#ffc0cb",
    "orange" => "#ffa500",
    "black" => "#000000",
    "white" => "#ffffff",
    "gray" => "#808080"
  );
  
  $keys = array_keys($colors);
  
   {
      echo $keys[$i] . ": " . $colors[$keys[$i]] . "<br>";
  }



?>


<?php include "footer.php" ?>