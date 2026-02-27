# Academy Learning Management System (LMS)

## Overview
This is a comprehensive Learning Management System built with the Laravel framework. It features robust capabilities for course management, payment gateways, student learning, and instructor dashboards.

## Architecture and Directory Structure

The application follows the standard Laravel MVC (Model-View-Controller) architecture. Below is an overview of the key directories and their purpose within the project:

*   **`app/`**: Contains the core application code.
    *   **`Http/Controllers/`**: Houses the logic for handling incoming HTTPS requests. Key controllers include `CourseController`, `PaymentController`, `InstallController`, and various controllers separated by role (`Admin`, `Instructor`, `frontend`).
    *   **`Http/Middleware/`**: Contains middleware for filtering requests (e.g., authentication checks, role verification).
    *   **`Models/`**: Eloquent ORM models representing database tables (e.g., `User`, `Course`, `Lesson`, `Category`, `CartItem`, `Payment_gateway`).
*   **`config/`**: Contains all of the configuration files for the application (database, mail, services, authentication).
*   **`database/`**: 
    *   **`migrations/`**: Version control for the database schema.
    *   **`seeders/`**: Classes used to populate the database with test or default data.
*   **`public/`**: The document root for the application. Contains the `index.php` entry point, compiled assets (CSS, JS, images), and the base `install.sql` file used for the initial database structure.
*   **`resources/`**: 
    *   **`views/`**: Contains the Blade view templates for the frontend, admin panel, and instructor dashboards.
*   **`routes/`**: Contains all the route definitions for the application, split into semantic files:
    *   `web.php`: Standard web routes.
    *   `admin.php`: Routes specific to the admin panel.
    *   `instructor.php`: Routes specific to instructor functionalities.
    *   `student.php`: Routes specific to student dashboards.
    *   `guest.php`: Routes for unauthenticated users.
    *   `api.php`: API endpoints.
*   **`storage/`**: Contains compiled Blade templates, file-based sessions, file caches, and application logs.
*   **`docker/`** & **`docker-compose.yml`**: Configuration files for running the application within isolated Docker containers (Nginx, PHP-FPM, MySQL, Redis, phpMyAdmin).

## Key Features

*   **Role-Based Access Control**: Supports Admin, Instructor, and Student roles with distinct dashboards and permissions.
*   **Course Management**: Create, edit, and organize courses with sections and various lesson types (video, document, iframe, quizzes).
*   **Payment Integration**: Integrated with multiple payment gateways including Stripe, PayPal, Razorpay, Paystack, Flutterwave, and offline payments.
*   **Configurable Frontend**: Dynamic homepage and theme settings managed via the database and Blade components.

## Local Installation & Deployment (Docker)

This project is configured to run easily using Docker and Docker Compose.

1.  **Clone the repository:**
    ```bash
    git clone git@github.com:akhilsabuv/LMS.git
    cd Academy-LMS
    ```

2.  **Start the services:**
    ```bash
    docker-compose up -d --build
    ```

3.  **Install PHP Dependencies:**
    ```bash
    docker-compose exec app composer install
    ```

4.  **Database Setup:**
    The application structure is primarily initialized using a base SQL dump file rather than just migrations.
    ```bash
    docker-compose exec -T db mysql -u root -p[your_root_password] [database_name] < public/assets/install.sql
    docker-compose exec app php artisan migrate
    docker-compose exec app php artisan config:clear
    ```

## Default Access Credentials

After successful installation and database setup, you can access the application using the default administrator credentials:

*   **URL**: `http://localhost:8000/login`
*   **Email**: `admin@stockfordedu.com`
*   **Password**: `12345678`

To access the database interface (phpMyAdmin):
*   **URL**: `http://localhost:8080`
