$(function(){

	// definindo as variaveis

	var atual = -1;
	var maximo = $('.box-especialidade').length -1;
	var timer;
	var animacaoDelay = 3;

	// chamar a função:
	executarAnimacao();
	// funçao para animação:
	function executarAnimacao(){
		// esconder todos ps box-especialidadeS
		$('.box-especialidade').hide();
		timer = setInterval(logicaAnimacao,animacaoDelay*1000);

		function logicaAnimacao(){
			atual++;
			// se meu atual for maior do aque o maximo
			if(atual > maximo){
			// limpe o intervalo e chama a variavel timer
				clearInterval(timer);
				// retorna para parar a execução
				return false;
			}
			// buscar o indice que eu quero
			$('.box-especialidade').eq(atual).fadeIn();
		}
	}

})