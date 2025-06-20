# GOQii User Management System

This project is a full-stack user management application built as part of the GOQii Developer Assessment.

---

## Project Overview

- Backend: Core PHP RESTful API performing CRUD operations on users.
- Frontend: React.js app with form to add users and list to display them.
- Database: MySQL database with `users` table storing user details.
- Version Control: Git for source code management hosted on GitHub.

---

## Folder Structure

goqii-user-management/
├── goqii_api/ # Backend PHP API
├── goqii-frontend/ # React frontend app
├── users.sql # MySQL database export file
└── README.md # Project documentation


---

## Setup Instructions

### Backend Setup

1. Install [XAMPP](https://www.apachefriends.org/index.html).
2. Start Apache and MySQL.
3. Copy `goqii_api` folder to `C:/xampp/htdocs/`.
4. Access backend API via `http://localhost/goqii_api/`.

### Database Setup

1. Open `http://localhost/phpmyadmin`.
2. Create a database named `goqii_users`.
3. Import `users.sql` to create the `users` table.

### Frontend Setup

1. Navigate to `goqii-frontend` folder.
2. Run `npm install` to install dependencies.
3. Run `npm start` to start the React development server.
4. Open `http://localhost:3000` in your browser.

---

## Usage

- Add new users via the form.
- View the list of users below the form.
- Edit or delete users using the buttons beside each entry.

---

## Notes

- The backend uses Core PHP with RESTful API principles.
- Frontend communicates with backend using fetch API.
- CORS headers are handled in PHP to allow frontend access.
- The database schema is simple with basic user fields: name, email, password, dob, and created_at.

---

## Author

Parth Upadhyay  
Email: your.email@example.com  
LinkedIn: https://linkedin.com/in/yourprofile  
GitHub: https://github.com/acousticrider

---

Thank you for reviewing my project.
