$(document).ready(function() { 
	
	$("#emailonly").keypress(function(event) {
		code = (event.keyCode ? event.keyCode : event.which);
		if (code == 13 || code == 10)
		{
			$("#emailonly-btn").click();
		}
		
	});
	
	$("#emailonly-btn").click(function(event) {
	
		if($("#emailonly").val() != "" && 
			$("#emailonly").val().indexOf("@") != -1 &&
			$("#emailonly").val().indexOf(".") != -1)
			
		{
			$("#emailonly-msg").slideUp();
			$.post("email_add.php", {email:$("#emailonly").val()}, function(data) {
			
				$("#emailonly").val("");
				$("#emailonly-msg").html("Thanks!  We'll keep you updated!");
				$("#emailonly-msg").slideDown(400, function() {
				
					setTimeout('$("div#emailcapture").slideUp();', 3000);
				
				});
				
			
			}, "json");
		}
		else
		{
			$("#emailonly-msg").slideDown();
		}
	
	});
	
});