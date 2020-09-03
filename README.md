## Switcher Language Laravel Example

This is an example of switcher languages in laravel

How to install:

```cmd
composer install
```

Then configurate the env
set into your host and database
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=larastart
DB_USERNAME=root
DB_PASSWORD=
```

After that you can migrate all of the table from migration to your databse with following code
```cmd
php artisan migrate
```

if you are using laravel in not htdocs folder from xampp or something like that. you can run with your own laravel host with following code
```cmd
php artisan serve
```

and run the [http://localhost:8000](http://localhost:8000) to run the app

you can customize this following file for customize the language or anything that you wanna do
```
app
│
├── Http
│   ├── Controllers
│   │   ├── MyControllers.php       # [Controller]
├── Item.php                        # [Model]
├── Language.php                    # [Model]
├── User.php                        # [Model]
├── Word.php                        # [Model]
database
├── migrations
│   ├── 2020_09_02_083208_create_languages_table.php
│   ├── 2020_09_02_083243_create_items_table.php
│   ├── 2020_09_02_085308_create_words_table.php
resources
├── views
│   ├── addword.blade.php
│   ├── welcome.blade.php
routes
├── web.php
.env

```