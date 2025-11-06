# Projeto 1 - Portal de Academia (Fábrica de Anões)

Este projeto acadêmico consiste no desenvolvimento de um site PHP dinâmico. O objetivo foi criar um portal gerenciável para uma academia fictícia, a "Fábrica de Anões".

Fiz a implementação de um back-end robusto, incluindo um painel de controle administrativo, autenticação de usuários e gerenciamento de conteúdo dinâmico (CRUD) conectado a um banco de dados MySQL.

## 🚀 Funcionalidades Implementadas

O núcleo deste projeto foi a criação do sistema de gerenciamento:

* **Sistema de Roteamento Dinâmico:** O site utiliza um roteador PHP central (`index.php`) que, através do `$_GET['pg']`, decide qual módulo ou página carregar.
* **Painel de Controle (Admin):** Foi criado um painel de administração (`admin/index.php`) separado da área pública do site.
* **Sistema de Autenticação:**
    * Implementação de um sistema de login (`login.php`)
* **CRUD de Instrutores:**
    * Desenvolvimento do módulo de gerenciamento de `instrutores.php`.
    * Criação de formulários para Adicionar, Alterar e Excluir instrutores.
    * Conexão direta com a tabela `instrutores` no MySQL.
* **CRUD de Clientes:**
    * Implementação de um gerenciador para Clientes/Alunos.
    * Scripts PHP (`clientes-cadastro.php`, `clientes-altera.php`, `clientes-excluir.php`) que manipulam os dados no banco.
* **Estrutura do Banco de Dados:**
    * Criação de um banco de dados (`projeto_1`) no MySQL.
    * Modelagem das tabelas `admin_users`, `clientes`, e `instrutores` para suportar as funcionalidades do sistema.

## 🛠️ Tecnologias Utilizadas

* **PHP 8.2.12**
* **MySQL** (Gerenciado via phpMyAdmin)
* **Apache** (Servidor via XAMPP)
* **HTML5**
* **CSS3**

## 🔧 Como Executar
*a pasta tem que estar nomeada de `projeto1 quando extrair*
1.  Mova a pasta `projeto1` para o `htdocs` do seu XAMPP.
2.  Acesse o phpMyAdmin e crie o banco de dados `projeto_1`.
3.  Execute os comandos SQL abaixo ou acesse projeto_1.sql para criar as tabelas `admin_users`, `clientes` e `instrutores` com os dados de login.
4.  Acesse o site principal: `http://localhost/projeto1/`
5.  Acesse o painel de admin (via link na home ou `login.php`):
    * **Usuário:** `admin`
    * **Senha:** `fabrica123`



## COMANDOS PARA CRIAR AS TABELAS DO SQL 
-- 1. Cria o banco de dados 
CREATE DATABASE IF NOT EXISTS projeto_1;

-- 2. Seleciona o banco de dados
USE projeto_1;

-- 3. Cria a tabela 'clientes' (CRUD base da aula)
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    clientes VARCHAR(255) NOT NULL,
    cidade VARCHAR(100),
    estado VARCHAR(2)
);

-- 4. Cria a tabela 'instrutores' 
CREATE TABLE IF NOT EXISTS instrutores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    especialidade VARCHAR(100) NULL
);

-- 5. Cria a tabela 'admin_users' 
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- 6. Insere o usuário 'admin' 
-- (Login: admin / Senha: fabrica123)
INSERT INTO admin_users (usuario, senha) VALUES ('admin', 'fabrica123');
