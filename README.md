<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installing project

- First clone the repository

```
git clone https://github.com/azizbek-tursunov/library.git
```
- Go to project folder
```
cd library
```
- And then copy .env file
```
cp .env.example .env
```
- Run composer
```
composer install
```
- Generate key
```
php artisan key:generate
```
- Install node modules
```
npm install
```
- Configure .env file to your database
- Then migrate with seeders
```
php artisan migrate --seed
```
- Run npm and laravel
```
npm run dev
```
```
php artisan serve
```
---

## Users

- **Admin**. Admin can register new employee.
- **Nazoratchi** can registers readers who have entered the library.
- **Kutubxonachi** can create books and readers. Can give and receive books to students.

---
- Admin
> login: _admin@man.com_ <br>
password: _secret_

- Nazoratchi
> login: _nazoratchi@man.com_ <br>
password: _secret_

- Kutubxonachi
> login: _kutubxonachi@man.com_ <br>
password: _secret_
