# Project Portfolio Web Application

This is a simple web application for showcasing your project portfolio. It allows you to display your projects with details and view them in a modal window. Users can also search for projects based on project technologies.

<img width="960" alt="image" src="https://github.com/jayanktyagi/gallery-view/assets/87943225/963e8cb5-95cf-4b0d-b0e9-d01082cd566f">


## Features

- Display a list of projects with details.
- View project details in a modal window.
- Search for projects by project technologies.
- Responsive design for various screen sizes.
- Pastel color scheme for a visually pleasing experience.
- Truncate long project technology descriptions with ellipsis.

## Technologies Used

- HTML
- CSS (Bootstrap)
- JavaScript (Bootstrap and custom scripts)
- PHP (Laravel for data retrieval)
- MySQL (Database for storing project information)

## Getting Started

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/your-username/project-portfolio.git

## Setup

1) Set up a local web server (e.g., Apache, Nginx) and configure it to serve the project files (XAMPP was used in development).

2) Create a MySQL database and import the provided SQL dump file to populate project data.

3) Update the Laravel configuration (.env file) with your database credentials:

```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database_name
  DB_USERNAME=your_database_username
  DB_PASSWORD=your_database_password
```
4) Run the Laravel development server:

```bash
php artisan serve
```

5) Access the project portfolio web application in your web browser by visiting:
```
http://localhost:8000
```

## Usage
* Browse the list of projects on the main page.
* Click on a project card to view project details in a modal window.
* Use the search bar to filter projects by project technologies.

## Acknowledgements
* [Bootstrap](https://getbootstrap.com/)
* [Laravel](https://laravel.com/)
* [MySQL](https://www.mysql.com/)
