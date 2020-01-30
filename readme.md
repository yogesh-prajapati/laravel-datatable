After clone execute some commands
    
    
    // For resolve dependency
        
        
    $ composer install

    // Copy env file and add some configuration
        $ cp .env.example .env 

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=techflitter //db name
        DB_USERNAME=root // db user
        DB_PASSWORD=root // db password

    // Generate key
        $ php artisan key:generate

    //  Migrate database and seeder for  

        $ php artisan migrate --seed

    // Start 
        $ php artisan serve

click on register and register new user and login.




