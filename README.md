# Web4Hub - Event Management System
**Current version: 1.0 running on Laravel 7!**

Web4Hub is an easy Event Management Solution to Manage different organizer profile that you have created for different types of events. This repository contains the source code of the Web4Hub website.

Site url : https://web4hub.ml/

## Table of Contents

- [Website Features](#features)

## What is Web4Hub?

Considering the existing system problems related to event management we are developing a website for event management. This application will be accessible to anyone through their browsers. Website will mainly focus on virtual events, hackathons and social events. The website will be developed using Laravel – an PHP web framework. Website will have easy and feasible GUI for all type of users. 

User needs to Login at the initial phase, set his/her profile. The core phase of the website will display list of events based on the user profile details. This event will further contain description about event, its exact location, ticket rates (if any), date and time. These details will be firstly verified by the administrator to fulfill the security protocols. 

This web application focuses to make it easier for a layman to plan an event in a hassle-free manner. This website will assist him/her in planning a successful and fun event.

![Home Page](https://web4hub.ml/assets/img/git/home.gif "")

## Features

- Easily manage all your events on your [Dashboard](https://web4hub.ml/events) Page

## Server Features

To be able to launch Web4Hub, you must meet the following requirements:

- PHP >= 7.4.8
- Node.js > 6.14.5
- Laravel >= 7

## Installation

1. Clone the repository
```
git clone https://github.com/Heisenberg3562/Laravel-Web4Hub.git
```
2. Switch to the working directory
```
cd Laravel-Web4Hub/
```
3. Install the composer dependencies
```
composer install
```
4. Copy `.env.example` for `.env` and modify according to your environment
```
cp .env.example .env
```
5. Generate and set an application key with the command
```
php artisan key:generate
```
6. Run these commands to create the tables in the defined database
```
php artisan migrate
```

## Launch

To start the PHP built-in server
```
php artisan serve
```

## Bugs and Feedback

For bugs, questions and discussions, please use the GitHub [Issues](https://github.com/Heisenberg3562/Laravel-Web4Hub/issues) .

## License

This site is an open source project under the [MIT license](LICENSE) .
