## About Aplication (backend)

It is a backend application made with Laravel (PHP), GraphQL and mySQL for a memo card game
The architecture of the application looks like this
![architecture](https://raw.githubusercontent.com/thiagoliof/laravel-graphql-mysql/main/architecture.png)

to running the backend:
```
git clone git@github.com:thiagoliof/laravel-graphql-mysql.git
cd laravel-graphql-mysql
```
and 
```
docker-compose build app
docker-compose up -d
docker-compose exec app php artisan migrate:refresh
docker-compose exec app php artisan db:seed - class=CardSeeder
docker-compose exec app php artisan db:seed - class=GameSeeder
```


![graphql](https://raw.githubusercontent.com/thiagoliof/laravel-graphql-mysql/main/graphql-pg.png)
To access the Graphql playground you can go to 

```
http://127.0.0.1:8000/graphql-playground
```


