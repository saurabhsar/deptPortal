<?php
    
    $day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
    $period = array ("8:15am to 9:15am","9:15am to 10:15am", "10:15am to 11:15am", "11:15am to 12:15pm","1:30pm to 2:30pm","2:30pm to 3:30pm","3:30pm to 4:30pm","4:30pm to 5:30pm");
    $rooms = array ("LGC 1", "LGC 2", "LGC 3", "DM Sen Audi 1", "DM Sen Audi 2");
    $faculty=array ("fac1","fac2","fac3","fac4","fac5","fac6","fac7","fac8");

    function getSubjects( $sem )
    {
        $sub = "";
        if ($sem == "Third"){
            $sub = array ("CSE301","CSE302","CSE303","CSE304","CSE305","CSE306","CSE307");
        }
        else if ($sem == "Fourth")    {
            $sub = array ("CSE401","CSE402","CSE403","CSE404","CSE405","CSE406");
        }
        else if ($sem == "Fifth")    {
            $sub = array ("CSE501","CSE502","CSE503","CSE504","CSE505","CSE506","CSE507");
        }
        else if ($sem == "Sixth")    {
            $sub = array ("CSE601","CSE602","CSE603","CSE604","CSE605");

        }
        else if ($sem == "Seventh")    {
            $sub = array ("CSE701","CSE702","CSE703","CSE704","CSE705");

        }
        else if ($sem == "Eighth")    {
            $sub = array ("CSE801","CSE802","CSE803","CSE804","CSE805");
        }
        return $sub;
    }
    
    function printOption( $var, $flag = "" ){
        echo $flag;
        if ( $flag == "" ){
            for ( $i = 0; $i < count($var); $i++ ){
                echo "<option value = {$var[$i]}>{$var[$i]}";
            }
        }
        else{
            for ( $i = 0; $i < count($var); $i++ ){
                echo "<option value ={$flag}>{$var[$i]}";
            }
        }
    }
    
    function addFaculty($faculty){
        echo"<select name=\"fac\">";
        printOption($faculty);
        echo"<\select>";
    }
    
    function subjectBinding( $subject, $faculty){
        echo "<table>\n";
        for ( $i = 0; $i < count($subject); $i++ ){
            echo "<tr><td>";
            echo "$subject[$i]\n";
            echo "</td><td>";
            echo "<select name=$subject[$i][]>";
            printOption($faculty);
            echo "</select>";
            echo "</td><td>";
            echo "<input type=\"button\" value=\"+\" onclick=addInput(); id=\"add\"/>";
            echo "</td></tr>";
        }
        echo "</table>";
    }
    
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
    }
?>
