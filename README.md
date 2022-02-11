

Requirements
------------

- PHP 7.2.5+
- [Composer](https://getcomposer.org/download)
- [Symfony CLI](https://symfony.com/download)

Getting started
---------------

**Installing dependencies**

```
$ composer install
```

**Changing parameters on .env file**

```
DATABASE_URL="mysql://root:YOURPASSWORD@127.0.0.1:3306/shop"
```

**Install the database**

```
$  php bin/console doctrine:database:create
```


**Update the database**

```
$  php bin/console doctrine:schema:update --force
```

**Loading fake Products**

```
$ symfony console doctrine:fixtures:load
```

**Launching the Local Web Server**

```
$ symfony server:start -d
```

