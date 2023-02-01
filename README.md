# Delivery Service site

## Description
This program uses MySQL database calls and ajax to bring information to the user in the form of easily understandable and readable tables.

## Features
* Dynamic server-side client addresses table
* Client deliveries overview
* List of clients who have had deliveries of different categories to the same address
* All latest deliveries
* Inactive client overview

## Requirements
* PHP version: 8.0
* MySQL version: 8.0.31
* Laravel 9

## Installation
1. Clone this repository
2. Run <code>$ composer install</code>
3. Rename ".env.example" to ".env" and enter the correct database information
4. Run <code>$ php artisan migrate </code>
5. You can run the development website <code>$ php artisan serve</code>

## Demo

### Client addressses and deliveries
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/clients.gif)

### Clients with deliveries of different categories to the same address
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/types.png)

### Latest deliveries
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/last.gif)

### Inactive clients
![](https://github.com/ricardsupenieks/Delivery-Service-site/blob/main/demo/inactive.png)
