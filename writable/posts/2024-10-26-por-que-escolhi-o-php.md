---
title: Por que escolhi o PHP?
date: 2024-10-26
author: Mikael Oliveira
image: /post-images/uEDCseM0T4BvArQWFFXWdWz5MGN5y7JMkBZOlfxS.png
excerpt: No post de hoje vou explicar o porque escolhi o php como minha “main language”, e quais são as coisas que mais me agrada nessa linguagem!
---

**Primeiro Contato**
&nbsp;
 Eu tive meu primeiro contanto com o PHP em meados de 2020 em uma máteria voltada para o desenvolvimento web na ETEC.
&nbsp;
 Nós desenvolviamos pequenos projetos usando provavelmente o PHP na versão 7
 Abaixo print de um projeto desenvolvido na época:

![](/post-images/JxcvJgkUqLw2XE6B5YP9EWHWN8cReaokLd18y4ef.png)
 Naquela época eu não conhecia sobre práticas de segurança para o desenvolvimento web ou tinha se quer noções de padrões de projetos então era fácil encontrar alguma falha como deixar os dados de conexão ao banco de dados exposto no código e vunerabilidades como sql injection (na print está arrumado), mas antes estava concatenando a query com as variaveis que vinham do método post sem nenhuma validação kskss

![](/post-images/0NKlmDBoyypAAJFQHEKb57MiIbWp6nRu27L8VOko.png) É bacana ter esses projetos guardados para ver o quanto eu consegui evoluir! : )

**Primeiro contato com o Laravel**

Após ter iniciado meu estágio na Evoi em setembro de 2022 como Desenvolvedor web, fiquei responsável por implementar uma feature no ArturParada um site de um cliente, e logo me assustei ao abrir a pasta do projeto e me deparar com aquela estrutura de pastas que o Laravel 8 tinha!

![](/post-images/2WXiDJ5cg1I8TScE3LqNoBabPrct6k86OTMvT0SA.png)

 Gastei um bom tempo tentando rodar o projeto, porque não tinha a minima ideia de como rodar um projeto Laravel e muito menos de como configurar a .env dele que estava configurada para rodar em produção : )
 No fim consegui rodar o projeto e já me senti muito orgulhoso por isso!

**Como foi minha escolha pelo PHP**
&nbsp;
 Eu tinha duas escolhas de linguagem para trabalhar na Evoi o Python e PHP que eram as linguagens suportadas pela hospedagem e eu desenvolvi todo um sistema em python com django, mas na hora de hospedar (emoji de palhaço).
 Não consegui hospedar o projeto usando o Python porque precisava de algumas configurações a mais na hospedagem que não consegui configurar.
 Ai acabei refazendo o projeto usando o PHP no back-end e o React JS no front-end e consegui hospedar facilmente!
 então eu não diria que eu escolhi o PHP o PHP acabou me escolhendo kskss
 Como era mais fácil de hospedar acabei usando ele, se o Java tivesse suporte na hospedagem provavelmente teria usado o javinha!

**Coisas me fazem gostar do PHP**
&nbsp;
 Eu no começo não gostava do PHP por vários motivos bem bobos, um deles era o “$” para declarar uma variavel, hoje na verdade acho isso muito bom porque você consegue distinguir com facilidade o que é uma variavel e o que não é!

![](/post-images/4qwYw3dkjj6fyUMNNEm678eztY0WEMA5eTq76qYg.png)

&nbsp;Uma das coisas que gosto muito é o framework Laravel que tem um ecosistema gigante com diversas ferramentas pra te ajudar a desenvolver projetos robustos!

![](/post-images/jCu1NgP63Z3ndFAAmJgD05HPQ0qt94Osn6ZhLj2y.png)
 
 ![](/post-images/eNYLvgQn7VbhKQY3svTowMZvAA9bdJdqjN0qPcTw.png) A documentação tanto do Laravel quanto do PHP são documentações muito boas, com diversos exemplos (gosto muito de tirar um tempo pra ficar lendo elas, sempre acabo apredendo algo novo lá).![](/post-images/07XfXKPNktkJFzfZ0cCsvMn6lER26KNz7ZC9RxEn.png)
![](/post-images/uEDCseM0T4BvArQWFFXWdWz5MGN5y7JMkBZOlfxS.png)

**Coisas que me assombram no PHP**

As coisas que mais me assombram no PHP é dar manuntenção ou implementar alguma feature em um projeto legado!
&nbsp;Existem diversos projetos legados hoje em produção que seriam inviaveis serem refeitos pela sua complexidade ou porque sairia muito caro refazer todo o sistema!
&nbsp;E muitos desses sistemas não foram bem escritos, já peguei sistemas em PHP5 e Codeiginiter3 que a maioria das variaveis foram declaradas como uma letra do alfabeto, por favor se você é desenvolvedor e declara suas variaveis como $a, $b, $c não faça isso, alguém vai dar manuntenção naquilo quando você não estiver lá.&nbsp;
&nbsp;
&nbsp;Eu já peguei sistemas legados que foram bem escritos e foi bem tranquilo entender o código e dar manuntenção, mas existem muitos legados com controllers com 5 - 7k de linhas que é bem dificil entender o funcionamento!
&nbsp;
&nbsp;Eu já tive que mexer em diversos projetos com PHP legado e normalmente algum desses projetos você nem consegue rodar na sua máquina e acaba tendo que desenvolver essa feature ou arrumar esses bugs em produção mesmo e isso não é nada bom porque as pessoas estão usando o sistema enquanto você mexe nele!
&nbsp;Então em cada arquivo que você for mexer em produção é sempre bom fazer um download dele antes (seu pc pode desligar enquanto você mexe no arquivo e você pode perder seu control + z).
&nbsp;Então sempre tenham backup de arquivos que estiverem mexendo.
&nbsp;
&nbsp;Bom o post de hoje foi esse, deu para ver como escolhi o php, meu primeiro contato com a linguagem e as coisas que mais gosto nela : )
&nbsp;Obrigado por ler até aqui.
&nbsp;Escrito em 13/july/2024