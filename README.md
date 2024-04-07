# My Life Dashboard

Life Dashboard é um projeto que visa ser como um CMS, porem para ferramentas que ajudam o usuario no dia a dia. Um dashboard onde você poderá realmente chamar de assistente

# Definições

`04/04/2024` - O projeto será documentando em portugues. Alem de dar relevancia ao nosso pais, por aqui existem grandes programadores
`06/04/2024` - Definido o diretório dos widgets. Eles ficarão no publico. Isso porque esse projeto é para rodar com permissões do usuário, então não deveria ser algo publico

# Lembretes de documentação

## estrutura interna html

- bootstrap
- todas as configurações globais começam com a variavel `$oConfig`, `$oWidgets`
- `$oWidgets` tem o vetor de objetos dos widgets
- `$oConfig` tem o vetor de configuração
- tentar não usar id em elemento, ja que pode ser colocado 2x
- tentar usar um padrão de classes unicas, como `widget`-`elemento`-`evento`, por exemplo `passwords-copy-click`

## widgets

- estrutura