# Event Registration System

A modern Laravel-based event registration system with QR code functionality, built using Filament admin panel. This system allows attendees to register for events and provides check-in functionality using QR codes.

## 🚀 Features

### Public Features

-   **Event Registration Form**: Public registration form for attendees
-   **QR Code Generation**: Automatic QR code generation for each attendee
-   **Email Notifications**: QR codes sent via email to registered attendees
-   **Check-in System**: QR code-based check-in functionality
-   **Multi-language Support**: Arabic and English language support

### Admin Panel Features

-   **Filament Admin Panel**: Modern admin interface built with Filament
-   **Attendee Management**: View, search, and manage all registered attendees
-   **Real-time Statistics**: Dashboard with attendance statistics
-   **Export Functionality**: Export attendee data and statistics to Excel
-   **QR Code Management**: View and manage QR codes for all attendees
-   **Attendance Filtering**: Filter attendees by attendance status (all, attended, not attended)
-   **Check-in Tracking**: Monitor check-in status and timestamps

### Technical Features

-   **Laravel 12**: Latest Laravel framework
-   **Filament 3**: Modern admin panel
-   **QR Code Integration**: Using SimpleSoftwareIO/simple-qrcode
-   **Email System**: Laravel mail functionality
-   **Database Migrations**: Proper database structure
-   **Multi-language**: Localization support

## 📋 Requirements

-   PHP 8.2 or higher
-   Composer
-   MySQL/PostgreSQL/SQLite
-   Web server (Apache/Nginx)
-   Mail server configuration

## 🛠️ Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd event_registration_system
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Environment Configuration

```bash
cp .env.example .env
```

Edit the `.env` file with your configuration:

```env
APP_NAME="Event Registration System"
APP_ENV=production
APP_KEY=your-app-key
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=event_registration
DB_USERNAME=your_username
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email
MAIL_FROM_NAME="${APP_NAME}"

APP_LOCALE=ar
APP_FALLBACK_LOCALE=en
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Database Migrations

```bash
php artisan migrate
```

### 6. Create Storage Link

```bash
php artisan storage:link
```

### 7. Create Admin User

```bash
php artisan db:seed --class=AdminUserSeeder
```

### 8. Build Assets (Production)

```bash
npm run build
```

## 🔧 Configuration

### Mail Configuration

Configure your mail settings in the `.env` file to enable email notifications with QR codes.

### Language Configuration

The system supports Arabic (ar) and English (en). Set your preferred language in the `.env` file:

```env
APP_LOCALE=ar
APP_FALLBACK_LOCALE=en
```

**Language Switching**: Users can switch between Arabic and English using the language switcher in the top-right corner of the interface.

### Admin Access

After running the database seeder, you can access the admin panel with these default credentials:

-   **Admin Panel URL**: `https://your-domain.com/admin`
-   **Email**: `admin@gmail.com`
-   **Password**: `admin`

### File Storage

Ensure the storage directory is writable:

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

## 🚀 Usage

### Public Registration

1. Visit the main page (`/`) to access the registration form
2. Fill in the attendee information (name, email, phone)
3. Submit the form to register
4. QR code will be generated and sent via email
5. Attendee can use the QR code for check-in

### Admin Panel

1. Access the admin panel at `/admin`
2. Login with the default admin credentials:
    - **Email**: `admin@gmail.com`
    - **Password**: `admin`
3. View dashboard with statistics
4. Manage attendees through the AttendeeResource
5. Export data as needed

**⚠️ Security Note**: Please change the default admin password after first login for security purposes.

### Check-in Process

1. Scan or access the QR code link
2. Verify attendee information
3. Click check-in button
4. System marks attendee as present

## 📁 Project Structure

```
event_registration_system/
├── app/
│   ├── Filament/           # Admin panel resources
│   ├── Http/Controllers/   # Application controllers
│   ├── Mail/              # Email templates
│   └── Models/            # Eloquent models
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── lang/                 # Language files
├── resources/views/      # Blade templates
└── routes/              # Application routes
```

## 🌐 Application Routes

### Public Routes

-   `GET /` - Registration form (main page)
-   `GET /register` - Registration form (alias)
-   `POST /register` - Process registration
-   `GET /checkin/{id}` - Check-in page for attendees
-   `POST /checkin/{id}` - Process check-in
-   `GET /language/{locale}` - Switch language (ar/en)

### Admin Routes

-   `GET /admin` - Admin panel login
-   `GET /admin/dashboard` - Admin dashboard with statistics
-   `GET /admin/attendees` - Attendee management
-   `GET /admin/attendees/{id}` - View attendee details
-   `POST /admin/attendees/export` - Export attendee data
-   `POST /admin/statistics/export` - Export statistics

## 🔒 Security

-   CSRF protection enabled
-   Input validation on all forms
-   Secure file uploads
-   Email verification system
-   Admin panel authentication

## 📧 Email Templates

The system includes email templates for QR code delivery. Customize the templates in:

-   `resources/views/mail/qr-code-mail.blade.php`
-   `lang/ar/mail.php` (Arabic translations)
-   `lang/en/mail.php` (English translations)

## 🌐 Localization

The system supports multiple languages:

-   Arabic (ar) - Primary language
-   English (en) - Fallback language

Language files are located in the `lang/` directory.

## 📊 Database Schema

### Attendees Table

-   `id` - Primary key
-   `name` - Attendee name
-   `email` - Unique email address
-   `phone` - Phone number
-   `qr_code` - QR code file path
-   `is_attended` - Attendance status
-   `checked_in_at` - Check-in timestamp
-   `created_at` - Registration timestamp
-   `updated_at` - Last update timestamp

## 🚀 Deployment

### Production Deployment

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure your web server to point to the `public/` directory
4. Ensure proper file permissions
5. Set up SSL certificate for HTTPS
6. Configure mail server for email functionality

---

**Note**: Make sure to configure your mail server properly to enable QR code email functionality. The system requires a working mail configuration to send QR codes to registered attendees.
