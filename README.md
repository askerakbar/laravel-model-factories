<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


Sample Code for my Understanding Laravel seeders and model factories using an e-commerce MVP use case article published on :
https://askerakbar.com/posts/understanding-laravel-seeders-and-model-factories

Laravel Version : 10.42.0  
Composer Version : 2.5.5  

**Once you clone the repo, you can run the following commands to see the seeders and model factories in action:**

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```
    
