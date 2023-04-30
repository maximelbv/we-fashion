
# We Fashion
A study project to implement the notions learned in PHP, SQL and Laravel at [L'Ecole Multimedia](https://www.ecole-multimedia.com/)

-> [Project's brief](public/brief.pdf) <br>
-> [Database Model](https://prettyfdbdiagram.io/d/6447ec9f6b319470512ca8df)

## Installation

- Clone this repo

- Install the dependencies
```
npm install
composer install
```



### Database configuration
- Create an empty database named 'we-fashion' (you can name it differently if you register it in the DB_DATABASE variable in the .env file)

- Verify that the database username & passwords of the .env file match yours

- Migrate models on the database & seed them :

```
php artisan migrate:fresh --seed
```


### Project Launch

- Launch the server
```
php artisan serve
```

- Launch vite
```
npm run dev
```

## Access to the admin dashboard

The admin dashboard is aviable via /admin (example: http://127.0.0.1:8000/admin) <br><br>

Username : Edouard@wefashion.com <br>
Password: password
