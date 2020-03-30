Welcome to Prepr Labs: 

Please note the project name is laravel66.

In this application I used the following tools:

* Composer installer to download Laravel
* Created a new Laravel project
* Since I am using mac OS I installed valet so that I can have server instead of having to ask for a serve (php artisan serve)
* Installed mySQL and php using HomeBrew 
* Installed npm
* Installed composer global so that its available on my machine’s $PATH
* Created new Laravel application (Laravel new laravel66)
* The I enabled authentication using (php artisan ui vue –auth) enabling scaffold to set the views and routes of the application
* Created a database inside mySQL
* Then php artisan make : migration to create a table connected to the database 
* Run migration (php artisan migrate)
* Set up the database seeders to fill the database using factory link as a fake model
* Then php artisan make : seeder
* Using migrate : fresh—seed to apply all the migrations and seeds the database
* Then I added the links in the welcome page (register and login)
* Organized the routes inside the web route and creating views linked to it inside the resources some of them are: submit route which is the page for the submit format, home route which is the controller, welcome route which is the main route, and maps route which has the google maps API and how the markers were created and linked to the database file

To get an access to the application (login, register, and submit) need a database on your machine so please set up a database 

This information is included inside my env. File:
this is my database name: laravel6 
username: root
Password: password


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# Laravel66
