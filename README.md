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

## Routes

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Project Information

Course: IT0049 - Web System Technologies  
Activity: Technical Formative Assessment 1  
Framework: CodeIgniter 4