
# Instruções para rodar o projeto `laravel_ava` (Backend + Frontend)

Este guia contém os passos para configurar e executar o projeto Laravel + Vue.js localmente.

---

## 🧱 Requisitos

### Geral:
- Git
- Node.js 18+
- NPM ou Yarn
- PHP 8.2+
- Composer 2+
- MySQL ou MariaDB

### Frontend:
- Vue 3
- Vite
- TailwindCSS

### Backend:
- Laravel 12

---

## 📁 Estrutura do Projeto

```
laravel_ava/
├── backend/        # Projeto Laravel
└── frontend/       # Projeto Vue 3
```

---

## 🚀 Backend (Laravel)

### 1. Acesse a pasta do backend:
```bash
cd laravel_ava/backend
```

### 2. Instale as dependências PHP:
```bash
composer install
```

### 3. Copie o `.env.example` e configure:
```bash
cp .env.example .env
```

Edite o `.env` com as credenciais do seu banco de dados:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbmedtecro
DB_USERNAME=root
DB_PASSWORD=Bgor5b6y22@
```

### 4. Gere a key do Laravel:
```bash
php artisan key:generate
```

### 5. Execute as migrations:
```bash
php artisan migrate
```

### 6. Crie a pasta de uploads (caso use imagem):
```bash
mkdir -p public/uploads
chmod -R 775 public/uploads
```

### 7. Suba o servidor:
```bash
php artisan serve
```

> A API estará em: [http://localhost:8000](http://localhost:8000)

---

## 💻 Frontend (Vue.js)

### 1. Acesse a pasta do frontend:
```bash
cd laravel_ava/frontend
```

### 2. Instale as dependências:
```bash
npm install
```

### 3. Crie o arquivo `.env`:
```bash
cp .env.example .env
```

Configure o `.env` com a URL da API:
```
VITE_API_URL=http://localhost:8000/api
```

### 4. Inicie o servidor de desenvolvimento:
```bash
npm run dev
```

> O sistema estará em: [http://localhost:5173](http://localhost:5173)

---

## 🧪 Testando

- Use o Postman para testar as rotas da API, por exemplo:
```
GET     http://localhost:8000/api/cursos
POST    http://localhost:8000/api/cursos
```

- Teste a interface acessando [http://localhost:5173](http://localhost:5173)

---

## 🛠️ Dicas Extras

- Sempre que modificar uma migration:
```bash
php artisan migrate:fresh --seed
```

- Para limpar cache:
```bash
php artisan config:clear
php artisan route:clear
```

---

## 🧾 Licença
Este projeto é open-source para fins educacionais e internos da INFA.

---

# 📦 Dependências Adicionais Instaladas no Projeto Vue 3 + Vite + Tailwind

Lista de bibliotecas instaladas manualmente no projeto, com os respectivos comandos:

### tailwindcss
```
npm install -D tailwindcss postcss autoprefixer
```

### vue-router
```
npm install vue-router
```

### axios
```
npm install axios
```

### sweetalert2
```
npm install sweetalert2
```

### vue-the-mask
```
npm install vue-the-mask
```

### chart.js
```
npm install chart.js
```

### @types/chart.js
```
npm install --save-dev @types/chart.js
```

### vue-chartjs
```
npm install vue-chartjs
```

### vue-pdf-embed
```
npm install vue-pdf-embed
```

### @fortawesome/fontawesome-free
```
npm install @fortawesome/fontawesome-free
```
