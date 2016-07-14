#Routes Folder for Laravel 5.2

###Why should I use this package?
If you're tired to use one file to organize your routes, here is the solution.
You can have many files inside your Routes folder.
This package will load these files automatically and print all of your routes

### How to install?
Add to your composer.json
```
composer require lucasruroken/routesfolder ~1.0
```
Add the following provider to your config/app.php
```
LucasRuroken\RoutesFolder\RoutesFolderProvider::class
```
###How to use?
You need to create a Routes directory in your app/Http folder.
Then you can create all the files you want to organize your routes.

Example:

app/Http/Routes/UserRoutes.php
```
<?php

namespace App\Http\Routes;

use LucasRuroken\RoutesFolder\RoutesFolderInterface;

class UserRoutes implements RoutesFolderInterface{

    public function routes(){

        \Route::get('/user', function(){

            print('User Route');
        });
    }
}
```

Don't forget to match the file name with the Class name.
The class needs to implements RoutesFolderInterface

That's all