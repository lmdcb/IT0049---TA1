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

## TFA3 Features

The application was extended with create and edit functionality for customer and user accounts.

### Customer Accounts

- Add new customer accounts
- Validate required full name and valid email address
- Edit existing customer information
- Preserve entered values when validation fails

### User Accounts

- Add new user accounts
- Validate required and unique usernames
- Edit existing user information
- Upload a profile picture when editing a user
- Accept JPG and PNG images up to 2 MB
- Prepare uploaded avatars for display
- Store only the avatar filename in the database
- Display a placeholder when no avatar is available

### Avatar Storage

Prepared profile pictures are stored in:

`public/uploads/avatars/`

The `users.avatar` database field stores only the image filename.


## TFA4 - Sessions and Authentication

The POS System has been extended with user authentication and session management using CodeIgniter 4.

### Features

- Login using username and password
- Secure password hashing using `password_hash()`
- Password verification using `password_verify()`
- Session creation after successful login
- Authentication Filter for protected pages
- Restricted access to Customer and User Accounts
- Logout functionality that destroys the session
- Redirect unauthenticated users to the Login page

### Authentication Routes

| Route | Description |
|---|---|
| `/login` | User login page |
| `/customers` | Protected customer accounts |
| `/users` | Protected user accounts |
| `/logout` | Logout action (POST) |

### Database Setup

1. Start Apache and MySQL using XAMPP.
2. Open phpMyAdmin.
3. Create a database named `pos_system`.
4. Import `database/pos_system.sql`.
5. Configure the database connection in `.env`.

The `users` table includes a `password` column for storing hashed passwords.

### Creating an Initial User

For security reasons, the GitHub database export does not include existing user account records or password hashes.

To create a login account:

1. Open Command Prompt in the project directory.
2. Run:

   php spark user:create-demo

3. Enter a username, full name, and password when prompted.
4. Use the newly created credentials to log in.

Passwords are hashed using PHP's `password_hash()` function before being stored in MySQL.

### Running the Application

Start the CodeIgniter development server:

    php spark serve

Open:

    http://localhost:8080/login

Log in using the account created during setup.

### Access Control

Customer and User Accounts pages, including their create and edit forms, are protected using a CodeIgniter Authentication Filter.

Unauthenticated visitors are redirected to the Login page.
