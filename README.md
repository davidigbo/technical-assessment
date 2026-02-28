# Gloztec Laravel Developer Assessment

This repository contains the Laravel Developer Assessment, covering:
1. **Task Management System (CRUD & Validation)**
2. **RESTful API for Product Management (Sanctum & Swagger)**
3. **Debugging & Optimization (Bug Fixes)**
4. **Git Best Practices (Feature Branch & PR)**
5. **SQL Queries for E-commerce Reports**
---

## **🚀 Project Setup & Installation**
## Clone the Repository
- git clone git@github.com:davidigbo/technical-assessment.git
- cd technical-assessment
- 
## Install Dependencies
Ensure you have Composer installed, then run:
- composer install

## Configure the Environment
- Copy the .env.example file and update your database credentials.
- cp .env.example .env

## Generate the application key:
- php artisan key:generate

## Set Up the Database
- Run the migrations to create the necessary tables:
  - php artisan migrate --seed


## Run the Application
- Start the Laravel development server:
 - php artisan serve

 ## Now, visit:
- 📌 http://127.0.0.1:8000 to access the application.


## 🛠️ Task 1: Laravel CRUD Operations
Implemented a Task Management System with:

- Create Task model (title, description, status, due_date)
- Implement CRUD operations in TaskController
- Validation rules (e.g., due_date must be a future date)
- Eloquent Scopes for filtering pending and completed tasks
- Authenticate the application using Laravel UI

## 🔌 Task 2: RESTful API for Products
Implemented a RESTful API with:

- Create Product model (name, price, stock)
- Build API Controller with CRUD operations
- Using Laravel Sanctum for authentication
- Swagger API Documentation

## 🐛 Task 3: Debugging & Optimization
- Fixed bugs in BuggyTaskController.php
- Improved request validation, error handling, and security
- Details are in BuggyCodeFix.md

## v🌿 Task 4: Git Best Practices
- Created feature/task-improvement branch
- Implemented validation improvements
- Opened a Pull Request (PR)
- Commit messages follow conventional commits (e.g., fix: added validation for task status)

## 💾 Task 5: SQL Query Challenge
Optimized MySQL queries for an e-commerce system:

Retrieve top 5 customers with highest spending
Get total revenue for the current month
List the most sold products

Run:
- mysql -u root -p assessment < ecommerce_queries.sql

## 📖 API Documentation (Swagger)
Swagger documentation is available at:
- 📌 http://127.0.0.1:8000/api/documentation

- To regenerate Swagger docs:
    - php artisan l5-swagger:generate

## 👥 Authors <a name="authors"></a>

👤 **David Igbo**

- GitHub: [@davidigbo](https://github.com/davidigbo)
- Twitter: [@davidigbo1](https://twitter.com/davidigbo1)
- LinkedIn: [davidigbo/](https://www.linkedin.com/in/davidigbo/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## 🙏 Acknowledgments <a name="acknowledgements"></a>

> I will like to thank Gloztec Solutions for this opportunity giving to me to work on this project.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## License

## Test API endpoint using Postman:

## 1. Testing the **User API Endpoint**

### Step 1: Authenticate the User (Get Token)

- **Method**: `POST`
- **URL**: `http://127.0.0.1:8000/api/register` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
  "name": "John Peter"
 "email": "test@laravel.com",
  "password": "12345678"
  "password_confirmation": "2345678"
}
```
> On a successful register, the API will return this:

```json
{
    "message": "User registered successfully",
    "user": {
        "name": "John Peter",
        "email": "test@laravel.com",
        "updated_at": "2025-02-03T20:42:18.000000Z",
        "created_at": "2025-02-03T20:42:18.000000Z",
        "id": 12
    }
}
```

- **Method**: `POST`
- **URL**: `http://127.0.0.1:8000/api/login` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
  "email": "user@example.com"
  "password": "12345678"
}
```

```json
{
    "message": "Login successful",
    "access_token": "14|MtbOB*************************************",
    "token_type": "Bearer",
    "user": {
        "id": 12,
        "name": "John Peter",
        "email": "test@laravel.com",
        "email_verified_at": null,
        "created_at": "2025-02-03T20:42:18.000000Z",
        "updated_at": "2025-02-03T20:42:18.000000Z"
    }
}
```

- **Method**: `POST`
- **URL**: `http://127.0.0.1:8000/api/logout` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
  - `email`: `user@example.com`
  - `password`: `12345678`

```json
{
    "message": "Logged out successfully"
}
```

### Step 2: The signed user can create a Product 

- **Method**: `POST`
- **URL**: `http://127.0.0.1:8000/api/products` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
    "name": "Shoe",
    "price": 50000,
    "stock": 2
}
```

> On a successful create a poduct, the API will return this:

```json
  {
    "name": "Shoe",
    "price": 50000,
    "stock": 2,
    "updated_at": "2025-02-03T20:53:40.000000Z",
    "created_at": "2025-02-03T20:53:40.000000Z",
    "id": 4
  }
```

 **Method**: `GET`
- **URL**: `http://127.0.0.1:8000/api/products` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
    "name": "Shoe",
    "price": 50000,
    "stock": 2
}
```

>  This will return list of all API endpoints:

```json
[
    {
        "id": 2,
        "name": "Shoe",
        "price": "100.00",
        "stock": 2,
        "created_at": "2025-02-03T14:57:10.000000Z",
        "updated_at": "2025-02-03T14:57:10.000000Z"
    },
    {
        "id": 3,
        "name": "Shirt",
        "price": "1200.50",
        "stock": 5,
        "created_at": "2025-02-03T19:22:55.000000Z",
        "updated_at": "2025-02-03T19:23:35.000000Z"
    },
    {
        "id": 4,
        "name": "Shoe",
        "price": "50000.00",
        "stock": 2,
        "created_at": "2025-02-03T20:53:40.000000Z",
        "updated_at": "2025-02-03T20:53:40.000000Z"
    }
]
```

**Method**: `GET`
- **URL**: `http://127.0.0.1:8000/api/products/4` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
    "name": "Shoe",
    "price": 50000,
    "stock": 2
}
```

> This will return API endpoints with a particular id:

```json
{
        "id": 4,
        "name": "Shoe",
        "price": "50000.00",
        "stock": 2,
        "created_at": "2025-02-03T20:53:40.000000Z",
        "updated_at": "2025-02-03T20:53:40.000000Z"
    }
```

**Method**: `PUT`
- **URL**: `http://127.0.0.1:8000/api/products/4` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
    "name": "Bags",
    "price": 70000,
    "stock": 3
}
```

> This will return updated API endpoints with a particular id:

```json
{
    "id": 4,
    "name": "Bags",
    "price": 70000,
    "stock": 3,
    "created_at": "2025-02-03T20:53:40.000000Z",
    "updated_at": "2025-02-03T21:19:45.000000Z"
}
```

**Method**: `DELETE`
- **URL**: `http://127.0.0.1:8000/api/products/4` 
  
- **Body** (choose `x-www-form-urlencoded` in Postman):
```json
{
    "name": "Bags",
    "price": 70000,
    "stock": 3
}
```

> This will delete API endpoints with a particular id and return this:

```json
{
    "message": "Product deleted successfully"
}
```
> If API endpoints with a particular id is not found it will return this:
```json
{
    "message": "Product not found"
}
```
