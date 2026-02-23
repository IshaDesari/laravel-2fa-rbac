# Laravel 2FA & Role-Based Access Control System

A secure authentication system built with Laravel featuring:

- 🔐 Two-Factor Authentication (2FA)
- 👥 Role & Permission Management
- 🛡️ Middleware-based access control
- 📊 Admin dashboard
- 📧 Email verification & secure login

---

## 🚀 Features

- User Registration & Login
- Two-Factor Authentication (OTP-based)
- Role-Based Access Control (RBAC)
- Permission Management
- Admin/User role separation
- Secure password hashing
- Middleware protection for routes
- Flash notifications & validation
- Clean UI with Blade templates

---

## 🛠️ Tech Stack

- PHP
- Laravel
- MySQL
- Blade Template Engine
- Bootstrap / Tailwind (if applicable)

---

## 📦 Installation

### 

1️⃣ Clone the repository
```bash
git clone https://github.com/your-username/your-project-name.git
cd your-project-name

2️⃣ Install dependencies
composer install
npm install
npm run dev

3️⃣ Setup Environment
cp .env.example .env
php artisan key:generate

Update your .env file with database credentials.

4️⃣ Run Migrations
php artisan migrate

Seed database
php artisan db:seed

5️⃣ Start the server
php artisan serve
