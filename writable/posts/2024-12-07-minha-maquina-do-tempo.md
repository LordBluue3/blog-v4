---
title: Minha máquina do tempo
date: 2024-12-07
author: Mikael Oliveira
image: /post-images/Z9SeRYZsbWHLW1nGvps9A4f47ZNjPxWwWnRbYcbP.png
excerpt: No post de hoje, vou contar os motivos pelos quais decidi criar meu servidor NAS para armazenar todos os meus arquivos e meus objetivos com esse projeto.
---

Enquanto estou escrevendo meu post sobre a história do PHP e seus frameworks, um post que está dando bastante trabalho por sinal ksksks, mas está ficando bem legal!

Sinceramente não sei como o Fabio Akita consegue fazer um post tão bem produzido por mês!
 Acabei decidindo escrever sobre a história do meu NAS.
 
**De onde veio a ideia?**

Comecei a tervontade de criar um servidor quando vi um video da Duda 286, nesse vídeo ela monta um servidor dentro de um carro que ela usava como casa!

![](/post-images/Vt5CuQM91gsYK0VgX163V2fpAhJq7oRgPmRR08Tw.png)

E o vídeo é simplesmente incrível, recomendo! Tem muito conhecimento interessante que é passado!

Inclusive tem até um comentário meu nesse vídeo em 2021! Eu estava muito empolgado assistindo, recomendo que vejam esses vídeos do carro casa da duda 286.
Meu comentário todo empolgado:

![](/post-images/IdoZWspbNNZhlkgcCdmzpXTGzSW7glFka3y9utIT.png)

ksksksksss

Depois de conhecer sobre esse servidor eu acabei conhecendo os famosos dragões chineses mais conhecidos como xeons, fiquei super empolgado em pesquisar sobre computadores xeons e meu passa tempo era ver vídeos sobre processador xeons e ficar pesquisando sobre kit xeons no aliexpress!!

![](/post-images/PTWDisjhSZgQFIzEm58VuvQcrCFBuY5Avfku9sLy.png)

Em 2022 acabei encontrando um vídeo do Fabio Akita sobre a máquina do tempo dele e foi ai que eu decidi criar uma para mim e fazer algo semelhante!

Minha ideia é gravar vários vídeos e guardar nessa pasta da minha 'máquina do tempo'. Seriam mensagens de outras pessoas e minhas também, falando diretamente para o meu 'eu do futuro'. O plano é abrir esses vídeos daqui exatamente 10 anos, em 2033 (já que criei o NAS em 2023), e relembrar tudo isso. Vai ser incrível revisitar essas mensagens no futuro!

![](/post-images/ftX86J0RkNHrNq5TubB0n8to3qp2RhYKt8oAhIr6.png)

Mas ai eu tinha duas barreiras, não ter um servidor e não saber como criar um servidor de arquivos, o máximo que eu tinha era alguns termos que o Fabio Akita usou no video e só!

Quando comecei a pesquisar não havia muito conteúdo sobre, só fiquei sabendo sobre um sistema operacional chamado FreeNAS, que mais tarde mudou de nome para TrueNAS!

![](/post-images/uPYVr9a8d7WhNiuRqgF8yEc27DuNE0ZZxhvQFEC1.png)

Hoje nós temos séries maravilhosas ensinando a como criar instalar e configurar um TrueNAS, vou recomendar duas que assisti depois de ter feito o meu NAS!

![](/post-images/Ykr8fWuJgpCyNk5Pu7BBXijts5FHvnE8VJiCNa3q.png)

Recomendo também essa série de videos do canal “O que eu tô editando aqui?”, é muito bem produzida e ele explica muito bem o que é Raid e outros termos!!

 ![](/post-images/Se3uUaqdHJQfE0S7UqpfaSuskvB6WgFLtiVIpt3Z.png)

**Meu primeiro NAS**

 Meu primeiro NAS eu criei na Evoi, lá a gente precisava de uma solução para os desings poderem compartilhar arquivos que estavam trabalhando! 

 Eu já havia comentando com os meus chefes que eu sabia criar um servidor NAS, sabia nada, nunca tinha criado um, só assisti vídeos. Aí, um dia eles decidiram tirar essa ideia do papel, nós tinhamos um PC para usar como servidor, só precisavamos de armazenamento!!

E foi ai que cometi meu primeiro erro montando um NAS! 

**1º erro:** 

Peguei armazenamentos de tamanhos diferentes para usar o Raid 1.

Raid 1 é básicamente um espelhamento tudo que você tiver em um HD você vai ter no outro!
Caso um venha a falhar você tem os mesmos arquivos no outro que está funcionando!
 
  ![](/post-images/ylP5b0PucyDbsfFVSPIMXB75yle8pNxEMPD9r5c4.png)
  
E qual o problema de pegar dois armazenamentos de tamanhos diferentes?
Se eu tenho 1 HD e 2TB e o outro de 3TB quando eu usar o Raid 1 meu armazenamento total será de 2TB, se eu tivesse pego dois Hds de 3TB meu armazenamento total seria de 3TB então, 1 TB ficou básicamente não sendo utilizado para nada! 

**2º erro:** 

Meu segundo erro foi ter pego 1 HD de uma máquina antiga para usar no NAS, grande erro porque o HD estava defeituoso já! E isso acabou ocasionando várias verifações de poll do TrueNAS e isso fazia o servidor reiniciar frequentemente!

Então imagina você chega na empresa e o pessoal já pede para você arrumar o servidor porque ele desligou durante a noite e ficaram 1 hora sem trabalhar porque eles chegavam às 09:00 e você às 10:00 💀, realmente uma situação bem tensa.

Tentaram remover o NAS porque não estava funcionando bem, mas eu descobri o problema que era o HD então deu para solucionar!

**Pandora**

Após sofrer frequentemente com perca de arquivos do PC eu resolvi botar meu projeto em prática!
Os problemas de perca de arquivo eram porque meu pai as vezes formatava o HD dele com o sistema operacional dele e na hora de instalar o novo sistema ele selecionava meu SSD para fazer a instalação. 

Então para isso não me afetar mais eu decidi criar um Servidor próprio! E foi bem legal poder limpar todo meu google drive e não ter que me preocupar na hora de formatar o computador!

Antes quando eu ia formatar meu computador era um ritual, tinha que ficar mandando as coisas para o google drive, passar para pendrives e escolher quais arquvios iriam ser sacrificados com essa formatação!

Hoje isso não é mais um problema. Simplesmente crio uma pasta, arrasto tudo para lá, formato o sistema, e depois que o novo estiver instalado, só copio as coisas do NAS para ele. É uma maravilha!

![](/post-images/PFDtgJyvPpuWcI6Mxb8cur7LuiOjANdhBOyIIdzm.png)

Sim, formatei o PC 4 vezes esse ano 😆 

Criei o meu NAS em junho de 2023, ele tem dois SSD de 1TB cada, um HD para armazenar o sistema operacional. humildes 2gb de Ram e um processador Pentium E5400.

A configuração do NAS não foi eu quem escolhi, meu pai tinha acabado de chegar em casa com um pc que ele tinha ganhado, e me disse que não iria usar para nada e deixou enconstado esse pc por uns 3 meses até que eu dei uma utilidade para ele!

Inclusive eu tenho um outro parado e esse eu nunca nem cheguei a ligar, pois um servidor já está bom dois é muita dor de cabeça 😅

![](/post-images/Z9SeRYZsbWHLW1nGvps9A4f47ZNjPxWwWnRbYcbP.png)

 Você não precisa de um servidor muito forte para fazer um servidor de arquivos!
 Só se você ficar toda hora comprimindo e descomprimindo arquivos ou quiser ficar vendo miniaturas de imagens ou videos ai recomendaria ter um processador mais forte! 
 
 Eu não recomendo deixar as miniaturas ativadas, pois isso pode causar travamentos no NAS.
 
 ![](/post-images/Nb244UoU2tZEJyVpRpB52s0Nk0Kw7PlyoFuL7xaY.png)
 
 Tem bastante coisa legal que da para fazer com o NAS, criar máquina virtual e acessar pelo navegador, criar jails, hospedar projetos!

Eu também mantenho meu NAS seguro, uma vez por mês eu salvo tudo tem que nele no one drive se um dia acontecer algo com ele terei tudo na nuvem e se algum dia acontecer algo com a nuvem terei tudo no NAS!

**Raid**

Raid é básicamente a configuração de redundância que você vai usar no servidor de arquivos!
Existem algumas:

Raid 0: É básicamente o raid mais kamikaze possivel! Você vai básicamente juntar o espaço dos seus HDs, então se você tem dois HDs de 1TB cada juntando tudo você vai ter um espaço total de 2TB em um volume só!

O problema desse tipo de Raid é que se um dos HDs der problema você provavelmente vai perder tudo, porque tudo que você salvar parte pode ficar salvo em um HD e parte desse arquivo em outro HD!

![](/post-images/PLJ8HFOXGrgw83jZ3wzxLCpmQalfimHJobcxXCGO.png)

Raid 1: É um espelhamento, tudo que tiver salvo em um HD vai ter no outro! É bem seguro pois se um falhar você vai ter o outro HD, o único problema é que sempre seu espaço total vai ser divido pela metade, então se você tiver 2 HDs de 2TB cada no total você vai ter 2TB quando aplicar o Raid 1!!

![](/post-images/sTPhBVyjCg1MB3FIPWPXmmOGXK9q4iJVKndAyQHO.png)

Raid 5: Esse você precisa de no mínimo três discos para usar esse sistema de raid! Com esse raid você consegue salvar pariedade que caso um disco venha falhar você consegue recuperar os dados desse disco!

![](/post-images/NnFTz2AYQluBYL0eyuuEjE2zEahw020giZfQ7Ch9.png)

Raid 6: Esse raid é Igual ao Raid 5 a diferença é que ele precisa de no mínimo 4 discos e aguenta uma falha simultânea de 2 discos!

![](/post-images/T2kMbX1EA5RtPWGDrRfLoZDxUcRbnfQ15wEYmXDi.png)

Se tiver dúvidas de como funciona o raid recomendo ver o vídeo da dell falando sobre: https://www.youtube.com/watch?v=8V5FoTQpjIE

**Considerações:**

Acho uma baita experiência você criar seu próprio servidor, e não necessariamente precisa ser um para armazenar arquivos, você pode fazer um de retro games,um servidor para assistir animes ou para hospedar sites entre outras coisas!

Hoje vejo um vídeo desse de 13 anos atrás eu já acho muito nostálgico imagina ver um outro de 2023 em 2033!

![](/post-images/U78p1KcHd1RgSHEHUwpbxlRus9K29PB6llJ4GbXw.png)

Muita coisa deve ter mudado no meu bairro, na minha casa, até meu cabelo deve ter mudado! E recomendo que façam isso, criem uma máquina do tempo e abram ela no futuro para olhar para o passado com carinho.

![](/post-images/xGrCgOIkzGGR2EdyZ3Y6yIF3XYoCEVjdm2GfIHCn.gif)

O Post de hoje foi esse!
Obrigado por ler até aqui :3