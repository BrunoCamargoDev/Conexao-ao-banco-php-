# Cadastro de Produtos - Floricultura Encanto

Este projeto é um sistema simples para cadastro de produtos em uma floricultura, permitindo o registro de nome, tipo, cor e serviços adicionais de flores.

---

## 🗂 Estrutura do projeto

- `cadastro.html`  
  Formulário HTML para cadastro de produtos com campos para nome da flor, tipo, cor e serviços adicionais. Também contém o CSS básico para estilização.

- `conexao.php`  
  Script PHP responsável pela conexão com o banco de dados MySQL.

- `processamento.php`  
  Recebe os dados do formulário via POST, trata os dados e insere no banco de dados.

---

## 🚀 Como usar

1. Configure seu servidor local (ex: XAMPP, WAMP, MAMP) com PHP e MySQL.  
2. Crie um banco de dados e uma tabela `cadastro` com os campos necessários (`nome`, `tipo`, `cor`, `servicos`).  
3. Atualize as credenciais do banco em `conexao.php`.  
4. Coloque os arquivos do projeto na pasta pública do servidor (`htdocs` ou `www`).  
5. Acesse o formulário via navegador (`http://localhost/cadastro.html`).  
6. Preencha e envie o formulário para cadastrar um produto.

---

## 🛠 Tecnologias usadas

- HTML5  
- CSS3  
- PHP  
- MySQL  

---

## ✨ Possíveis melhorias futuras

- Validar e sanitizar dados no backend para segurança.  
- Implementar mensagens de feedback no formulário.  
- Adicionar página para listar os produtos cadastrados.  
- Usar prepared statements para evitar SQL Injection.

---

## 📄 Licença

Este projeto é livre para uso e modificação.

---

## 📞 Contato

Para dúvidas ou sugestões, entre em contato comigo pelo email: brunocamargo.dev@gmail.com

