# EBookstore
This is a user-friendly web application designed to facilitate the buying and selling of second-hand textbooks among students at the college. The application allows students to register, login, view available textbooks, send messages to inquire about book availability, make purchases, manage their shopping cart, and enter delivery details. College librarians, acting as sellers, can verify student details, upload book information, remove sold books from the database, communicate with users, and ensure the delivery of books.

Prerequisites
XAMPP: Install XAMPP, which includes PHP and MySQL, for running the web application locally. You can download XAMPP from the official website: https://www.apachefriends.org/

Installation
Clone the repository: git clone[ https://github.com/your-username/e-bookstore.git](https://github.com/Koketso1992/EBookstore.git)
Move the project folder to the appropriate directory in the XAMPP installation folder. For example, move it to C:\xampp\htdocs on Windows.
Start the Apache and MySQL modules in XAMPP.
Open phpMyAdmin by visiting http://localhost/phpmyadmin in your web browser.
Create a new database named bookstore in phpMyAdmin.
Import the SQL file database.sql located in the project's root directory into the bookstore database. This will set up the necessary tables.
Configure the database connection settings in the config.php file located in the server directory.

Usage
Open your web browser and visit http://localhost/bookstore to access the application.

User Registration
Open the application in your web browser.
Click on the "Register" link.
Fill in the required registration information, including name, student number, username, and password.
Confirm the password by entering it again.
Click on the "Register" button to complete the registration process.

User Login
Open the application in your web browser.
Click on the "Login" link.
Enter your username and password.
Click on the "Login" button to log into the application.


User Functionality (Buyer)
View Used Textbooks: After logging in, buyers can browse and view the available used textbooks on the application.
Send Inquiry: Buyers can send messages to sellers inquiring about the availability of a specific book.
Purchase a Used Textbook: Buyers can select and purchase a used textbook from the available options.
Manage Shopping Cart: Buyers can view their shopping cart, add or remove items, and proceed to checkout.
Enter Delivery Details: Buyers can enter their delivery information during the checkout process.


Librarian User (Seller) Functionality
Verify Seller's Student Status: Librarians verify the student status of sellers before enabling them to sell/upload textbooks. This information is retrieved from the MySQL database.
Upload Book Information: Librarians can upload details of used books that students want to sell. The book information is stored in the database and made available for buyers to view.
Remove Sold Books: Librarians can remove books from the database once they have been sold.
Communication: Librarians can communicate with all users regarding books that are being sold, facilitate communication between buyers and sellers, and ensure proper book delivery.

Technologies Used
Front-end: HTML, CSS
Back-end: PHP
Database: MySQL

Contributing
Contributions to the Second-Hand E-Bookstore application are welcome! If you find any issues or have suggestions for improvements, please open an issue on the GitHub repository. If you would like to contribute code, please follow the standard GitHub workflow for pull requests.

Acknowledgements
The Second-Hand E-Bookstore application was developed by Koketso Motsikwe.

