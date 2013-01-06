<?php
/*
	This is a sample php document
	It contains comments like this, some valid php, and some other junk and nonesense.
	Chang it however you like!
*/
$simpleString = "hello world";
$simpleArray = array("heh", "low", "whirled");

?>

<html>
<title>Sam Pull Page</title>

<body>
	<h1>this here is one of them sample test pages...thingies.</h1>

	<p><b><? echo "Hell-oh-world!"; ?></b></p>
	
	<br/>

	<p><b>
<?
while (list($val) = each($simpleArray) {
    echo "$val ";
}
?>
	</b></p>
	<ul>
		<li>Item 1</li>
		<li>Item 2</li>
		<li>Item 3</li>
		<li>Item 4</li>
		<li>Item 5</li>
		<li>Item 6</li>
		<li>Item 7</li>
		<li>Item 8</li>
	</ul>

	<div id="fred" class="box8 red">This is my div</div>
</body>
</html>