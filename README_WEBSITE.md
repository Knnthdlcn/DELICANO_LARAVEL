# Your Business Website

A modern, full-featured business website built with Laravel 11, Vue 3, Inertia.js, and Tailwind CSS.

## 🎯 Features

### Pages Implemented
- **Home/Landing Page** - Hero section, features, featured products, call-to-action
- **Products & Services** - Filterable product grid with search and categories
- **About Us** - Company story, mission/vision, values, team members
- **Contact** - Contact form with validation and email notifications

### Technical Features
- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Modern UI with Tailwind CSS
- ✅ Server-side rendering with Inertia.js
- ✅ Form validation
- ✅ Database-driven content
- ✅ Email notifications for contact form
- ✅ Navigation with active state highlighting
- ✅ Reusable components (Navbar, Footer, MainLayout)

## 🚀 Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL/MariaDB or SQLite

### Installation

1. **Install PHP dependencies**
```bash
composer install
```

2. **Install Node dependencies**
```bash
npm install
```

3. **Set up environment**
```bash
copy .env.example .env
php artisan key:generate
```

4. **Configure database**
Edit `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. **Run migrations and seed data**
```bash
php artisan migrate
php artisan db:seed --class=ProductSeeder
```

6. **Build assets**
```bash
npm run build
```

### Development

Start the development servers:

**Terminal 1 - Laravel Backend:**
```bash
php artisan serve
```

**Terminal 2 - Vite Dev Server:**
```bash
npm run dev
```

Visit: `http://localhost:8000`

## 📁 Project Structure

### Backend (Laravel)
```
app/
├── Http/Controllers/
│   ├── HomeController.php       # Landing page controller
│   ├── ProductController.php    # Products listing with filters
│   ├── AboutController.php      # About page controller
│   └── ContactController.php    # Contact form handler
├── Models/
│   └── Product.php              # Product model
└── Mail/
    └── ContactFormMail.php      # Contact form email

database/
├── migrations/
│   └── 2025_12_08_*_create_products_table.php
└── seeders/
    └── ProductSeeder.php        # Sample product data

routes/
└── web.php                      # Application routes
```

### Frontend (Vue + Inertia)
```
resources/js/
├── pages/
│   ├── Home.vue                 # Landing page
│   ├── About.vue                # About page
│   ├── Contact.vue              # Contact page
│   └── Products/
│       └── Index.vue            # Products listing
├── components/
│   ├── Navbar.vue               # Navigation bar
│   └── Footer.vue               # Footer component
└── layouts/
    └── MainLayout.vue           # Main layout wrapper

resources/views/
└── emails/
    └── contact.blade.php        # Contact form email template
```

## 🎨 Customization

### Branding
1. Update company name in:
   - `resources/js/components/Navbar.vue` (logo)
   - `resources/js/components/Footer.vue` (footer branding)
   - All page titles

2. Change colors in Tailwind config or update classes:
   - Primary: `blue-600` → your color
   - Update in all Vue files

### Content
1. **Home Page**: Edit `resources/js/pages/Home.vue`
2. **About Page**: Edit `resources/js/pages/About.vue`
3. **Contact Info**: Edit `resources/js/pages/Contact.vue` and `resources/js/components/Footer.vue`

### Products
Add/edit products through database or create an admin panel:
```bash
php artisan tinker
```
```php
App\Models\Product::create([
    'name' => 'New Product',
    'description' => 'Product description',
    'price' => 99.99,
    'category' => 'Category Name',
    'is_service' => false,
    'featured' => true,
]);
```

## 📧 Email Configuration

Configure email in `.env`:

### Using Mailtrap (Development)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourbusiness.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Using Gmail
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```

## 🔧 Available Commands

```bash
# Development
npm run dev              # Start Vite dev server
php artisan serve        # Start Laravel server

# Production Build
npm run build            # Build assets for production

# Database
php artisan migrate      # Run migrations
php artisan db:seed      # Seed database
php artisan migrate:fresh --seed  # Fresh database with seed data

# Cache (Production)
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Clear Cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 🌐 Deployment

### Production Checklist
- [ ] Set `APP_ENV=production` in `.env`
- [ ] Set `APP_DEBUG=false` in `.env`
- [ ] Configure production database
- [ ] Set up email service
- [ ] Run `npm run build`
- [ ] Run `php artisan config:cache`
- [ ] Run `php artisan route:cache`
- [ ] Run `php artisan view:cache`
- [ ] Set proper file permissions
- [ ] Configure web server (Apache/Nginx)
- [ ] Enable HTTPS/SSL

## 📦 Technologies Used

- **Backend**: Laravel 11
- **Frontend**: Vue 3 + TypeScript
- **Bridge**: Inertia.js
- **Styling**: Tailwind CSS
- **Build Tool**: Vite
- **Database**: MySQL/SQLite
- **Authentication**: Laravel Fortify (included)

## 🤝 Contributing

Feel free to customize and extend this project for your needs!

## 📄 License

Open source - feel free to use for your business!

---

**Built with ❤️ using Laravel + Vue + Inertia**
