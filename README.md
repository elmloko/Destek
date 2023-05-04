# ONLINE TECHNICAL ASSISTANCE SYSTEM “DESTEK”

With the Destek Online Technical Assistance System, users can access services, such as technical support via ticket and request more personalized technical assistance. All of this is designed to ensure that users can get quick and effective answers to their questions, allowing them to resolve their technical issues quickly and smoothly.

## LANGUAGES, FRAMEWORKS USED AND TOOLS 🛠️

* PHP 8.1.10
* LARAVEL VIEW: 8.0
* MYSQL
* Laravel UI Stisla
* Spatie Laravel Permission

## Installation

We clone the repository

```bash
git clone https://github.com/elmloko/Destek.git
```

We install our dependencies with [Composer](https://getcomposer.org/download/)

```bash
composer install
```

We make a copy of our .env file with the following command

```bash
cp .env.example .env
```

We generate the key for our .env

```bash
php artisan key:generate
```

We install our necessary packages [npm](https://nodejs.org/en/download)

```bash
npm install
```

we compile

```bash
npm run dev
```

## DataBases

* We import the database to MySQL
* We configure our .env file

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=destek
DB_USERNAME=root
DB_PASSWORD=
```

* migrate and seed in database

```bash
php artisan migrate
```

## Credentials

| User          | Email             | Pass     |
| ------------- | ----------------- | -------- |
| Admin         | admin@gmail.com   | 12345678 |
| Technical     | tecnico@gmail.com | 12345678 |
| Authorization | boris@gmail.com   | 12345678 |
| Client        | ale@gmail.com     | 12345678 |

## Authors and acknowledgment

* Maria Alejandra Quintanilla Guarachi
* Leonardo Doria Medina Ochoa
* Marco Antonio Espinoza Rojas

## License

[MIT](https://choosealicense.com/licenses/mit/)
