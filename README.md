# Trabalho de PPI 3 - Laravel

### Introdução

Este trabalho visa criar uma versão simples de um app com Laravel, ainda sem conexão com banco de dados.

### Resumo

O trabalho consiste em uma página simples que permite ao usuário ler, remover e criar posts, aos quais possuem título e conteúdo.

O usuário terá os posts existentes apresentados no início da página, tendo neles um botão para removê-los do registro.

Também haverá um botão que levará à página de cadastro de novos posts, sendo todas as páginas de interação seguidas de mensagens de erro ou sucesso.

### Páginas

Existem 4 páginas acessíveis ao usuário, sendo o mapa de rotas:

```
Início
|
├──Criar Post
|   |
|   ├──Post criado
|   └──Erro
|
└──Deletar Post
   |
   ├──Post Deletado
   └──Erro
```