# Laravel Job Board

A Laravel-based job board application.

## Repository
[GitHub Repository](https://github.com/tenbonks/laravel-job-board)

## Requirements
- PHP 8.1+
- Composer
- Laravel 12+
- MySQL/PostgreSQL
- Node.js & NPM (for frontend assets)
- Alpine.js

## Installation

```sh
# Clone the repository
git clone https://github.com/tenbonks/laravel-job-board.git
cd laravel-job-board

# Install dependencies
composer install

# Copy environment file and generate app key
cp .env.example .env
php artisan key:generate

# Set up database in .env, then run:
php artisan migrate --seed

# Install frontend dependencies
npm install

# Build assets
npm run dev
```

## Running the App

```sh
# Start the Laravel server
php artisan serve

# (Optional) Run Vite in a separate terminal for hot reloading
npm run dev
```

## Useful Artisan Commands

```sh
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run database migrations
php artisan migrate --seed

# Create a model with migration, factory, and controller
php artisan make:model Job -mfc
```

## Testing

```sh
# Run feature and unit tests
php artisan test
```

## Deployment

```sh
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Build frontend assets
npm run build
```

## Frontend
This project uses Alpine.js for lightweight frontend interactions.

## License
MIT License

