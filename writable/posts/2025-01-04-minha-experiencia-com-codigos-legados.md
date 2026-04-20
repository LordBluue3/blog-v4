---
title: Minha experiência com códigos legados
date: 2025-01-04
author: Mikael Oliveira
image: /post-images/UX16KmjGYwv8Aed60egZOCVOsk0Vkzt4ltcRk3LE.png
excerpt: No post de hoje vou contar um pouco sobre algumas situações que passei mexendo em código legado e o que aprendi com isso.
---

Fala pessoal! Esse seria o último post do ano de 2024, mas acabou sendo o primeiro de 2025 (quem nunca, né?). Espero que vocês tenham aprendido bastante no ano passado e mantido um pouco da sanidade mental — é sempre útil pra começar bem o ano novo! Brincadeiras à parte, que 2025 seja incrível pra todos nós. Agora, deixa eu contar como os códigos legados desafiaram minha sanidade e, surpreendentemente, até me divertiram no meio do caos!

**Primeira experiência com legado**

Atualmente, trabalho em uma agência de marketing com vários clientes que desenvolveram projetos com a gente! São muitos e-commerces e sites que estão com a gente há anos.
Um certo dia, eu estava terminando uma tarefa e eu precisava ser alocado já em outra logo em seguida. Foi então que meu tech lead me perguntou: 'Você tem conhecimento em PHP puro, né?' E, antes que eu pudesse responder, já me passou uma nova tarefa em outro projeto (não lembro exatamente o que era).

Eu lembro que precisava acessar o projeto via SFTP porque o deploy era feito assim. Quando abri as pastas do projeto, tive a mesma sensação de quando abri um projeto em Laravel pela primeira vez na Evoi: 'Puts, é agora que serei demitido por não saber mexer nisso.' Mas, claro, não fui! E está tudo bem não saber algo, desde que você esteja disposto a aprender.

No fim, gastei um tempo tentando mexer naquilo, porque o desenvolvimento era direto em produção. O máximo que dava pra fazer era um backup do arquivo que eu estava mexendo no momento e nada mais! Acabei não conseguindo realizar a tarefa, e pra piorar, não tinha outro desenvolvedor na empresa que soubesse mexer em CodeIgniter — o último tinha saído, e o Laravel já tinha sido implementado por lá.
Eu pensei: 'Ok, em algum momento vou ter que mexer nisso de novo e vou precisar aprender.'

Como um bom desenvolvedor, fui procurar um curso no YouTube, achei um e comecei a assistir para aprender a mexer naquele framework que me assombrava! Consegui entender o básico, fiz um projeto para testar e já me sentia confiante para tentar novamente.

Voltei ao projeto, entrei no SFTP, abri as pastas e… BOMMM! Não entendi nada do sistema de pastas de novo. Fiquei sem entender o porquê disso, até que conversando com o pleno da empresa ele me contou: existem duas versões do CodeIgniter, a 3 e a 4. A gente usava a versão 3, porque os códigos eram de 2012-2014! Fui olhar a descrição do curso que fiz, e adivinha? Era sobre a versão 4! O framework muda completamente da versão 3 para a 4.

Então, lá fui eu novamente procurar um curso, dessa vez para aprender o CodeIgniter 3. Encontrei, fiz, e tentei mais uma vez. Dessa vez, consegui realizar a tarefa! Que, no fim das contas, nem era tão complexa assim.

**Stack dos legados**

Hoje usamos uma stack muito boa, chamada TALL Stack.&nbsp;

![](/post-images/JSeG9qZlPy5sqR6LxSALWKE3pHqfFMGjsU9LjDfa.png)No passado, eles usavam CodeIgniter 3, jQuery e Bootstrap para desenvolver os projetos!

![](/post-images/UX16KmjGYwv8Aed60egZOCVOsk0Vkzt4ltcRk3LE.png)![](/post-images/DioFmIYnqb9vz9xr5NDpWDNJ9Wlkep0WghNzqnXQ.png)Essa stack dá muito arrepio em alguns devs, e por isso, só eu faço manutenção nos projetos com essa stack maravilhosa! Enquanto alguns olham pra isso com desgosto, eu olho com empolgação, por poder mexer em um projeto que é mais velho que minha carreira estudando e trabalhando com TI!

**Perrengues**

Alguns dos problemas que enfrentamos são ter que fazer as edições dos projetos em produção via SFTP e mexer no banco direto no phpMyAdmin!

Mas por que isso? Vou contar uma coisa que aprendi trabalhando com software: nem todo software com que você trabalha vai ser aquela maravilha, lidando com clean code, testes, code review, tudo organizado e mil maravilhas.

No meu caso, é porque o cliente paga por hora de manutenção. Se eu pegar o projeto e tentar rodar em desenvolvimento, já gasto as horas de manutenção, e a partir daí a empresa começa a tomar prejuízo! Por isso, a manutenção tem que ser algo bem rápido! Algo tipo speedrun! E muitos devs no passado levaram isso bem a sério, por isso é bem comum eu abrir os códigos e ver muitas variáveis com letras do alfabeto, e acabo perdendo muito tempo tentando entender o que significa a variável 'f' e a variável 'q'.

Então, não fique triste por estar trabalhando em um projeto sem testes automatizados, fique feliz por não estar lidando com um código onde os antigos devs nomeavam as variáveis com letras do alfabeto!

Se o software tem uns 12 anos, está pagando as contas, tem gente usando e, se parar de funcionar, ferrou! Vamos nessa, rastejar na lama e arrumar esse código macarrônico!

![](/post-images/J8trG7SqxLs29oa5fCLtc3PYkcGYq3U2qkovvRNw.png)

**Estava funcionando e parou**

Essa é uma frase que eu ouço constantemente quando vou prestar manutenção em um legado. E uma coisa que aprendi é: 'código não quebra se ninguém mexer nele.' Se ele estava funcionando há 10 anos, por que parou agora se ninguém mexeu?

Aí, você vai ter que se transformar em Sherlock Holmes e procurar a causa do problema, lendo o código e tentando entender o que parou de funcionar!

Casos que acontecem com frequência: o cliente reclama que não está chegando e-mail, e 99% das vezes é o SMTP que deu algum problema de conexão, e você tem que arrumar. Digo 99% das vezes porque uma vez aconteceu comigo. Fui testar o SMTP, estava tudo certinho, até que fui olhar o código e vi que o problema era uma lib hackeada e completamente ofuscada, por isso parou de funcionar!

Outra coisa que pode dar muito problema é o banco de dados! Vou dar um exemplo de algo que aconteceu comigo. Existia uma tabela com ID do tipo int, e essa tabela tinha muitas e muitas informações salvas! O número máximo no MySQL de um tipo int é 2147483647, e essa tabela tinha chegado ao seu limite. Quando isso acontece, ele fica repetindo o número máximo! Todos os IDs ficavam se repetindo: 2147483647, 2147483647, 2147483647.

Isso gerava um bug que não apontava erro nenhum, então eu passei muito tempo tentando entender o código até perceber que o problema estava no banco. O problema era essa coluna! Até lá, tentei olhar se o problema era em uma API externa, tentei mil outras coisas até descobrir isso!

E nada dá uma sensação mais prazerosa do que resolver um bug desses que parou todo o sistema. Você teve que ler e entender muita coisa para solucionar um problema assim! Teve que literalmente virar um detetive, achar e resolver o problema.

**Aprendizado**

Você deve imaginar que não vai aprender nada mexendo em legado, que é um sistema muito antigo e que você não vai usar aquelas tecnologias. Mas, na verdade, você consegue tirar proveito de muita coisa!

Vai aprender sobre tecnologias que eram usadas no passado e que ainda são mantidas em algumas empresas até hoje! Vai aprender sobre padrões de projeto diferentes dos que você usa atualmente, e levar esse conhecimento para novos projetos.

Por exemplo, no CodeIgniter, dá para criar funções globais usando um Helper. Fui pesquisar como fazer isso no Laravel e descobri que dá para fazer com Traits, e hoje usamos isso em vários projetos!

Você pode, por exemplo, usar uma trait para imagens. Aí você pode criar várias funções com diferentes objetivos, como salvar, comprimir, redimensionar, etc. E isso foi um conhecimento que peguei de um projeto legado!

E muitas vezes, a experiência que você teve em um projeto novo vai te ajudar a resolver um problema em um projeto legado. Recentemente, arrumei um problema que já acontecia há 12 anos em um e-commerce. E, por ter trabalhado com um meio de pagamento em um projeto novo, acabei enfrentando um problema muito parecido com o do legado!

Há alguns meses, tentei arrumar esse problema e não consegui. Mas, por ter passado por essa situação no projeto novo, consegui identificar a causa do bug no projeto legado e resolver o problema que estava atormentando a empresa há 12 anos!

**Cuidados**

Mas tem coisas que você tem que tomar cuidado. Se você está ali trabalhando em sistemas legados, não faz nenhum projeto com uma tecnologia nova, seu mundo é aquilo ali e você pode acabar ficando desatualizado!

Por exemplo, se você passar uns 5 anos mexendo com PHP 5 puro, jQuery, HTML e CSS... Se um dia você tiver que procurar um novo emprego e ver que hoje o mercado usa PHP 8, Laravel, Tailwind, Vue, Livewire e vê que as empresas pedem muitas coisas novas, você vai ter que estudar bastante e, provavelmente, vai ficar um tempo sem emprego!

Então, eu estipulei essa regra para mim, pelos próximos 8 anos:

- Não está aprendendo nada + Não está recebendo bem = Voa, vai estudar mais e aplicar para novas oportunidades.
- Está aprendendo bastante + Não está recebendo bem = Fica, mas só voa se aparecer algo onde você possa aprender mais e receber melhor.
- Não está aprendendo nada + Está recebendo bem = Fica, mas fica procurando uma oportunidade que te faça aprender algo.

Bom o post de hoje foi esse! 

Tenham um feliz ano novo pessoal e muito aprendizado pela frente!

Obrigado por lerem até aqui.

![](/post-images/EU70a4D7OZdyREMVVJofx40nKH4FVs4Kz4XjeyNU.png)