# Larablog  
  
__Описание:__ образец блога с элементарной crud системой  

[Ресурсные контроллеры](https://laravel.su/docs/8.x/controllers#resource-controllers)  
[Мягкое удаление](https://laravel.su/docs/8.x/eloquent#deleting-models)  

## Коммиты  
1. Модель, миграция, фабрика, сид  
```sh
php artisan make:model Post -mf // создается Post модель, миграция, фабрика
```
```sh
php artisan migrate // запуск миграции
```
```sh
php artisan db:seed // запуск сида 
```  

2. Read  
```sh
php artisan make:controller PostController
``` 

3. Create
```sh
php artisan make:request StoreRequest
```
