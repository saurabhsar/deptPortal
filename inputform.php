<?php
    $fac = array("fac1", "fac2", "fac3", "fac4", "fac5", "fac6", "fac7");
    $day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
    $period = array ("8:15am to 9:15am","9:15am to 10:15am", "10:15am to 11:15am", "11:15am to 12:15pm","1:30pm to 2:30pm","2:30pm to 3:30pm","3:30pm to 4:30pm","4:30pm to 5:30pm");
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    </head>
    <body>
        <?php
        function inputSchedule( $fac, $flag = 0 ){
            if ($flag == 0){
                for ( $i = 0; $i < count($fac); $i++ ){
                    echo "<option value = \"{$fac[$i]}\" >{$fac[$i]}</option>";
                }
            }
            else
            {
                for ( $i = 0,$j=1; $i < count($fac); $i++, $j++ ){
                    echo "<option value = \"$j\">{$fac[$i]}</option>";
                }
            }
        }?>        
        <form method="POST" action="http://127.0.0.1" accept-charset="utf-8">
            
            <select name="day">
                <?php printOption($day); ?>
            </select><br>
            <select name="period">
                <?php printOption($period, 1); ?>
            </select><br/>

            <select name="faculty">
                <?php printOption($fac); ?>
            </select><br/>

            <input type="text" name="item_name_1" placeholder="Comments"/><br/>
            <input type="submit" name="Submit" value="Submit" /><br/>
        </form>
    </body>
</html>
