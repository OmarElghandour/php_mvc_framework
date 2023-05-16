# PHP MVC Framework with Migration and Routing Support
This is a lightweight PHP framework designed to help you build web applications following the Model-View-Controller (MVC) architectural pattern. It provides essential features such as support for database migrations and routing to help you create scalable and maintainable applications.

#Features
MVC Structure: The framework enforces the separation of concerns by organizing your code into Models, Views, and Controllers.
Database Migration: Simplifies the process of managing database changes and version control by providing a migration system.
Routing Support: Easily define and manage application routes to handle incoming requests.
Requirements
To use this framework, you need to have the following installed on your system:

PHP 7.2 or above
MySQL or another compatible database server
Composer (for dependency management)
Installation
Follow these steps to install and set up the framework:

Clone the repository or download the ZIP archive.
Navigate to the project directory.
Run composer install to install the required dependencies.
Configure your web server to point to the public directory as the document root.
Configuration
Configuration files can be found in the config directory. Update the following files to suit your application:

config/database.php: Set your database connection details.
config/routes.php: Define your application routes.
Database Migrations
This framework includes a migration system to manage database changes. Migrations allow you to version control your database schema and easily apply changes across different environments. To create and run migrations, follow these steps:

Create a new migration by running the command php migrations/migrate.php create MigrationName. This will generate a new migration file in the migrations directory.
Open the generated migration file and define the necessary schema changes using the provided methods.
Run the command php migrations/migrate.php to execute pending migrations and update your database.
Routing
To define application routes, open the config/routes.php file. The framework uses a simple syntax to associate routes with their corresponding controllers and methods. Here's an example:

php
Copy code
use Framework\Router;

Router::get('/', 'HomeController@index');
Router::post('/users', 'UserController@create');
Router::get('/users/{id}', 'UserController@show');
In this example, the get method defines a route that maps to the index method of the HomeController class. The post method maps to the create method of the UserController class, and the get method with a parameter captures the id value and maps to the show method of the UserController class.

Contributing
Contributions to this framework are welcome! If you find a bug or have suggestions for improvements, please open an issue or submit a pull request.

License
This PHP framework is open-source and released under the MIT License. Feel free to use, modify, and distribute it as per the terms of the license.

Acknowledgments
This framework was inspired by various PHP frameworks and libraries that promote the MVC pattern and provide migration and routing capabilities.

Contact
For any inquiries or support requests, please contact omar.s.elghandour@gmail.com.




