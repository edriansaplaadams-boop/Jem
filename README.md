# Jobseeker Philippines 💼

**A professional job board platform connecting Filipino professionals with top career opportunities across the nation.**

---

## 📋 Table of Contents

- [Features](#features)
- [Project Structure](#project-structure)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Technologies](#technologies)
- [Contributing](#contributing)
- [License](#license)

---

## ✨ Features

### For Job Seekers
- 🔍 **Advanced Job Search** - Filter by title, location, salary, job type, and more
- 👤 **User Profiles** - Create and manage your professional profile
- 💾 **Save Jobs** - Bookmark favorite job listings for later review
- 📧 **Apply Directly** - Submit applications through the platform
- 📱 **Mobile Responsive** - Access from any device

### For Employers
- 📝 **Post Jobs** - Create and publish job listings easily
- 👥 **View Applicants** - Track and manage all applications
- ✏️ **Edit Listings** - Update job details anytime
- 📊 **Job Analytics** - View posting performance and applicant metrics
- 🎯 **Targeted Recruiting** - Reach qualified professionals in your field

### Platform Features
- 🔐 **Secure Authentication** - User login and registration
- 🎨 **Professional Design** - Modern, clean UI with responsive layout
- ⚡ **Fast Performance** - Optimized for quick loading times
- 🌙 **Professional Branding** - Blue and orange color scheme
- 🛡️ **Error Handling** - Comprehensive error pages (404, 403, 500)

---

## 📁 Project Structure

```
jobseeker-philippines/
├── App/
│   ├── Controllers/        # MVC Controllers
│   │   ├── HomeController.php
│   │   ├── ListingController.php
│   │   ├── UserController.php
│   │   └── ErrorController.php
│   ├── Core/               # Core framework utilities
│   │   ├── Controller.php
│   │   └── Router.php
│   └── Views/
│       ├── home.view.php
│       ├── error.view.php
│       ├── listings/
│       │   ├── index.view.php
│       │   ├── show.view.php
│       │   ├── create.view.php
│       │   └── edit.view.php
│       ├── users/
│       │   ├── login.view.php
│       │   └── create.view.php
│       ├── error/
│       │   ├── 404.view.php
│       │   └── 403.view.php
│       └── partials/
│           ├── head.php
│           ├── navbar.php
│           └── footer.php
├── config/
│   ├── app.php             # App configuration
│   └── db.php              # Database configuration
├── public/
│   ├── index.php           # Main entry point
│   ├── css/
│   │   ├── style.css       # Main stylesheet
│   │   └── custom.css      # Custom overrides
├── autoload.php            # PSR-4 autoloader
├── bootstrap.php           # App bootstrap and configuration
├── helpers.php             # Helper functions
├── composer.json           # Project dependencies
├── routes.php              # Route mapping
├── .gitignore              # Ignored files
└── README.md               # This file
```

---

## 🔧 Requirements

- **PHP** 7.4 or higher
- **MySQL** 5.7 or higher
- **Apache** with mod_rewrite enabled
- **Composer** (optional, for dependency management)

---

## 📦 Installation

### 1. Clone the Repository
```bash
git clone git@github.com:edriansaplaadams-boop/Jem.git
cd edrian
```

### 2. Configure Web Server
Place the project in your web server's document root (e.g., `/xampp/htdocs/edrian`).

### 3. Update Database Configuration
Edit `config/db.php`:
```php
return [
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'jobseeker_ph',
    'username' => 'root',
    'password' => '',
];
```

### 4. Create Database
```sql
CREATE DATABASE jobseeker_ph;

-- Create tables as needed
-- (Detailed schema coming soon)
```

### 5. Access the Application
Open your browser and navigate to:
```
http://localhost/edrian/public/index.php
```

---

## ⚙️ Configuration

### Environment Setup

Edit `config/db.php` to configure your database connection:

```php
return [
    'host' => 'your_host',
    'port' => '3306',
    'dbname' => 'your_database',
    'username' => 'your_username',
    'password' => 'your_password',
];
```

### Session Configuration

Sessions are automatically started in `autoload.php`. To modify session settings, edit that file.

---

## 🚀 Usage

### Home Page
Access the home page to view featured jobs and platform information.

### Browse Jobs
Navigate to "Browse Jobs" to search and filter job listings.

### Post a Job
Log in as an employer and click "Post Job" to create a new job listing.

### Apply for Jobs
Log in as a job seeker and click "Apply" on any job listing.

### Manage Profile
View and edit your profile information from "My Profile".

---

## 📂 File Structure Details

### Controllers
- **HomeController** - Handles home page and general site routes
- **ListingController** - Manages job listings (browse, view, create, edit)
- **UserController** - Handles authentication and user management
- **ErrorController** - Handles error pages

### Views
- **Partials** - Reusable components (navbar, footer, headers)
- **Listings** - Job browse, detail, create, and edit pages
- **Users** - Login and registration pages
- **Error** - Error page templates

### CSS
- **style.css** - Main stylesheet with comprehensive design system
- **custom.css** - Additional custom styles and animations

---

## 🛠️ Technologies

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: MySQL 5.7+
- **Architecture**: MVC (Model-View-Controller)
- **Autoloading**: PSR-4
- **Version Control**: Git

---

## 🎨 Design Highlights

### Color Scheme
- **Primary**: `#1e5a96` (Professional Blue)
- **Secondary**: `#f39c12` (Vibrant Orange)
- **Success**: `#27ae60` (Green)
- **Danger**: `#e74c3c` (Red)

### Responsive Design
- Mobile-first approach
- Breakpoints: 768px, 480px
- Flexible grid system
- Touch-friendly buttons and forms

### Typography
- Font Family: Segoe UI, Tahoma, Geneva, Verdana
- Professional font sizes and weights
- Clear visual hierarchy

---

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is licensed under the MIT License - see the LICENSE file for details.

---

## 📞 Support

For support, email edriansaplaadams@gmail.com or visit our website.

---

## 🙏 Acknowledgments

- Built with ❤️ for Filipino professionals
- Inspired by leading international job boards
- Designed for the Philippine job market

---

**Last Updated:** May 19, 2026  
**Version:** 1.0.0  
**Status:** ✅ Production Ready

---

*Jobseeker Philippines - Find Your Dream Job Today! 💼*
