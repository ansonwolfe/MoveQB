// hide & display extra fields on contact modal

$(document).ready(function() { 

	$("#hideFields").hide();

	$( "#template-contactform-phone" ).focusin(function() {
	  $( "#hideFields" ).slideDown( "slow", function() {
	  });
	});



	function confirmation(){
		alert("you are welcome");
	}

	$('#myModal').on('hidden.bs.modal', function () {
  		confirmation();
})
 });
