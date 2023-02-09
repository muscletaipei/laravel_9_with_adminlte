## Laravel 9 with Adminlte 3.2:

## Feature
1.分前台(blade,alpine.js)、後台(vue.js,jetstream inertia)頁面。  
2.前台會員功能：登入、註冊、忘記密碼、修改個人資料及密碼。  
3.後台會員管理、角色管理、類別管理、標籤管理、文章管理。  
4.前台會員可以發文章及在文章下留言。  
5.通知會員文章有新留言。  
6.後台推送系統通知功能。


## Use
[Laravel](https://laravel.com/)  
[Blade](https://laravel.com/docs/8.x/blade)  
[Jetstream](https://jetstream.laravel.com/2.x/introduction.html)  
[Tailwind css](https://tailwindcss.com/)  
[Alpine js](https://alpinejs.dev/)  
[Vue js](https://vuejs.org/)  
[CKEditor 5](https://ckeditor.com/ckeditor-5/)

## 安装 Laravel 9

1. 如果還沒建立 laravel 應用程序，執行以下指令:
    ```shell
   composer create-project laravel/laravel example-app
   ```
2. 如果已建立可以直接執行以下指令:
    ```shell
    laravel new example-app
   ```
3. 修改C:\xampp\apache\conf\extra\httpd-vhosts.conf 加入以下code
   ```sh
   <VirtualHost *:80>
   DocumentRoot "C:/xampp/htdocs/msitest/public"
   ServerName dqa.test
   <Directory "C:/xampp/htdocs/msitest/public">
   Options FollowSymLinks
   AllowOverride All
   Order allow,deny
   Allow from all
   </Directory>
   </VirtualHost>
   ```
4. 修改C:\xampp\apache\conf\httpd.conf 找到下列code,unmark.
  ```sh
  # Virtual hosts
  Include conf/extra/httpd-vhosts.conf
   ```
5. 建立database，設定SQL root密碼
6. 修改phpmyadmin進入模式. C:\xampp\phpMyAdmin\config.inc.php
  ```sh
/* Authentication type and info */ #三種登入認證模式：config、cookie、http
$cfg['Servers'][$i]['auth_type'] = 'cookie';
   ```
7. 修改.env檔如下
  ```sh
$ APP_NAME=Laravel
APP_ENV=local
$ APP_KEY=
APP_DEBUG=true
$ APP_URL=http://dqa.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
$ DB_DATABASE=dqa
$ DB_USERNAME=root
$ DB_PASSWORD=
   ```
8. 修改C:\xampp\htdocs\msitest\config\app.php 為如下:
  ```sh
    'timezone' => 'Asia/Taipei',
    'locale' => 'zh_TW',
   ```

## Jetstream Install
```sh
composer require laravel/jetstream
php artisan jetstream:install livewire
php .\artisan migrate:refresh --seed  
php artisan migrate:reset 
php artisan migrate 
php .\artisan migrate:refresh --seed  
npm install
npm run dev
php .\artisan optimize
重新啟動apache
   ```
```sh

php artisan vendor:publish --tag=jetstream-views
Next, you should customize the SVGs located in the 
resources/views/vendor/jetstream/components/application-logo.blade.php, 
resources/views/vendor/jetstream/components/authentication-card-logo.blade.php, 
and 
resources/views/vendor/jetstream/components/application-mark.blade.php components
   ```

## Install
```sh
$ git clone https://github.com/samchentw/laravel-simple-blog.git
$ cp .env.example .env
$ composer install
$ npm install
$ php artisan migrate
$ php artisan db:seed
```
## Unit Test
```sh
$ php artisan test
```

