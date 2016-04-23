#Routes Folder for Laravel 5.2

###Why should I use this package?
If you're tired to use one file to organize your routes, here is the solution.
You can have many files inside your Routes folder.
This package will load these files automatically and print all of your routes

### How to install?
Add to your composer.json
```
composer require lucasruroken/routesfolder ~0.1.2
```
Add the following provider to your config/app.php
```
LucasRuroken\RoutesFolder\RoutesFolderProvider::class
```
###How to use?
You need to create a Routes directory in your app folder.
Then you can create all the files you want to organize your routes.

Example:

app/Routes/UserRoute.php
```
<?php

namespace App\Routes;

use LucasRuroken\RoutesFolder\RoutesFolderInterface;

class UserRoute implements RoutesFolderInterface{

    static function load(){

        \Route::get('/user', function(){

            echo "User section";
        });
    }
}
```

Don't forget to match the file name with the Class name.
The class needs to implements RoutesFolderInterface

That's all