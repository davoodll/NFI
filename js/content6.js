// Script som skjuler viser content6. I kontrast fra content1-5 så skal content6 være synlig når man laster siden
$(document).ready(function(){
if($("#top_m").css("display")=="block"){
	var counter = 1;
	$("#on6").hide();

		$("#on6, #off6a, #off6b").click(function(){
			$("#on6, #off6a, #content6").toggle(0,function(){
				counter++;
			});
		});
		$("#home, #tweet, #menu").click(function(){
			counter %=2;
			if ( counter != 0 ){
				$("#on6, #off6a, #content6").toggle(0,function(){
					counter++;
				});
			}
		});
	}
});
