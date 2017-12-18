# PHP & MYSQL Login Portal
This is a simple login portal written in PHP and is driven by a MYSQL database. This project includes sessions and a simple HTML form to make it easier to implement and use. 

## Pages
So far this login form works with 5 pages. Starting with the database connection, the HTML form, the login / signup form and finally the profile page.

### Database Connection
The database connection is commonly used on each page that a database connection is used, but I have implemented the code on a separate document so that all is needed is an include page statement to connect to the database. After changing the servername, username, password and database name for your project, you won't need to change it or open it further.

### Index
The index page used for the entry point into the login portal. It has a signup form, login form and a remember password checkbox.
This page will then direct your information to either login or signup page. If there is errors in the information then you will be taken back to the index page, otherwise it will be checked against the database and then you'll be directed to the profile page.

### Login / Signup
The signup form will take the information and insert it into the database after validating it. Currently after this the program will only tell you if it was successful. I will eventually redirect the user to the profile page again. 
The Login page will check the details you entered against the ones in the database. If they are valid you'll be directed to the profile page, otherwise back to the index page.

### Profile
The profile page currently only displays a hello message, showing that the program stored the session data and validated the data.
