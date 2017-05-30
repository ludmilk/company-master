<!DOCTYPE html>
<html>

<head>
	<title>User view</title>
</head>

<body>

<p>Directory access is forbidden.</p>

<h1>

	<?php
	foreach ($results as $object){
  	 echo $object->username . "<br>";
 } ?>

</h1>

</body>

</html>