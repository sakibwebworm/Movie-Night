A Movie Cms Powered by Laravel and Angular.This project can be a perfect headstart for a video blog,movie review system or anything where your imaginations lead you :).

#Admin Panel

<img src="https://github.com/sakibwebworm/Movie-Night/blob/master/admin_panel.gif" alt="Admin Panel">

#Frontend

<img src="https://github.com/sakibwebworm/Movie-Night/blob/master/front.gif" alt="Admin Panel">

#Quickly add movie details

<img src="https://github.com/sakibwebworm/Movie-Night/blob/master/back.gif" alt="Admin Panel">

#Functionailty
<li>User Roles as admin an user. It is possible to add more roles if needed.</li>
<li>Admin Panel.Admin users are able able to do crud operations.</li>
<li>Easy Form populator for movie upload. Details of movie and poster can be fetched directly to database. There is option to add manually.</li>
<li>Movie api. Users are able to add wishlist through api(experimental).</li>

## Installation
(I didnt delete the vendor.you should run composer update.)
Install Composer

```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```

Create a database and change .env accordingly

Run Migration

```
php artisan migrate
```

Run local server

```
php artisan serve
```

Visit localhost:8000

## Register as an Admin

Type ckpp345s in code texinput area (experimental ,remove the code in User.php if you want to deploy.)

