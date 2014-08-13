$(function(){
		$('#Pro').click(function(){
			$('html,body').animate({scrollTop:$('#Profile').offset().top}, 800);
		});            

		$('#Exp').click(function(){
			$('html,body').animate({scrollTop:$('#Experience').offset().top}, 800);
		});                                

		$('#Edu').click(function(){
			$('html,body').animate({scrollTop:$('#Education').offset().top}, 800);
		}); 

        $('#Int').click(function(){
			$('html,body').animate({scrollTop:$('#Interest').offset().top}, 800);
		});

        $('#Lin').click(function(){
			$('html,body').animate({scrollTop:$('#Links').offset().top}, 800);
		});   	

});
