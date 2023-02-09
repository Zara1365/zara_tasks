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










<?php include "footer.php" ?>