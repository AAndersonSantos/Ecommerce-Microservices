# **Users Microservice (Authentication API)**  

Um microsserviço de autenticação desenvolvido em **Laravel** com **Docker**, responsável por:  
✅ Registro de usuários  
✅ Login com geração de tokens JWT (via Sanctum)  
✅ Validação de tokens e retorno de dados do usuário  

---

## **📦 Tecnologias Utilizadas**  
- **Laravel 12** (PHP 8.2)  
- **Laravel Sanctum** (Autenticação via tokens)  
- **MySQL** (Banco de dados)  
- **Redis** (Sessões e cache)  
- **Docker** (Containerização)  
- **Nginx** (Servidor web)  

---

## **🚀 Como Executar o Projeto**  

### **Pré-requisitos**  
- Docker e Docker Compose instalados  
- Git (opcional)  

### **Passos para Iniciar**  
1. **Clone o repositório**:  
   ```bash
   git clone https://github.com/AAndersonSantos/Ecommerce-Microservices.git
   cd users-service
   ```

2. **Suba os containers**:  
   ```bash
   docker-compose up -d --build
   ```

3. **Execute as migrations**:  
   ```bash
   docker exec users-app php artisan migrate
   ```

4. **Acesse a API**:  
   - URL base: `http://localhost:8000/api`  

---

## **🔐 Endpoints da API**  

### **Registro de Usuário**  
- **POST** `/api/register`  
  ```json
  {
    "name": "Nome do Usuário",
    "email": "email@exemplo.com",
    "password": "senha123"
  }
  ```

### **Login**  
- **POST** `/api/login`  
  ```json
  {
    "email": "email@exemplo.com",
    "password": "senha123"
  }
  ```

### **Dados do Usuário (Autenticado)**  
- **GET** `/api/user`  
  - **Header**: `Authorization: Bearer <TOKEN>`  

---

## **🛠️ Estrutura do Projeto**  
```
users-service/
├── app/
│   ├── Http/Controllers/UserController.php
│   ├── Models/User.php
├── docker/
│   └── nginx.conf
├── routes/
│   └── api.php
├── docker-compose.yml
├── Dockerfile
└── README.md
```

---

## **⚙️ Variáveis de Ambiente**  
Crie um arquivo `.env` baseado no `.env.example` e configure:  
```env
DB_CONNECTION=mysql
DB_HOST=users-db
DB_PORT=3306
DB_DATABASE=ecommerce_users
DB_USERNAME=root
DB_PASSWORD=root

REDIS_HOST=users-redis
REDIS_PORT=6379
```

---

## **🐳 Docker Compose**  
O projeto utiliza 4 serviços:  
1. **users-app** (Laravel + PHP-FPM)  
2. **users-db** (MySQL)  
3. **users-redis** (Redis)  
4. **users-web** (Nginx)  

---

## **📌 Rotas Adicionais**  
- **GET** `/api/test` → Retorna `{"status": "API OK!"}` (para teste)  
- **GET** `/sanctum/csrf-cookie` → Gera token CSRF (para SPAs)  

---

## **💡 Dicas para Desenvolvimento**  
- Para reiniciar o serviço:  
  ```bash
  docker-compose restart users-app
  ```  
- Para ver logs:  
  ```bash
  docker logs users-app
  ```  

---


Esse `README.md` cobre o essencial para iniciar, testar e entender o microsserviço! 😊