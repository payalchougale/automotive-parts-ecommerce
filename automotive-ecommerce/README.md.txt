# Automotive Parts E-commerce Website

## Project Overview
This project is a full stack web application that allows users to browse and purchase automotive parts online. The system includes product browsing, cart functionality, order placement, and an admin dashboard for managing products.

This project was developed as part of the UCT Full Stack Internship Program.

---

## Features

### User Features
- View automotive parts
- Search products
- Filter products by category
- Add items to cart
- Place orders

### Admin Features
- Add products
- Update products
- Delete products
- View customer orders

---

## Product Categories

- Brake Pads
- Tires
- Batteries
- Engine Parts
- Lights
- Tools

---

## Technology Stack

Frontend:
- HTML
- CSS
- JavaScript

Backend:
- PHP

Database:
- MySQL

Development Tools:
- XAMPP
- VS Code

Version Control:
- GitHub

---

## Project Structure
automotive-parts-ecommerce
│
├── frontend
│ ├── index.html
│ ├── admin.html
│ ├── style.css
│ └── script.js
│
├── backend
│ ├── db.php
│ ├── get_products.php
│ ├── add_product.php
│ ├── delete_product.php
│ └── search.php
| ├── add_to_cart.php
│ ├── checkout.php
│ ├── login.php
│ ├── orders.php
│ └── register.php  
| ├── search.php
│ ├── view_orders.php
│
│
├── database
│ └── schema.sql
│
├── report
│ └── project-report.md
│
└── README.md

---

## Database Tables

- users
- products
- cart
- orders
- order_items

---

## How to Run the Project

1. Install XAMPP
2. Start Apache and MySQL
3. Open phpMyAdmin
4. Create database `automotive_store`
5. Import `database/schema.sql`
6. Place project inside `htdocs`
7. Open browser and go to:

http://localhost/automotive-ecommerce/frontend/index.html


## Learnings

During this project I learned:

- Full Stack Web Development
- Database Design
- REST API Development
- GitHub Project Management
- Building an E-commerce System

---

## Author

Name: Payal Nandkumar Chougale
Program: UCT Full Stack Internship