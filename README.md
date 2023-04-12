# The PHP Framework for Web Applications

Decora is a tiny mvc framework, have been created on educational purpose and don't recommended to production usage.

![logo](/src/decora_logo.png)

---

## Installation

Clone repository by executing the command below

```bash
git clone https://github.com/nazares/decora.git
```

then you need to create database and specify `.env` file with your credentials

example `.env.example`

```dotenv
DB_DSN=mysql:host=localhost;port=3306;dbname=decora
DB_USER=root
DB_PASSWORD=secret
```

install composer dependencies by:

```bash
composer install
```

Inside root folder of your project run the following:

```bash
php migrations.php
```

run server by

```bash
php serve
```

or

```bash
php -S 0.0.0.0:8080 -t public
```

Open your browser and check the [](http://localhost:8080)

## Docker installation

Clone repository using git

```bash
git clone https://github.com/nazares/decora.git
```

Specify `.env` file based on environment variables of docker-compose.yml

```dockerfile
environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: decora
      MYSQL_USER: decora
      MYSQL_PASSWORD: decora
```

```env
DB_DSN=mysql:host=db;port=3306;dbname=decora
DB_USER=decora
DB_PASSWORD=decora
```

Inside the root directory run:

```bash
docker-compose up -d
```

Install dependencies

```bash
docker-compose exec app composer install
```

Do migrations

```bash
docker-compose exec app php migrations.php
```

Open your browser and check the [](http://localhost:8080)

That's it!
