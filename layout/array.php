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





















<?php include "footer.php" ?>