# ABC Restaurant Management System

### Table of Contents
- [Project Overview](#project-overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Database Schema](#database-schema)
- [System Architecture](#system-architecture)
- [Installation](#installation)
- [Usage](#usage)
- [Contributors](#contributors)
- [Future Enhancements](#future-enhancements)
- [License](#license)

## Project Overview

The **ABC Restaurant Management System** is a web-based application designed to streamline operations for a chain of restaurants. It allows **customers** to make online reservations, submit queries, and search for services. **Restaurant staff** can manage reservations and respond to customer queries, while **administrators** can handle system management tasks, including generating reports and overseeing user activities.

This system ensures that ABC Restaurant offers a user-friendly platform with clear business flow and differential access rights for customers, staff, and admins.

## Features

- **Online Reservations**: Customers can book tables or services online.
- **Query Submission**: Customers can ask questions about services or reservations.
- **Reservation Management**: Restaurant staff can view and confirm reservations.
- **User Management**: Admins manage users, including adding or removing staff members.
- **Reporting**: Generate business reports for better management insights.
- **Search Functionality**: Search hospitality services and availability.
- **Differential Access**: Different levels of access for Admins, Staff, and Customers.

## Technologies Used

- **Backend**: Java, JSP, Servlets, JDBC
- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Database**: MySQL
- **Version Control**: Git, GitHub
- **Tools**: Apache Tomcat, Maven

## Database Schema

The database includes tables for users, reservations, queries, and services. Relationships between the tables maintain data integrity, ensuring smooth interaction between the system's different components.

Key Tables:
- **Users**: Admins, restaurant staff, and customers.
- **Reservations**: Tracks bookings and their statuses.
- **Services**: Lists available services with categories.
- **Queries**: Stores customer questions and responses from staff.

## System Architecture

The system follows the **Model-View-Controller (MVC)** architecture:
- **Model**: Manages the database and business logic (JDBC, SQL).
- **View**: Frontend web interface (HTML, CSS, JavaScript).
- **Controller**: Handles requests and sends data between the view and model (Servlets, JSP).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
