## Laravel Easy Build
>Just clone and start
## Start
```
composer install
npm install
cp .env.example .env
php artisan key:generate
```
## Create model easy
Use artisan command to use Repository Pattern

``php artisan make:entity Example``

This command will create 
 - entities/Example.php
 - repositories/ExampleRepository.php
 - database/migrations/yyyy_mm_dd_id_create_examples_tables.php

## Test with sqlite

````
  class ExampleTest extends TestCase
  {
      use DatabaseMigrations;
  
      public function testSqlLite()
      {
          /**
           * will create fake data to sqllite
           */
          factory(User::class, 10)->create();
          ...
          ...
      }
  }
````

## License
MIT