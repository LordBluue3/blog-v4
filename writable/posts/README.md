# Como Adicionar Posts ao Blog

## 📝 Formato dos Posts

Os posts do blog são criados como arquivos Markdown (.md) na pasta `writable/posts/`.

## ✍️ Criando um Novo Post

1. Crie um arquivo `.md` na pasta `writable/posts/`
2. Use o formato de nome: `YYYY-MM-DD-titulo-do-post.md` (exemplo: `2026-04-19-meu-post.md`)
3. Adicione os metadados no início do arquivo usando YAML front matter

## 📋 Estrutura do Post

```markdown
---
title: Título do Post
date: 2026-04-19
author: Seu Nome
image: https://url-da-imagem.com/imagem.jpg
excerpt: Um resumo curto do post que aparecerá na lista de posts.
---

# Título do Post

Aqui começa o conteúdo do seu post em Markdown.

## Seção

Você pode usar todas as funcionalidades do Markdown:

- Listas
- **Negrito**
- *Itálico*
- [Links](https://exemplo.com)
- Imagens
- Code blocks

```php
<?php
echo "Olá, Mundo!";
```

E muito mais!
```

## 🎨 Metadados Disponíveis

- **title**: Título do post (obrigatório)
- **date**: Data no formato YYYY-MM-DD (obrigatório)
- **author**: Nome do autor (opcional, padrão: "Autor Desconhecido")
- **image**: URL da imagem de capa (opcional, usa placeholder se não fornecido)
- **excerpt**: Resumo/descrição curta (opcional)

## 📁 Exemplo de Arquivo Completo

Veja os arquivos de exemplo na pasta `writable/posts/`:
- `2026-04-19-comecando-com-codeigniter-4.md`
- `2026-04-15-melhores-praticas-php.md`
- `2026-04-10-trabalhando-com-banco-de-dados.md`

## 🔄 Atualizando Posts

- Os posts são lidos dinamicamente do diretório
- Não é necessário reiniciar o servidor
- Basta atualizar a página do blog para ver as mudanças

## ⚙️ Como Funciona

1. O sistema lê todos os arquivos `.md` da pasta `writable/posts/`
2. Extrai os metadados do YAML front matter
3. Converte o Markdown para HTML usando a biblioteca Parsedown
4. Exibe os posts ordenados por data (mais recentes primeiro)

## 🌐 URLs dos Posts

O slug do post é gerado automaticamente a partir do nome do arquivo, removendo a data:
- Arquivo: `2026-04-19-meu-post.md`
- URL: `http://seusite.com/blog/meu-post`
