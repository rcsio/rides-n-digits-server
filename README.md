# Rides 'n' Digits Server

Rides 'n' Digits is an online platform for buying and selling vehicles, luxury items, and more in the MENA (Middle East and North Africa) region.

This is a [Laravel](https://laravel.com/) project.

## Warning

This project is a work in progress.

## Environment Variables

Create a `.env` file. Copy the contents of `.env.example` and paste them into the `.env` file.

Set the `APP_KEY` by running:

```bash
php artisan key:generate
```

Ensure that `APP_URL` and `FRONTEND_URL` are set in `.env` file.

```text
# .env file

# Backend (Laravel)
APP_URL=http://localhost:8000

# Frontend (Next.js)
FRONTEND_URL=http://localhost:3000
```

## Run Locally

```bash
php artisan migrate
php artisan serve
```

## Frontend Code Repository

[https://github.com/rcsio/rides-n-digits](https://github.com/rcsio/rides-n-digits)
