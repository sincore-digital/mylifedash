# core
- [x] criar um core com rotas e smarty. talvez usando slim?
- [ ] criar uma rota dinamica
- [ ] criar abas
- [ ] criar barra de menu
- [x] prover um factory, onde os componente possam ser registrados e recuperados por outras partes ou por widgets
- [ ] o core deve prover uma forma de um widget recuperar funções publicas (api?) de outro widget
- [ ] o core deve fazer a conexão com o banco e prover essa conexão de forma simples e transparente para os widgets
- [x] o core deve ter um tpl principal, que fará inclusão dos tpls dos widgets
- [x] é possivel ler o composer de outros diretórios? ou usar o proprio composer para fazer download de novos widgets? pensar numa forma de facilitar a instalação dos widgets e suas dependencias (usar um repositório de widgets? onde colcoamos o repositório final do widget de quem criou? )
- [x] possibilitar que o widget crie novas paginas, mas use o tpl padrão do core
- [ ] repositório de widgets


# componentes do core
- [ ] acesso ao banco de dados
- [ ] acesso à registro e recuperação de widgets
- [ ] metodos de tradução
- [ ] providenciar uma forma descente de armazenar dados em cache (para nao ficar buscando de APIs toda hora)
- [ ] metodos de conversão de numeros e datas (internacionalização)
- [ ] metodos de consulta de api ou requisições (curl)
- [ ] metodos para fazer cralwer, onde vai baixar o html e executar um seletor para recuperar as informações
- [ ] cron, e os widgets devem poder registrar uma função nesse cron
- [ ] atualizações, onde rodará as funções update dos widgets e atualizará a interface

# interface
- [ ] prover metodos de criação de graficos para padronizar o visual
- [ ] prover helpers para exibição de dados como data e numeros (internacionalização)
- [ ] prover helpers para tradução

# widgets

- [ ] o widget deve registrar rotas, que o core deverá acrescentar ao sistema
- [ ] o widget deverá registrar um metodo de atualização, que será executado de tempo em tempo, onde um ajax fará essa requisição
- [ ] o widget deve poder acessar componentes do core e dados de outros widgets
- [x] o widget deve prover o retorno de um tpl, que será incluso no dash do core
- [x] o widger poderá registrar arquivos js e css para serem inclusos
