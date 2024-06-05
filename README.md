## Inventory Management System for Aanganwadi Centers of Aravalli Districts

Anganwadis are India's primary tool against the menace of child 
malnourishment, infant mortality, and lack of child education, community 
health problems and in curbing preventable diseases. The project aims at 
developing an online software for maintaining an inventory system for the 
Aanganwadi Centers of Aravalli Districts. An Aanganwadi maintains an 
inventory of many items used in their day to day chores. The main objective of 
this software is to improve the existing manual system. This software allows 
the district admin to view stock levels of each aanganwadis under them. Each 
Aanganwadi center is required to input daily consumption data of items, 
accompanied by necessary supporting evidence. It allows the system to 
automatically sends alerts when a particular item falls below the minimum 
threshold value. This online inventory management system for Aanganwadi 
Centres could greatly enhance the centers' operations and overall outcomes.

## Steps to run project

- Create a database locally named `homestead` utf8_general_ci 
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git provider.
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`
