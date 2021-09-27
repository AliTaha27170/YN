

$( "#lang" ).click(function() {


    if ($(this).val() == "EN") {
       $(this).val("AR");
    }
    else {
       $(this).val("EN");
    }
 
  $( ".ar" ).fadeToggle( "slow", "linear" );
  $( ".en" ).fadeToggle( "slow", "linear" );
});

