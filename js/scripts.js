$(function(){
	$('nav.mobile').click(function(){
		var listMenu = $('nav.mobile ul');
		
		if(listMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-bars');
			icone.addClass('fa-times');
			listMenu.slideToggle();
		}
		else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa-times');
			icone.addClass('fa-bars');
			listMenu.slideToggle();
		}
		
	});

	if($('target').length > 0){
		// O elemento existe. Portanto precisamos dar o scroll em algum elemento.
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({scrollTop:divScroll},2000);
	}

	carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');

			$('.container-principal').load('/Site_Dinamico/pages/'+pagina+'.php');
			initialize();
			addMarker(-27.609959,-48.576585,'',"Minha Casa",undefined,false);
			return false;
		});
	}
})