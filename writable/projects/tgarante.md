---
title: TGarante
date: 2026-04-28
description: Plataforma que une corretores e interessados em alugar ou comprar um imóvel.
image: /project-images/tgarante.png
github: 
stack: PHP, Laravel, Livewire, Tailwind, AlpineJS
type: commercial
company: Noweb
demo:
---

## Sobre o Projeto

Vi a TGarante nascer de um projeto em branco até se tornar um ecossistema de plataformas utilizado diariamente por diversos usuários. Durante todo o seu ciclo de vida, a TGarante foi mantida quase integralmente por dois desenvolvedores: [Victor Silva](https://www.linkedin.com/in/victordasilvafernandes/) e [Mikael Oliveira](https://www.linkedin.com/in/mikael-oliveira-345a34209/).

## Objetivos

* Permitir que o corretor publique imóveis na TGarante, Zap Imóveis e VivaReal com um único cadastro.
* Facilitar o gerenciamento de leads para os corretores.
* Oferecer suporte eficiente para corretores e locatários.

## Funcionalidades Implementadas

### 1. Assinatura
Desenvolvi o sistema de assinaturas para que os corretores pudessem cadastrar mais imóveis e ampliar seus limites. Implementei todo o fluxo de renovação de plano, upgrade/downgrade e a liberação dinâmica de benefícios conforme o plano do usuário.

### 2. SSO (Single Sign-On) 
Este foi o sistema mais desafiador da minha carreira. O objetivo era integrar todos os sistemas da TGarante (que incluem diversos monólitos) sob um autenticador único: ao logar em uma plataforma, o usuário deveria ter acesso imediato às demais. Como o material técnico era escasso e eu era o desenvolvedor com mais experiência no projeto na época, desenhei a arquitetura do zero, validei fluxos de segurança e implementei com sucesso a solução de login unificado.

### 3. Sistema de Chat
Implementei um chat em tempo real utilizando WebSockets (Laravel Echo com Ably) para suporte e auxílio aos corretores.

### 4. Sistema de Cadastro de Imóveis
Um sistema em constante evolução para evitar fraudes e garantir a qualidade dos anúncios. Implementei fluxos de validação pré-publicação, auditoria de edições para rastrear alterações feitas pelos corretores e um gerador automático de descrição de imóveis baseado nos dados preenchidos.

### 5. Feedback de Upload de Imagens
Para resolver chamados de usuários que acreditavam que o upload havia falhado, adicionei um sistema de feedback visual. Enquanto as imagens são processadas, um carregamento (loading) é exibido tanto para o corretor quanto para o administrador, liberando a visualização conforme ficam prontas.

### 6. Plataforma de Vídeos
No TGarante Academy, fiz o sistema que gerencia a estrutura de cursos e materiais de apoio em vídeo.

### 7. Gerenciador de Leads
Através da TGarante Conecta, os corretores gerenciam novos leads, visualizam mensagens e organizam o contato com pessoas interessadas.

### 8. Gerador de Placas
Implementei um gerador de placas personalizadas com QR Code. A ferramenta permitia que o corretor imprimisse e instalasse uma placa física no imóvel; assim, qualquer interessado que escaneasse o código era direcionado imediatamente para o perfil do imóvel ou do corretor na plataforma.

### 8. Integração com o Grupo ZAP
Tinhamos implementado o sistema de gerenciar nossos imóveis no ZAP Imóveis e Viva Real usando a documentação fornecida por eles.

## Stack Tecnológica

**TGarante**
* Backend: PHP, Laravel
* Banco de Dados: MySQL
* Frontend: Livewire, Tailwind CSS, AlpineJS

**TGarante Academy**
* Backend: PHP, Laravel
* Banco de Dados: MySQL
* Frontend: Inertia, TypeScript, React, Tailwind CSS

**TGarante Conecta**
* Backend: PHP, Laravel
* Banco de Dados: MySQL
* Frontend: Inertia, TypeScript, React, Tailwind CSS

**TGarante SSO**
* Backend: PHP, Laravel
* Banco de Dados: MySQL
* Frontend: TypeScript, React, Tailwind CSS

**Aplicativo TGarante**
* Backend: PHP, Laravel
* Banco de Dados: MySQL
* Frontend: TypeScript, React Native, Tailwind CSS

## Status do Projeto

**Status:** Finalizado pela Noweb. Devido a mudanças na sociedade da empresa, optaram por refazer a plataforma em um novo formato.

**Período de atuação:** Outubro de 2023 a Outubro de 2025 (2 anos e 1 mês).

## Imagens do Projeto

Devido à transição de sistemas, os registros visuais são limitados. Abaixo, imagens da plataforma principal:

![Imagem 1](/project-images/tgarante.png)

![Imagem 2](/project-images/tgarante1.png)

![Imagem 3](/project-images/tgarante4.png)

### Vídeos de Demonstração

<video width="100%" controls>
  <source src="/project-images/tgarante2.mp4" type="video/mp4">
  Seu navegador não suporta a tag de vídeo.
</video>

<video width="100%" controls>
  <source src="/project-images/tgarante3.mp4" type="video/mp4">
  Seu navegador não suporta a tag de vídeo.
</video>