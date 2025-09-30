# 📒 Agenda de Contatos

Um sistema de **gerenciamento de contatos** com operações CRUD completas, construído em **Laravel Fullstack + Blade**.  
Projeto baseado no repositório [Avp-FrameWorks](https://github.com/Hicaroos/Avp-FrameWorks) (branch `develop`).

---

## 🚀 Objetivo

Demonstrar de forma prática um sistema de **Agenda de Contatos**, permitindo que usuários:

- Cadastrem e autentiquem sua conta  
- Adicionem, visualizem, editem e removam contatos  
- Utilizem uma interface simples e funcional desenvolvida com Blade  

---

## ✨ Funcionalidades

### 🔐 Autenticação
- Registro de usuários (nome, e-mail, senha)  
- Login e logout  
- Middleware para proteger rotas de contatos  

### 📇 Contatos
- Criar contato com **nome, telefone, e-mail e endereço (opcional)**  
- Listar contatos do usuário logado  
- Editar informações de contato  
- Remover contato  
- Busca simples por **nome** ou **e-mail**  

### 🎨 Interface
- Layout simples com Blade  
- Componentes reutilizáveis (header e footer)  
- Página inicial com lista de contatos  
- Formulários de criação e edição  
- Alertas de sucesso ou erro  

---

## 🛠 Requisitos

- PHP >= 8.0  
- Composer  
- Laravel (compatível com a versão do repositório base)  
- MySQL / SQLite (ou outro banco suportado pelo Laravel)  
- Node.js + npm/yarn (para assets, se utilizados)  

---

## ⚙️ Instalação

```bash
# Clone o repositório (branch develop)
git clone -b develop https://github.com/Hicaroos/Avp-FrameWorks.git agenda-contatos
cd agenda-contatos

# Instale dependências PHP
composer install

# Copie o .env e configure
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco no .env (DB_CONNECTION, DB_DATABASE, DB_USERNAME, DB_PASSWORD)

# Execute as migrações
php artisan migrate

# (Opcional) Popule dados de teste
php artisan db:seed

# Instale dependências JS/CSS
npm install
npm run dev

# Inicie o servidor
php artisan serve
