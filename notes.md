`php artisan`

`php artisan help [argument]`

`php artisan make:migration [?create_users_table?]` (No brackets)

`php artisan make:migration [?create_users_table?] --create=tasks` Creates schema for this table

To migrate DB `php artisan migrate`, if you make a mistake `php artisan migrate:refresh`

`mysql -uroot -p`
create mysql account with username of root and no password

`create database [???];`

`use [???];`

`show tables;`



`php artisan tinker`
basically an "eloquent" playground

`App\Class::get();` Get everything

`App\Task::where('id', '>', 2)->get();` Define what you want to get from the DB

`App\Task::pluck('[ROW]');` Retrieves only one bit of data

`App\Task::pluck('body')->first();`

`App\Task::find(1);`

`App\Task::first();`

`$variable = App\Task::first();`

`$variable->method();`
