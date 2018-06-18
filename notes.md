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

`composer dump-autoload` Regenerate autoload files (Doing this after `php artisan make:model Task -m` throws and error `Failed to open stream: No such file or directory`)

`php artisan make:model [Name] -m` Build a migration AND a model for an object


Adding content to db via `php artisan tinker`
`$task = new App\Task;`
`$task->body = 'Go to the market';`
`$task->save();`

`App\Task::first()->completed;`

`App\Task::where('completed', 1)->get();`
