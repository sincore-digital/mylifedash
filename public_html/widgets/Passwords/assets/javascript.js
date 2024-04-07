/**
 * gerar a senha
 */
$('.js-passwords').delegate('.js-passwords-refresh', 'click', function(e) {
	e.preventDefault();

	var element = $(this).closest('.js-passwords'),
		size = element.find('input[type="range"]').val(),
		password = gerarSenhaSegura(size, element.find('.passwords-checkbox-symbols').is(':checked'));

	element.find('.js-password-text').html(password);
});

$('.js-passwords-refresh').click();

/**
 * copiar a senha
 */
$('.js-passwords').delegate('.js-passwords-copy', 'click', function(e) {
	e.preventDefault();

	var element = $(this).closest('.js-passwords').find('.js-password-text'),
		textToCopy = element.html();

	// sucesso
	navigator.clipboard.writeText(textToCopy).then(() => {
		var html = `<span class="ms-2 badge text-bg-success">copiado!</span>`;
		element.append(html);
		setTimeout(function() {
			element.find('.badge').fadeOut(function() {
				$(this).remove();
			});
		}, 3000);

	}, 

	// falha
	() => {
		var html = `<span class="ms-2 badge text-bg-error">erro!</span>`;
		element.append(html);
		setTimeout(function() {
			element.find('.badge').fadeOut(function() {
				$(this).remove();
			});
		}, 3000);
	});
});

/**
 * gera a senha
 */
function gerarSenhaSegura(tamanho, useSimbolos) 
{
	var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ";
	if(useSimbolos) {
		chars += '!@#';
	}

	var senha = "";
	for (var i = 0; i < tamanho; i++) {
		var randomNumber = Math.floor(Math.random() * chars.length);
		senha += chars.substring(randomNumber, randomNumber + 1);
	}

	return senha;
}