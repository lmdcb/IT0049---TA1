# IT0049 - Point-of-Sale System

A basic Point-of-Sale (POS) web application developed using CodeIgniter 4 for IT0049 - Web System Technologies.

## Features

The application contains four pages:

- Home
- About
- Customer Accounts
- User Accounts

The Customer Accounts page displays:
- Full Name
- Email
- Phone Number

The User Accounts page displays:
- Username
- Full Name
- Role

Customer and user records are currently stored using static PHP arrays as temporary data sources.

## Technologies Used

- CodeIgniter 4
- PHP
- HTML
- CSS
- Composer

## Setup Instructions

1. Clone or download this repository.
2. Open a terminal inside the project folder.
3. Install the required dependencies:

   composer install

4. Copy the `env` file and rename the copy to `.env`.
5. Configure the base URL in `.env`:

   app.baseURL = 'http://localhost:8080/'

6. Start the CodeIgniter development server:

   php spark serve

7. Open the application in your browser:

   http://localhost:8080
   
## Database Setup

This version of the application uses a MySQL database instead of static PHP arrays.

### Database Name

`pos_system`

### Tables

The database contains the following tables:

- `customers`
- `users`

### Importing the Database

1. Start Apache and MySQL using XAMPP.
2. Open phpMyAdmin.
3. Create a database named `pos_system`.
4. Select the `pos_system` database.
5. Open the Import tab.
6. Import the database file located at:

   `database/pos_system.sql`

7. Configure the database connection in the `.env` file:

   database.default.hostname = localhost  
   database.default.database = pos_system  
   database.default.username = root  
   database.default.password =  
   database.default.DBDriver = MySQLi  
   database.default.port = 3306

## Database Models

The application uses CodeIgniter Models to retrieve records from the database:

- `CustomerModel` - retrieves records from the `customers` table
- `UserModel` - retrieves records from the `users` table

Records are retrieved using CodeIgniter's `findAll()` method rather than raw SQL.

## Routes

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Project Information

Course: IT0049 - Web System Technologies  
Activity: Technical Formative Assessment 1  
Framework: CodeIgniter 4