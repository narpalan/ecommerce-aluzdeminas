# A Luz de Minas - E-commerce de Velas e Luminárias Artesanais

![Logo Navbar](https://public/assets/imgs/logo-navbar.svg)

E-commerce especializado em velas aromáticas, luminárias e produtos artesanais com inspiração mineira

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Vue.js](https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vue.js&logoColor=4FC08D)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

## 📋 Índice

- [✨ Sobre o Projeto](#-sobre-o-projeto)
- [🚀 Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [🏗️ Arquitetura](#️-arquitetura)
- [📁 Estrutura do Projeto](#-estrutura-do-projeto)
- [⚡ Como Executar](#-como-executar)
- [👥 Equipe](#-equipe)
- [🛠️ Desenvolvimento](#️-desenvolvimento)
- [📈 Próximos Passos](#-próximos-passos)
- [📞 Suporte](#-suporte)
- [📄 Licença](#-licença)

## ✨ Sobre o Projeto
A Luz de Minas é uma loja virtual especializada em velas aromáticas, luminárias e produtos decorativos artesanais. O projeto nasceu da paixão por produtos que trazem luz, aconchego e bem-estar para os lares brasileiros.

### 🎯 Características Principais
- Catálogo de Produtos: Velas aromáticas, decorativas, luminárias e produtos personalizados
- Design Responsivo: Experiência otimizada para mobile, tablet e desktop.
- Performance: Carregamento rápido e experiência fluída
- SEO Optimizado: Estrutura preparada para mecanismos de busca

## 🚀 Tecnologias Utilizadas

### Backend
- Laravel 10.x - Framework PHP para aplicações web
- MySQL - Banco de dados relacional
- PHP 8.3+ - Linguagem de programação

### Frontend
- Vue.js 3 - Framework JavaScript progressivo
- Bootstrap 5 - Framework CSS para design responsivo
- Vite - Build tool e dev server rápido
- Axios - Cliente HTTP para APIs

### Ferramentas de Desenvolvimento
- Composer - Gerenciador de dependências PHP
- npm - Gerenciador de pacotes JavaScript
- Git - Controle de versão

## 🏗️ Arquitetura
O projeto segue uma arquitetura fullstack monolítica com separação clara de responsabilidades:

```
Cliente (Browser)
    ↓
Laravel (Backend + Routing)
    ↓
Blade Templates (Estrutura HTML)
    ↓
Vue.js (Interatividade Frontend)
    ↓
API Laravel (Futuramente)
```

### 📊 Fluxo de Dados
- Request HTTP → Laravel Routes
- Controller → Processa lógica de negócio
- Blade View → Renderiza template base
- Vue Components → Adiciona interatividade
- Assets Vite → CSS/JS otimizados

## 📁 Estrutura do Projeto

```
ecommerce-laravel/
├── app/                    # Lógica de backend
│   ├── Http/Controllers/   # Controladores
│   ├── Models/            # Modelos de dados
│   └── Providers/         # Service Providers
├── config/                # Configurações
├── database/              # Migrations e Seeds
├── public/                # Arquivos públicos
│   └── assets/           # Imagens, CSS, JS
├── resources/             # Frontend assets
│   ├── js/               # Componentes Vue.js
│   ├── css/              # Estilos
│   └── views/            # Templates Blade
├── routes/               # Definição de rotas
├── storage/              # Arquivos de sistema
└── tests/                # Testes automatizados
```

## ⚡ Como Executar

### 📋 Pré-requisitos
- PHP 8.3+
- Composer 2.0+
- Node.js 18+
- MySQL 8.0+
- Git

### 🚀 Instalação Rápida

```bash
# 1. Clone o repositório
git clone <repository-url>
cd ecommerce-laravel

# 2. Instale dependências PHP
composer install

# 3. Instale dependências JavaScript
npm install

# 4. Configure ambiente
cp .env.example .env
php artisan key:generate

# 5. Configure banco de dados no .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=a_luz_de_minas
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

# 6. Execute migrations
php artisan migrate

# 7. Build dos assets
npm run build
```

### 🎮 Comandos de Desenvolvimento

```bash
# Desenvolvimento com hot-reload
npm run dev

# Servir aplicação Laravel
php artisan serve

# Build para produção
npm run build

# Executar testes
php artisan test
```

### 🌐 Acesso
- Aplicação: http://localhost:8000
- Vite Dev Server: http://localhost:5173

## 👥 Equipe

### 🎨 Design & UX
- Sua Esposa - Designer UI/UX
- Protótipos Figma
- Design System
- Experiência do usuário

### 💻 Desenvolvimento
- Você - Full Stack Developer
- Arquitetura do sistema
- Backend (Laravel/PHP)
- Frontend (Vue.js/JavaScript)
- DevOps & Deploy

## 🛠️ Desenvolvimento

### 🔧 Workflow Git

```bash
# Branch principal
git checkout main

# Branch de desenvolvimento
git checkout -b develop

# Para novas features
git checkout -b feature/nome-da-feature
git add .
git commit -m "feat: descrição da feature"
git checkout develop
git merge feature/nome-da-feature
```

### 📝 Convenção de Commits

| Tipo       | Descrição               |
| :--------- | :---------------------- |
| `feat`     | Nova funcionalidade     |
| `fix`      | Correção de bug         |
| `docs`     | Documentação            |
| `style`    | Formatação de código    |
| `refactor` | Refatoração de código   |
| `test`     | Adição de testes        |
| `chore`    | Tarefas de manutenção   |

### 🐛 Debugging

```bash
# Logs da aplicação
tail -f storage/logs/laravel.log

# Debug mode
APP_DEBUG=true

# Tinker (REPL Laravel)
php artisan tinker
```

## 📈 Próximos Passos

### 🎯 Fase 1 - MVP (Atual)
- Setup inicial Laravel + Vue.js
- Configuração Bootstrap
- Estrutura básica de componentes
- Migração componentes do projeto Slim
- Layout responsivo completo

### 🚀 Fase 2 - Funcionalidades Core
- Sistema de catálogo de produtos
- Carrinho de compras
- Checkout básico
- Painel administrativo
- Integração com gateway de pagamento

### 💡 Fase 3 - Aprimoramentos
- PWA (Progressive Web App)
- Sistema de avaliações
- Recomendações personalizadas
- Integração com redes sociais
- Analytics e relatórios

## 📞 Suporte
Para dúvidas ou suporte sobre o projeto:

- Desenvolvedor: [Seu Nome]
- Email: [seu-email@provedor.com]
- Repositório: [Link do GitHub]

Desenvolvido com 💜 e ☕ por [Seu Nome] e [Sua Esposa]

"Iluminando lares com produtos artesanais de qualidade"

## 📄 Licença
Este projeto é proprietário de A Luz de Minas. Todos os direitos reservados.

Última atualização: {{DATA_ATUAL}}
Versão: 1.0.0-alpha


