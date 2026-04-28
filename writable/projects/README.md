# Como Adicionar Projetos

Para adicionar um novo projeto ao seu portfólio, crie um arquivo `.md` nesta pasta com a seguinte estrutura:

## Estrutura do Arquivo

```markdown
---
title: Nome do Projeto
date: YYYY-MM-DD
description: Uma breve descrição do projeto
image: URL da imagem do projeto
github: URL do repositório GitHub
stack: PHP, Laravel, React, TypeScript
type: personal
company: Nome da Empresa (se type for commercial)
demo: URL da demo (opcional)
---

## Conteúdo do Projeto

Aqui você pode escrever todo o conteúdo em Markdown...
```

## Campos do Front Matter

- **title**: Título do projeto (obrigatório)
- **date**: Data do projeto no formato YYYY-MM-DD
- **description**: Descrição curta que aparece no card
- **image**: URL da imagem de capa do projeto
- **github**: URL do repositório no GitHub (deixe vazio para projetos privados/comerciais)
- **stack**: Tecnologias usadas, separadas por vírgula
- **type**: Tipo do projeto - `personal` ou `commercial` (padrão: personal)
- **company**: Nome da empresa (obrigatório se type for commercial)
- **demo**: URL de uma demo online (opcional)

## Ícones de Tecnologia Disponíveis

O sistema reconhece automaticamente os seguintes ícones:

- PHP 🐘
- Laravel 🔴
- Livewire ⚡
- React ⚛️
- TypeScript 🔷
- JavaScript 🟨
- Vue 💚
- Node.js 🟢
- Python 🐍
- Docker 🐳
- MySQL 🐬
- PostgreSQL 🐘
- MongoDB 🍃
- Redis 🔴
- Tailwind 🎨
- Bootstrap 🅱️
- CodeIgniter 🔥

Se a tecnologia não estiver na lista, será mostrado o ícone padrão 📦

### Projeto Pessoal
```markdown
---
title: Meu Projeto Incrível
date: 2026-04-27
description: Um sistema completo de gerenciamento desenvolvido com Laravel e React
image: https://exemplo.com/imagem.jpg
github: https://github.com/seu-usuario/seu-projeto
stack: PHP, Laravel, Livewire, Tailwind, MySQL
type: personal
demo: https://demo.exemplo.com
---

## Sobre o Projeto

Descreva seu projeto aqui...
```

### Projeto Comercial
```markdown
---
title: Sistema ERP Empresarial
date: 2025-09-10
description: Sistema de gestão desenvolvido para empresa do setor de varejo
image: https://exemplo.com/imagem-comercial.jpg
github: 
stack: PHP, Laravel, MySQL, Vue
type: commercial
company: Empresa ABC Ltda
demo:
---

## Sobre o Projeto

Descreva o projeto comercial aqui

Instruções de instalação...
```

## Dicas

1. Use imagens de boa qualidade (recomendado: 600x400px)
2. Mantenha a descrição concisa (2-3 linhas)
3. Liste as tecnologias principais no campo stack
4. Adicione screenshots e diagramas no conteúdo
5. Seja específico sobre os desafios e aprendizados

### Projetos Pessoais vs Comerciais

**Projetos Pessoais** (🚀 tag roxa):
- Projetos open source
- Projetos de estudo
- Projetos hobby
- Podem ter repositório GitHub público
- Use `type: personal`

**Projetos Comerciais** (💼 tag laranja):
- Projetos desenvolvidos para empresas
- Projetos sob contrato
- Trabalhos freelance
- Geralmente sem repositório público (deixe github vazio)
- Use `type: commercial` e adicione o campo `company`
- Respeite NDAs e confidencialidade do cliente
