# Home Decoration and Design

Furniture e-commerce is an online business that offers furniture and household products online. The concept allows customers to purchase furniture from online stores and access a wider range of product choices, price comparisons, and shopping convenience from home. The furniture e-commerce typically has an extensive product catalog, which includes various types of furniture such as sofas, tables, chairs, cabinets, beds, and other accessories. The e-commerce website usually provides detailed product descriptions, photos, and pricing information, as well as offering various payment methods and product delivery options to customers., and the purpose of creating this system is for learning purposes on Laravel version 10. This application was created using Laravel v10 and requires a minimum of PHP v8.1, so if during the installation or usage process there are errors or bugs, it is possible that it is due to an unsupported PHP version.

## Tech Stack

-   **Client :** Tailwind CSS, Blade Template
-   **Server :** PHP with Laravel  
-   **Database :** MySQL  
-   **Tools :** PHPStorm, DataGrip


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



![Ekran görüntüsü 2025-01-02 215555](https://github.com/user-attachments/assets/50648c20-d11a-44ef-b267-c3f66087868f)
![Ekran görüntüsü 2025-01-02 215618](https://github.com/user-attachments/assets/d006024c-4822-4e2d-87fe-88112069399d)
![Ekran görüntüsü 2025-01-02 215635](https://github.com/user-attachments/assets/7ef24bc2-f9e1-4b03-bf30-47fa7212a89c)
![Ekran görüntüsü 2025-01-02 215651](https://github.com/user-attachments/assets/1d440738-7e30-4ef0-8b39-0a28ec072eaf)
![Ekran görüntüsü 2025-01-02 215707](https://github.com/user-attachments/assets/5efe9ebb-40d3-44b2-89da-850e12abd22e)
![Ekran görüntüsü 2025-01-02 215722](https://github.com/user-attachments/assets/3a945360-1b56-4962-a271-8ef71298ab74)
![Ekran görüntüsü 2025-01-02 215741](https://github.com/user-attachments/assets/e3407d6e-9cac-4837-9919-9b46624d50fc)
![Ekran görüntüsü 2025-01-02 215759](https://github.com/user-attachments/assets/b872997e-4be3-4312-b45e-232d330237e3)
![Ekran görüntüsü 2025-01-02 215838](https://github.com/user-attachments/assets/4af64a0b-fa7c-4020-a965-970e0803ffbf)
![Ekran görüntüsü 2025-01-02 215852](https://github.com/user-attachments/assets/2e900ac5-99a8-447e-ac59-0e487bd462d9)
![Ekran görüntüsü 2025-01-02 215904](https://github.com/user-attachments/assets/8cb93fb7-4549-4f1e-8ce6-eab28082f588)







