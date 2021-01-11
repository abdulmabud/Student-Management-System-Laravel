## Instruction for run this project 

Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )

Open the console and cd your project root directory
Run ```bash composer install``` or ```bash php composer.phar install```
Run ```bash php artisan key:generate```
Run ```bash php artisan migrate```
Run ```bash php artisan db:seed ``` // Some data include with this project. So run this.
Run ```bash php artisan serve ```
