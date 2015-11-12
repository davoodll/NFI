// Skript som viser skjuler content. Har brukt løkker for og ha mindre som må forandres hvis man skal utvide
$(document).ready(function(){
if($("#top_m").css("display")=="block"){
	var counter = [ 0, 0, 0, 0, 0 ];
	var off = [ "#off1a", "#off2a", "#off3a", "#off4a", "#off5a" ];
	var on = [ "#on1", "#on2", "#on3", "#on4", "#on5" ];
	var content = [ "#content1", "#content2", "#content3", "#content4", "#content5" ];

	for ( var i = 0; i < counter.length; i++ ){
		$(off[i]).hide();
		$(content[i]).hide();
	}
		$("#on1, #off1a, #off1b").click(function(){
		var p = 0;
		$(on[p]).toggle(0,function(){
				$(off[p]).toggle(0,function(){
					$(content[p]).toggle(0,function(){
						counter[p]++;
					});
				});
			});
		});
		$("#on2, #off2a, #off2b").click(function(){
		var p = 1;
		$(on[p]).toggle(0,function(){
				$(off[p]).toggle(0,function(){
					$(content[p]).toggle(0,function(){
						counter[p]++;
					});
				});
			});
		});
		$("#on3, #off3a, #off3b").click(function(){
		var p = 2;
		$(on[p]).toggle(0,function(){
				$(off[p]).toggle(0,function(){
					$(content[p]).toggle(0,function(){
						counter[p]++;
					});
				});
			});
		});
		$("#on4, #off4a, #off4b").click(function(){
		var p = 3;
		$(on[p]).toggle(0,function(){
				$(off[p]).toggle(0,function(){
					$(content[p]).toggle(0,function(){
						counter[p]++;
					});
				});
			});
		});
		$("#on5, #off5a, #off5b").click(function(){
		var p = 4;
		$(on[p]).toggle(0,function(){
				$(off[p]).toggle(0,function(){
					$(content[p]).toggle(0,function(){
						counter[p]++;
					});
				});
			});
		});
		$("#home, #tweet, #menu").click(function(){
		for ( var i = 0; i < content.length; i++ ){
				counter[i] %=2;
				if ( counter[i] != 0 ){
					$(on[i]).toggle(0,function(){
						$(off[i]).toggle(0,function(){
							$(content[i]).toggle(0,function(){
								counter[i] = 0;
							});
						});
					});
				}
			}
		});
	}
});
