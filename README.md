# Home Decoration and Design

Furniture e-commerce is an online business that offers furniture and household products online. The concept allows customers to purchase furniture from online stores and access a wider range of product choices, price comparisons, and shopping convenience from home. The furniture e-commerce typically has an extensive product catalog, which includes various types of furniture such as sofas, tables, chairs, cabinets, beds, and other accessories. The e-commerce website usually provides detailed product descriptions, photos, and pricing information, as well as offering various payment methods and product delivery options to customers., and the purpose of creating this system is for learning purposes on Laravel version 10. This application was created using Laravel v10 and requires a minimum of PHP v8.1, so if during the installation or usage process there are errors or bugs, it is possible that it is due to an unsupported PHP version.

## Tech Stack

-   **Client :** Tailwind, Blade Template
-   **Server :** PHP with Laravel

## Run Locally

Clone the project


```bash
  cd luxspace
```

Run the command

```bash
  composer update
```

Or

```bash
  composer install
```

Copy the .env file from .env.example.

```bash
  cp .env.example .env
```

Please don't forget to create the 'luxspace' database in phpMyAdmin.

Configure the .env file

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=luxspace
  DB_USERNAME=root
  DB_PASSWORD=
```
Generate key

```bash
  php artisan key:generate
```

Create symlink
```bash
  php artisan storage:link
```
Migrate database

```bash
  php artisan migrate
```
Run User Seeder

```bash
  php artisan db:seed --class=UserSeeder
```

Install node_modules

```bash
  npm i
```

Run npm run dev

```bash
  npm run dev
  ```

Run serve

```bash
  php artisan serve
```



## Features
-   Rewards 
-   Product Management
-   Transaction Management
-   Login
-   Register
-   Checkout Product
-   Showcase
-   Catalog
-   Delivery
