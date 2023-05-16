<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC Framework with Migration and Routing Support</title>
</head>
<body>
    <h1>PHP MVC Framework with Migration and Routing Support</h1>
less
Copy code
<h2>Features</h2>
<ul>
    <li>MVC Structure: The framework enforces the separation of concerns by organizing your code into Models, Views, and Controllers.</li>
    <li>Database Migration: Simplifies the process of managing database changes and version control by providing a migration system.</li>
    <li>Routing Support: Easily define and manage application routes to handle incoming requests.</li>
</ul>

<h2>Requirements</h2>
<p>To use this framework, you need to have the following installed on your system:</p>
<ul>
    <li>PHP 7.2 or above</li>
    <li>MySQL or another compatible database server</li>
    <li>Composer (for dependency management)</li>
</ul>

<h2>Installation</h2>
<ol>
    <li>Clone the repository or download the ZIP archive.</li>
    <li>Navigate to the project directory.</li>
    <li>Run <code>composer install</code> to install the required dependencies.</li>
    <li>Configure your web server to point to the <code>public</code> directory as the document root.</li>
</ol>

<h2>Configuration</h2>
<p>Configuration files can be found in the <code>config</code> directory. Update the following files to suit your application:</p>
<ul>
    <li><code>config/database.php</code>: Set your database connection details.</li>
    <li><code>config/routes.php</code>: Define your application routes.</li>
</ul>

<h2>Database Migrations</h2>
<p>This framework includes a migration system to manage database changes. Migrations allow you to version control your database schema and easily apply changes across different environments. To create and run migrations, follow these steps:</p>
<ol>
    <li>Create a new migration by running the command <code>php migrations/migrate.php create MigrationName</code>. This will generate a new migration file in the <code>migrations</code> directory.</li>
    <li>Open the generated migration file and define the necessary schema changes using the provided methods.</li>
    <li>Run the command <code>php migrations/migrate.php</code> to execute pending migrations and update your database.</li>
</ol>

<h2>Routing</h2>
<p>To define application routes, open the <code>config/routes.php</code> file. The framework uses a simple syntax to associate routes with their corresponding controllers and methods. Here's an example:</p>
<pre><code>use Framework\Router;
Router::get('/', 'HomeController@index');
Router::post('/users', 'UserController@create');
Router::get('/users/{id}', 'UserController@show');
</code></pre>
<p>In this example, the <code>get</code> method defines a route that maps to the <code>index</code> method of the <code>HomeController</code> class. The <code>post</code> method maps to the <code>create</code> method of the <code>UserController</code</code> class, and the

<code>get</code> method with a parameter captures the <code>id</code> value and maps to the <code>show</code> method of the <code>UserController</code> class.</p>

css
Copy code
<h2>Contributing</h2>
<p>Contributions to this framework are welcome! If you find a bug or have suggestions for improvements, please open an issue or submit a pull request.</p>

<h2>License</h2>
<p>This PHP framework is open-source and released under the <a href="LICENSE">MIT License</a>. Feel free to use, modify, and distribute it as per the terms of the license.</p>

<h2>Acknowledgments</h2>
<p>This framework was inspired by various PHP frameworks and libraries that promote the MVC pattern and provide migration and routing capabilities.</p>

<h2>Contact</h2>
<p>For any inquiries or support requests, please contact <a href="mailto:your-email@example.com">your-email@example.com</a>.</p>
</body>
</html>
