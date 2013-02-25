<?php
	require 'phpFunctions.php';
	$sem = $_COOKIE["values"][0];
	$fac = $_POST;
 
    $sub = getSubjects ( $sem );
    //print_r($fac);
    for ( $i = 0; $i < count ($sub) ; $i++ ){
		for ( $j = 0; $j < count ($fac[$sub[$i]]); $j++ ){
			$var[$i][$j] = $fac[$sub[$i]][$j];
		}
	}
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
			
        <form method="POST" action="commitSchedule.php" method="POST" accept-charset="utf-8">
			<table>
				<tr>
					<td>
						Day
					</td>
					<td>
						<select name="day">
							<?php printOption($day); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Period
					</td>
					<td>
						<select name="period">
							<?php printOption($period, 1); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Subject/Faculty
					</td>
					<td>
						<select name="Subject">
							<?php printOption($sub); ?>
						</select>
					<!/td> 
					<!--td-->
						<select name="Faculty">
							<?php printOption($fac);?>
						</select>
					</td>
				</tr>				
				<tr>
					<td>
						Classroom
					</td>
					<td>
						<select name="Classroom">
							<?php printOption($rooms); ?>
						</select>
					</td> 
				</tr>
			</table>
		</form>
		</div>
        
        <?php include 'footer.php'; ?>
        
    </body>
</html>
