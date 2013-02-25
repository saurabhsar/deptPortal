<!DOCTYPE html>
<html>
    <head>
        <title>Computer Science and Engineering</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body class="bgbody">
	
    <?php include 'header.php'; ?>

        <div class="mainbody">
            
            Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test Main Body Width Test 
            
            
        <script type="text/javascript">
            var semType = new Array("Choose","Odd","Even");
            Choose = new Array ("Choose the first one");
            Odd = new Array ( "Third", "Fifth", "Seventh");
            Even = new Array ( "Fourth", "Sixth", "Eighth");
            function changeval(){
                var val1 = document.semForm.oddEven.value;
                var optionArray = eval(val1);
                for(var df=0; df<optionArray.length; df++){
                    var ss = document.semForm.semSelect;
                    ss.options.length = 0;
                    for(var i=0; i<optionArray.length; i++){
                        var val = optionArray[i];
                        ss.options[i] = new Option(val,val);
                    }
                }
            }

        </script>

        <form name=semForm action="getFac.php" id ="getSem" method="POST">
            <select name=oddEven onchange=changeval(); >
                <script type="text/javascript">
                    for(var i=0; i<semType.length; i++){
                        document.write("<option value=\""+semType[i]+"\">"+semType[i]+"</option>");
                    }
                </script>
            </select>
            <select name=semSelect>
            </select>
            <input type="submit" value="Go!" />
        </form>
        </div>
        
        <?php include 'footer.php'; ?>
        
    </body>
</html>
