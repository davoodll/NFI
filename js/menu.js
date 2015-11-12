// Script som viser skjuler meny
$(document).ready(function(){
if($("#top_m").css("display")=="block"){
	var status=0
	$("#top_m ul ul").hide();

		$("#menu, #top_m ul ul").click(function(){
		status+=1
			$("#top_m ul ul, #menu").toggle(0,function(){
			});
		});
		$("#home, #tweet, #face").click(function(){
		status%=2
			if(status!=0){
				status=0
				$("#top_m ul ul, #menu").toggle(0,function(){
				});
			}
		});
	}
});
