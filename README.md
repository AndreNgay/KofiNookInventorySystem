XAMPP
1. apache, mysql

Database Setup
1. php artisan migrate
2. php artisan db:seed

Start app
1. php artisan serve

Test Email
1. register & login for mailtrap.io
2. home->start testing->integrations
3. choose laravel 9+
4. configure .env file by setting the values provided (ex: MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=601047876d64bc
MAIL_PASSWORD=********9df8)

DKNC-IS
Running and Testing the Website

Prerequisites
- XAMPP with Apache and MySQL installed.
- Composer installed.

XAMPP Setup
1. Install XAMPP and ensure Apache and MySQL are running.

Database Setup
1. Open a terminal and navigate to the project directory.
2. Run database migrations: php artisan migrate
3. Seed the database: php artisan db:seed

Start the Application
1. Run the following command to start the Laravel development server: php artisan serve

Test Email Functionality using Mailtrap
1. Register and log in to Mailtrap.
2. In Mailtrap, go to Home -> Start testing -> Integrations.
3. Choose Laravel 9+ from the available options.
4. Configure your .env file using the provided values. For example:
    MAIL_MAILER=smtp
    MAIL_HOST=sandbox.smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=YOUR_MAILTRAP_USERNAME
    MAIL_PASSWORD=YOUR_MAILTRAP_PASSWORD

