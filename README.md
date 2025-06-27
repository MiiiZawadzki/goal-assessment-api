# Goal Assessment API

The Goal Assessment API is a simple Laravel-based application designed to record the percentage of goal completion for employees.

### Endpoint
The API exposes a single POST endpoint:

```
api/goal/assessment
```

### Request Payload
The endpoint expects a payload with the following body structure:

```
{
    employee_id: Integer,
    goal_id: Integer,
    progress: Integer,
}
```
Each request stores the provided progress value for a specific employee and goal combination.


## Project Setup
Prerequisites:
* PHP and Composer are installed.

Running the API:
1. Copy project files (e.g. `git clone`) and navigate to the main (root) project directory.
2. Run `composer install` to install dependencies and generate autoload files.
3. Run `php artisan migrate` to set up the database.
4. Use a web server like Apache or Nginx to serve the application. For local usage, Laravel built-in server might be enough: `php artisan serve`.
4. (Optional) Run database seeder: `php artisan db:seed`. The seeder saves 10 employees and 10 goals to the database.
5. Send POST request to `api/goal/assessment` endpoint.

