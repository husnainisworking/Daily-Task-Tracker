DailyTaskTracker
A Laravel 12 web application for managing daily tasks with user authentication.

Tech Stack
PHP 8.5.3 / Laravel 12
Livewire 4 (reactive UI)
Tailwind CSS 4
MySQL database
What It Does
A personal task management app where authenticated users can:

Create and organize tasks by category
Set task dates and track completion (completed_at)
Mark tasks as recurring
View their dashboard of tasks
Data Model
Model	Key Fields
User	name, email, password
Category	belongs to User, has many Tasks
Task	title, description, task_date, completed_at, is_recurring — belongs to User & Category
Routes
Route	Description
GET /login	Login form
POST /login	Authenticate
GET /register	Registration form
POST /register	Create account
POST /logout	Sign out
GET /dashboard	Main task dashboard (auth required)
Project Status
Early-stage — authentication scaffolding is complete (login, register, logout), models and migrations are defined, but the dashboard and task CRUD features are still to be built.
