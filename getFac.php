<?php
	require 'phpFunctions.php';

    $sem=$_POST["semSelect"];
	setcookie("values[]", $sem);
	
	$sub = getSubjects ( $sem );
?>
<!DOCTYPE html>
<html>
	
    <head>
        <title>Computer Science and Engineering</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body class="bgbody">
		<?php require 'header.php'; ?>
		<div class="mainbody">

			<form name=bindingTable method="POST" action="buildSchedule.php" accept-charset="utf-8">
				<?php subjectBinding($sub, $faculty); ?>
				<input type="submit" value="Assign"/>
			</form>
        </div>
        
		<?php include 'footer.php'; ?>
    </body>
</html>
