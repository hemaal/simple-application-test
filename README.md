<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# xve_application_test

## 🧪 Project Overview
This is a Laravel-based meeting room reservation system. Users can book meeting rooms for specific times during the day. The system ensures that rooms cannot be double-booked and booking times must not overlap, even partially.

## 🚀 Features
- Batch booking insertion with conflict detection
- Automated tests for booking logic
- Modern Laravel 12+ stack

## 📂 Key Files
- **Service implementation:** `app/Services/BookingService.php`
- **Test case:** `tests/Feature/BookingServiceTest.php`

## 🛠️ Getting Started

### 1. Clone or Fork the Repository
- Click the **Fork** button on GitHub to create your own copy, or clone directly:
  ```sh
  git clone https://github.com/YOUR-USERNAME/xve_application_test.git
  cd xve_application_test
  ```

### 2. Install Dependencies
- PHP dependencies:
  ```sh
  composer install
  ```
- Node.js dependencies:
  ```sh
  npm install
  ```

### 3. Environment Setup
- Copy the example environment file:
  ```sh
  cp .env.example .env
  # Or manually create .env if needed
  ```
- Generate the application key:
  ```sh
  php artisan key:generate
  ```
- Create the SQLite database file (if not present):
  ```sh
  touch database/database.sqlite
  ```
- Run migrations:
  ```sh
  php artisan migrate
  ```

### 4. Running the Application
- Start the Laravel development server:
  ```sh
  php artisan serve
  ```
- Visit [http://localhost:8000](http://localhost:8000) in your browser.

### 5. Running Tests
- Run all tests:
  ```sh
  php artisan test
  ```

## 🧑‍💻 Contributing
1. Fork the repository and clone your fork.
2. Create a new branch for your feature or bugfix:
   ```sh
   git checkout -b your-feature-branch
   ```
3. Make your changes and commit:
   ```sh
   git add .
   git commit -m "Describe your changes"
   ```
4. Push to your fork and open a Pull Request on GitHub.

## 🤝 Code of Conduct & Security
- Please review the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).
- For security issues, email [taylor@laravel.com](mailto:taylor@laravel.com).

## 📄 License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
