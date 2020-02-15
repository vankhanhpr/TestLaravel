<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

----------------------------------------------------------
Document 
-- Hướng dẫn chạy 

Cài đặt các môi trường: xamp,php, mysql

Clone project : @git clone https://github.com/vankhanhpr/TestLaravel.git -- in your forder (C:\xampp\htdocs)--thư mực được tạo khi cài xamp.
Tạo database trên mysql : dbname :Test table:users (userid (key), username, password).

lệnh:
create database test;
use test;
create table users (
    userid int not null promary key autoincrement,
    username nvarchar(1000) not null,
    password nvarchar(1000) not null 
 );
 
 --end 
 Cấu hình file .env nếu có sự thay đổi -- file connect database.
 
 --Run project
 Open terminal;
    composer install; lệnh instal library like npm install
    php artisan serve -- to run project
 --end
suport : https://github.com/vankhanhpr 
email: khanhnv@hcmute.edu.vn
face: facebook.com/atun.1865
