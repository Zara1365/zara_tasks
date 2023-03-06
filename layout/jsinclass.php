<?php
$title ="javascript events and form validations";
include "header.php"
?>
<h2> A simple button to display date </h2>
<button onclick="this.innerHTML = Date()"> click to know date</button>
<H2> Make a button and a place holder as paragraph for the date</H2>
<button onclick="getElementById('p1').innerHTML = Date()"> click to know date</button>
<p id="p1"> </p>




<h2> Change the background color </h2>
<form>
<input type="color" id="background" onchange="changeColor()">
</form>

<h2> Change the font color </h2>
<form>
<input type="color" id="fcolor" onchange="changeFcolor()">
</form>
<h2> On Mouse Over & On Mouse Out</h2>
<span onmouseover=" this .style.color='blue';
       this.style.backgroundColor='yellow';
       this.style.fontSize ='2em';"
       onmouseout="
       this .style.color='red';
       this.style.backgroundColor='white';
       this.style.fontsize ='1.1em';" > some text </span>
      

