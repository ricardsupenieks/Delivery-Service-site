# Delivery Service site

## Description
This program uses MySQL database calls and ajax to bring information to the user in the form of easily understandable and readable tables.

## Features
* Dynamic server-side client addresses table
* Client deliveries overview
* All latest deliveries
* Inactive client overview

## Requirements
* PHP version: 8.0
* MySQL version: 8.0.31
* Laravel 9

## Installation
1. Clone this repository
2. Run composer install in terminal
3. Rename ".env.example" to ".env" and enter the correct database information
4. Import the "schema.sql"
5. Run php artisan migrate in terminal
6. You can run the development website by typing the following command in terminal: php artisan serve

## Demo

### Client addressses and deliveries
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/clients.gif)

### Clients with deliveries of different categories to the same address
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/types.png)

### Latest deliveries
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/last.gif)

### Inactive clients
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/inactive.png)
