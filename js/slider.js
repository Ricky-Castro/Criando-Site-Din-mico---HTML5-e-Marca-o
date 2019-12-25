$(function(){

	var curSlide = 0;
	var maxSlide = $('.banner-single').length - 1;
	var delay = 3;

	initSlider();
	changeSlide();

	// função eq mostra qual slide vou buscar primeiro. No caso o 0.

	function initSlider(){
		$('.banner-single').hide();
		$('.banner-single').eq(0).show();
	}

	// aqui a funçao fará com que o slide mude de imagem a cada 3 segundos. Se o indicador do slide for igual ao numero maximo, no caso 4, ele retorna a 0 para começar novamete.

	function changeSlide(){
		setInterval(function(){
			$('.banner-single').eq(curSlide).fadeOut(1000);
			curSlide++;
			if(curSlide > maxSlide)
				curSlide = 0;
			$('.banner-single').eq(curSlide).fadeIn(1000);
		},delay * 1000);
	}
})