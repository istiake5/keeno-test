# Keeno Task.

## Using Laravel7, Vuejs.

## Installation

Clone this repository

```bash
git clone https://github.com/istiake5/keeno-test.git
```

Now install composer

```bash
composer install
```

Generate key on .env file

```bash
cp .env.example .env
php artisan key:generate
```
Database Setup

```bash
php artisan migrate --seed
```

Now install npm

```bash
npm install
```

Finally
```bash
php artisan serve
```