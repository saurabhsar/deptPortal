//alert("Included JS file 1");
$(document).ready(function() {

/*
 * ------------------------------ HEADER BEGIN ----------------------------------------------------
 */
//alert("Included JS file");
  function setupLoginDialog() {
    $('#login-button').click( function() {
        var dialogdiv = $('#login-dialog');
        if (dialogdiv.css('display') === 'none') {
            dialogdiv.css('display', 'block');
            $('#loginwrapper').css('display', 'block');
            setTimeout(function() {
                    dialogdiv.css('opacity', 1);
            }, 20);
        } else {
            dialogdiv.css('opacity', 0);
            setTimeout(function() {
                    dialogdiv.css('display', 'none');
                    $('#loginwrapper').css('display', 'none');
            }, 300);
        }
    });
    $('#loginwrapper').click( function() {
        var dialogdiv = $('#login-dialog');
        if (dialogdiv.css('display') === 'block') {
            dialogdiv.css('opacity', 0);
            setTimeout(function() {
                dialogdiv.css('display', 'none');
                $('#loginwrapper').css('display', 'none');
            }, 300);
        }
    });
  }
  
  setupLoginDialog();
    
    $('getSem').click ( function greeting(){
        alert("Welcome " + document.forms["semForm"]["semSelect"].value + "!!!!");
    });
    
    /*var semType = new Array("Choose","Odd","Even");
    Choose = new Array ( "");
    Odd = new Array ( "Third", "Fifth", "Seventh");
    Even = new Array ( "Fourth", "Sixth", "Eighth");
    function changeval()
    {
        var val1 = document.semForm.oddEven.value;
        var optionArray = eval(val1);
        for(var df=0; df<optionArray.length; df++)
        {
            var ss = document.semForm.sel2;
            ss.options.length = 0;
            for(var i=0; i<optionArray.length; i++)
            {
                var val = optionArray[i];
                ss.options[i] = new Option(val,val);
            }
        }
    }*/
});