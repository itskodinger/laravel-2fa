# THE BEGINNING

 Every __#1ST__ step is hard, but we're moving!
 
 -----
 
 Let's recap what's happen here! 
 
 - [x] We Initiate the Laravel project!
 
 ```
 laravel new laravel-2fa
 ```
 
 
 - [x] Setup our database connection!
 
 ```
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
 ```
 
 
 - [x] Migrate base `users` and `password_resets` migrations!
 
 ```
 php artisan migrate
 ```
 
 
 - [x] Add additional fields on `users` table!
 
 
 ```bash
 php artisan make:migration add_2fa_activated_and_2fa_provider_column_into_users_table --table=users
 ```
 
 
 & adding this fields below.
 
 ```php
 /*
 * Run the migrations.
 *
 * @return void
 */
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->boolean('2fa_activated')->default(false)->after('password');
        $table->string('2fa_provider')->nullable()->after('password');
    });
}
/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('2fa_activated');
        $table->dropColumn('2fa_provider');
    });
}
 ```
 
 ------
 
 Alright! From here, we now able to move on onto step __#2__!
