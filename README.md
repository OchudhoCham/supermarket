# Supermarket Management System

## Table of Contents
1. [Introduction](#introduction)
2. [Features](#features)
3. [Installation](#installation)
4. [Usage](#usage)
5. [Technologies Used](#technologies-used)
6. [Contributing](#contributing)
7. [Contact](#contact)

## Introduction
This project is a **Supermarket Management System**, developed as my final year graduation project in fulfillment of the requirements for my Bachelor's degree in Computer Science at the University of Juba. The system is designed to automate the operations of a supermarket, including product management, order placement, and payment processing. It features different user roles, such as **Admin**, **Cashier**, and **Customer**, each with its own specific functionality.

## Features
- **Admin:**
  - Manage users (Add, Update, Delete staff/customers)
  - Manage products (Add, Update, Delete products)
  - Process orders and payments
  - View order history and generate receipts
- **Cashier:**
  - Process customer orders
  - Manage products
  - Handle payments and generate receipts
- **Customer:**
  - Create an account
  - Browse available products
  - Place orders and make payments

## Installation

### Prerequisites
- **XAMPP** (includes Apache, PHP, and MySQL)

### Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/supermarket-management-system.git
   ```

2. **Move the project to XAMPP htdocs directory**:
   ```bash
   mv supermarket-management-system /path-to-xampp/htdocs/
   ```

3. **Set up the database**:
   - Open **phpMyAdmin** by navigating to `http://localhost/phpmyadmin`.
   - Create a new database (e.g., `supermarket_db`).
   - Import the SQL file located in the `/database` directory of your project into this database.

4. **Configure environment variables**:
   - Update the database connection details in your configuration file to match your local XAMPP MySQL credentials (usually `root` with no password).

5. **Start the XAMPP server**:
   - Open the XAMPP control panel and start **Apache** and **MySQL**.

6. **Access the project**:
   - Open your browser and navigate to `http://localhost/supermarket-management-system`.

## Usage
- **Admin Panel**: Access the admin panel at `/admin` for managing users, products, orders, and payments.
- **Cashier**: The cashier can log in to process customer payments and manage product data.
- **Customer**: Customers can register, log in, browse products, and place orders.

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript (with Bootstrap)
- **Backend:** PHP
- **Database:** MySQL
- **Web Server:** Apache (via XAMPP)

## Development Methodology
This project follows the **Waterfall Model** of software development. Each phase was completed sequentially, from requirements gathering to testing and deployment.

## Contributing
This project is open for contributions. If you have any suggestions or would like to improve the system, feel free to open an issue or submit a pull request.

## Contact
For any inquiries or further information regarding this project, feel free to contact me:
- **Name:** Ochudho Cham Odiel
- **Email:** ochudho.c@gmail.com
- **Phone:** +211928500595
