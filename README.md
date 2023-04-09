# The PHP Framework for Web Applications

Decora is an mvc framework, have been created on educational purpose and don't recommended to production usage.

![logo](/src/decora_logo.png)

---

## Installation

```bash
git clone https://github.com/nazares/decora.git
cd decora
```

then you need to create database and specify `.env` file

example `.env.example`

```dotenv
DB_DSN=mysql:host=localhost;port=3306;dbname=decora
DB_USER=root
DB_PASSWORD=secret
```

Inside your root folder of your project run the folloving:

```bash
php migrations.php
```

and install composer dependencies by:

```bash
composer install
```

That's it!
