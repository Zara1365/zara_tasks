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
$arrColors = array(
  'purpel'=>'ff0000',
  'black'=>'00ff00',
  'gray'=>'0000ff',
  'red'=>'ffff00'
);
 
foreach($arrColors as $key=>$val) {
  echo ' '.$key.' - '.$val.'<br>';
}
?>
<h2>6) PHP script to calculate and display average temperature</h2>
<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>





<?php include "footer.php" ?>