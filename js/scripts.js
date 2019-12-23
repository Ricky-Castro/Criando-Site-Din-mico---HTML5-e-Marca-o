$(function(){
	$('nav.mobile').click(function(){
		var listMenu = $('nav.mobile ul');
		/*
		if(listMenu.is(':hidden')==true){
			listMenu.fadeIn();
		}
		else{
			listMenu.fadeOut();
		}
		*/
		listMenu.slideToggle();
	})
})