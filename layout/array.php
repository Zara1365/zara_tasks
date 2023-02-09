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
echo "$c, ";
}
sort($courses1);
echo "<ul>";
foreach ($courses1 as $c)
{
echo "<li>$c</li>";
}
echo "</ul>";

?>




















<?php include "footer.php" ?>