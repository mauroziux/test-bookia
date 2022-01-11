Test for Bookia


## Database
.env (file), change this values for your own connection
``` text
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=bookia
DB_USERNAME=root
DB_PASSWORD=root
```

## Installation
this project was made in laravel 7, check the requirements for this version

``` shell
composer install
php artisan migrate
php artisan db:seed
npm install && npm run dev
```

## Test
``` shell
php artisan test
```

## API
``` text
GET /api/restaurants
GET /api/dining-areas
GET /api/tables
POST /api/tables
```

## note
the columns 'restaurant_id' and 'dining_area_id' from table 'tables' are duplicates in the table 'dining_area_restaurant'
since it does not comply with the first formal database standard or 1NF, it requires normalization 
