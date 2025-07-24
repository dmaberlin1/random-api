# 🎲 Laravel Random Number API

A high-quality Laravel 11 REST API for generating and retrieving random numbers.  
Built with SOLID principles, clean architecture, and modern Laravel best practices.

---

## 🧠 Features

- ✅ Generate a random number with unique UUID
- ✅ Retrieve previously generated number by ID
- ✅ Follows RESTful standards
- ✅ Code adheres to **SOLID**, **PSR-12**, and **DDD-inspired** principles
- ✅ Fully testable and extendable
- ✅ Uses latest Laravel 11 features (e.g. route attributes, invokable controllers)

---

## 📦 Tech Stack

- **Framework**: Laravel 11
- **Language**: PHP 8.3+
- **Database**: MySQL 5.7 (Dockerized)
- **Architecture**: Domain-driven separation with services and DTOs

---

## 🚀 Endpoints

| Method | Endpoint             | Description                     |
|--------|----------------------|---------------------------------|
| POST   | `/api/generate`      | Generate a new random number    |
| GET    | `/api/retrieve/{id}` | Retrieve a number by its UUID   |

### 📘 Example: Generate Number

```bash
curl -X POST http://localhost:8000/api/generate
