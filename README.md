
## Prerequisites for Setting up the Project Qbitsdev02

You must have install 
- **PHP 8.0.0 version**

## Clone the Project
**$ git clone https://github.com/ReofDev/skeletor_base.git**

## Install and Configure the dba-back-end Project

- ### Install the package manager for PHP
    *->$ composer install*

- ### Add the file **.env** to the project

- ### To run or tart our migrations we use the command
    *->$ php artisan migrate --seed*
    
- ### We execute the command that will create the necessary encryption keys to generate secure access tokens.
    *->$ php artisan passport:install*
    
    **Note:** we must take the **access_client_id = 2** and copy its **access_client _secret** in the variable **ACCESS CLIENT SECRET** in the file **.env**
    
- ### To run the project

    *->$ php artisan optimize*
    
    *->$ php artisan serve*
    
    
- ### Laravel development server

    **http://127.0.0.1:8000/api/documentation**
