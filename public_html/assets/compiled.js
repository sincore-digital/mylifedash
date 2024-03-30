
;
/**
 * regenerate password
 */
$('.js-passwords').delegate('.js-passwords-refresh', 'click', function(e) {
	e.preventDefault();

	var size = $(this).closest('.js-passwords').find('input[type="range"]').val(),
		password = gerarSenhaSegura(size);

	$(this).closest('.js-passwords').find('.js-password-text').html(password);
});

$('.js-passwords-refresh').click();

/**
 * copy password
 */
$('.js-passwords').delegate('.js-passwords-copy', 'click', function(e) {
	e.preventDefault();

	var textToCopy = $(this).closest('.js-passwords').find('.js-password-text').html();

	navigator.clipboard.writeText(textToCopy).then(() => {
		// Ação após copiar o texto com sucesso
		console.log("Texto copiado para a área de transferência!");
	}, () => {
		// Ação caso haja falha ao copiar o texto
		console.log("Falha ao copiar o texto para a área de transferência!");
	});
});

/**
 * 
 */
function gerarSenhaSegura(tamanho) {

	const letrasMinusculas = "abcdefghijklmnopqrstuvwxyz";
	const letrasMaiusculas = letrasMinusculas.toUpperCase();
	const numeros = "0123456789";
	const simbolos = "!@#";

	const conjuntos = [letrasMinusculas, letrasMaiusculas, numeros, simbolos];

	let senha = "";

	senha += letrasMinusculas.charAt(Math.floor(Math.random() * letrasMinusculas.length));

	for (let i = 1; i < tamanho; i++) {
		const conjuntoAleatorio = conjuntos[Math.floor(Math.random() * conjuntos.length)];
		senha += conjuntoAleatorio.charAt(Math.floor(Math.random() * conjuntoAleatorio.length));
	}

	let hasMinuscula = false;
	let hasMaiuscula = false;
	let hasNumero = false;
	let hasSimbolo = false;

	for (let i = 0; i < senha.length; i++) {
	if (letrasMinusculas.includes(senha[i])) {
		hasMinuscula = true;
	} else if (letrasMaiusculas.includes(senha[i])) {
		hasMaiuscula = true;
	} else if (numeros.includes(senha[i])) {
		hasNumero = true;
	} else if (simbolos.includes(senha[i])) {
		hasSimbolo = true;
	}
	}

	if (!hasMinuscula) {
		senha += letrasMinusculas.charAt(Math.floor(Math.random() * letrasMinusculas.length));
	}
	if (!hasMaiuscula) {
		senha += letrasMaiusculas.charAt(Math.floor(Math.random() * letrasMaiusculas.length));
	}
	if (!hasNumero) {
		senha += numeros.charAt(Math.floor(Math.random() * numeros.length));
	}
	if (!hasSimbolo) {
		senha += simbolos.charAt(Math.floor(Math.random() * simbolos.length));
	}

	// Retorna a senha
	return senha;
}