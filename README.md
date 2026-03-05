# Microframework PHP - Aula 5 🚀

Prof. Pelegreen! 
Aluno: Gabriel.denke

Este projeto foi desenvolvido como atividade individual para a disciplina de Frameworks (Parte 3). [cite_start]O objetivo foi criar um microframework PHP do zero, focado em entender o fluxo de uma requisição HTTP e o padrão Front Controller[cite: 3, 4, 5].

## 📋 Sobre o Projeto
[cite_start]O framework segue os 4 passos essenciais de um framework HTTP definidos por Matt Sparks[cite: 7]:
1. [cite_start]**Receber a solicitação**: O ponto de entrada captura o pedido do usuário[cite: 8].
2. [cite_start]**Analisar o pedido**: O sistema identifica qual rota foi solicitada[cite: 9].
3. [cite_start]**Executar tarefas**: O código específico da página é processado[cite: 10].
4. [cite_start]**Retornar uma resposta**: O objeto de resposta é enviado ao navegador[cite: 11].

## 🛠️ Tecnologias e Ferramentas
* [cite_start]**PHP**: Linguagem base do projeto[cite: 6].
* [cite_start]**Composer**: Gerenciador de dependências para PHP[cite: 63, 64].
* [cite_start]**Symfony HttpFoundation**: Componente utilizado para gerenciar Requests e Responses de forma profissional[cite: 75].
* [cite_start]**Git**: Controle de versão seguindo o padrão *Conventional Commits*.

## 🏗️ Estrutura de Arquivos
* `frente.php`: O **Front Controller**. [cite_start]Ele roteia todas as requisições para o script correto com base na URL[cite: 94].
* [cite_start]`olá.php` e `tchau.php`: Scripts de lógica simples que preparam o conteúdo da resposta[cite: 97].
* [cite_start]`vendor/`: Pasta gerada pelo Composer contendo as bibliotecas externas[cite: 75].

## 🚀 Como Executar
1. [cite_start]Certifique-se de ter o **PHP** e o **Composer** instalados globalmente[cite: 63].
2. Clone este repositório.
3. No terminal, dentro da pasta do projeto, execute:
   ```bash
   composer install
