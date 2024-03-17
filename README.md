# Contact Management System

A simple web application for managing contacts.

## Introduction

The Contact Management System is a web application built using Laravel framework. It allows users to perform CRUD (Create, Read, Update, Delete) operations on contacts.

## Features

- Add new contacts with name, email, phone, and address.
- Edit existing contacts.
- Delete contacts.
- View list of contacts.

## Installation

1. Clone the repository:

2. Navigate to the project directory:

3. Install dependencies:

4. Copy the .env.example file to .env:

5. Generate application key:

6. Create a new database and update the .env file with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

7. Run database migrations:

8. Start the development server:


9. Visit `http://localhost:8000` in your web browser to access the application.

## Usage

- Click on "Add Contact" to create a new contact.
- Click on "Edit" next to a contact to update its details.
- Click on "Delete" to remove a contact from the list.

## AJAX Integration

The frontend of this application uses AJAX to dynamically update the contact list without page reloads. 
The `fetchContacts()` function in the JavaScript code fetches contact data from the backend API endpoint `/contacts` and updates the HTML table with the received data.

## RESTful APIs Integration

This application follows RESTful principles for managing contacts. The backend API provides endpoints for CRUD operations on contacts:

- GET /contacts: Retrieve all contacts
- GET /contacts/{id}: Retrieve a specific contact
- POST /contacts: Create a new contact
- PUT /contacts/{id}: Update an existing contact
- DELETE /contacts/{id}: Delete a contact

## Contributing

Contributions are welcome! Please feel free to submit bug reports, feature requests, or pull requests.




