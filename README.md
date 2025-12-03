# Sistema de Gestão de Funcionários em PHP

## 📌 Descrição
Este projeto é um sistema simples de gestão de pessoas desenvolvido em PHP.  
Permite operações básicas de cadastro, visualização, edição e remoção de pessoas (**CRUD**), com interface web e utilização de um banco de dados para armazenamento.

## 🛠 Tecnologias utilizadas
- **MySQL**
- **PHP**
- **HTML / CSS**

## 🚀 Funcionalidades

<img src="assets/imgs/telaInicial.png" alt="Tela inicial" width="600"/>

### ➤ Cadastro de funcionários
- Cadastro de nome, dados pessoais e outras informações.
- Verificação automática de preenchimento obrigatório.

<img src="assets/imgs/cadastro.png" alt="Tela de cadastro" width="800"/>

<span style="color:#e63946; font-weight: bold;">
✔ Validação de campos: O formulário impede o envio caso algum campo obrigatório esteja vazio e exibe uma mensagem de erro, garantindo integridade dos dados.
</span>

---

### ➤ Listagem de funcionários
- Visualização completa dos funcionários cadastrados.
- Acesso às ações de editar e remover.

<img src="assets/imgs/listas.png" alt="Tela de listagem" width="800"/>

<span style="color:#e76f51; font-weight: bold;">
✔ Confirmação de exclusão: Antes de remover um funcionário, o sistema exibe um popup pedindo confirmação, evitando exclusões acidentais.
</span>
