# Personal Task Manager

A simple Laravel CRUD application for managing personal tasks.

## Project Code
WST21-PM-2026-SF

## Student Information
**Student Name:** Jansin Flores  
**Course & Year:** BSIT - 2nd Year

## Database Used
MySQL

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status
- Set Due Date
- Form validation
- Responsive design

## Technologies
- Laravel
- PHP
- MySQL
- Blade
- HTML
- CSS

## Requirements
- PHP
- Composer
- Laravel
- MySQL
- XAMPP or another MySQL server
- Git

## Installation

### 1. Create the Laravel project

If you are starting from an empty folder:

```bash
composer create-project laravel/laravel personal-task-manager
cd personal-task-manager
```

Copy the files in this repository into your Laravel project, replacing the matching files.

### 2. Create the MySQL database

Open phpMyAdmin and create:

```text
task_manager
```

### 3. Configure `.env`

Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

On Windows, you can simply copy the file manually.

Set your MySQL information:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

If your MySQL has a password, put it in `DB_PASSWORD`.

### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Run the migration

```bash
php artisan migrate
```

### 6. Start Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

## Laravel Structure

### Route
`routes/web.php` receives browser requests and connects them to the controller.

### Controller
`app/Http/Controllers/TaskController.php` contains the CRUD operations.

### Model
`app/Models/Task.php` represents the `tasks` database table.

### Migration
The migration creates the `tasks` table with:
- id
- task_name
- description
- status
- due_date
- created_at
- updated_at

### Blade Views
The Blade files display the task list and forms:
- `resources/views/tasks/index.blade.php`
- `resources/views/tasks/create.blade.php`
- `resources/views/tasks/edit.blade.php`

## CRUD Flow

```text
Browser
   ↓
Route
   ↓
TaskController
   ↓
Task Model
   ↓
MySQL Database
   ↓
Blade View
   ↓
Browser
```

## GitHub

After confirming that the application works:

```bash
git init
git add .
git commit -m "Initial Personal Task Manager"
git branch -M main
git remote add origin YOUR_GITHUB_REPOSITORY_URL
git push -u origin main
```

Make sure the GitHub repository is **Public** before submitting its URL.
