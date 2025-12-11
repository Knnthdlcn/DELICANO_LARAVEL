# 🎨 Complete Customization Guide

## Step-by-Step Process to Customize Your Website

---

## 1️⃣ CHANGE BRANDING & COMPANY NAME

### Update Company Name in Navigation
**File:** `resources/js/components/Navbar.vue`

**Find (Line ~26):**
```vue
<Link href="/" class="text-2xl font-bold text-blue-600">
    YourBusiness
</Link>
```

**Change to:**
```vue
<Link href="/" class="text-2xl font-bold text-blue-600">
    Your Company Name
</Link>
```

### Update Company Name in Footer
**File:** `resources/js/components/Footer.vue`

**Find (Line ~9):**
```vue
<h3 class="mb-4 text-xl font-bold">YourBusiness</h3>
```

**Change to:**
```vue
<h3 class="mb-4 text-xl font-bold">Your Company Name</h3>
```

---

## 2️⃣ CHANGE COLORS & THEME

### Option A: Simple Color Change (Replace blue-600)

Search and replace in ALL Vue files:
- `blue-600` → `purple-600` (or any color: red, green, indigo, teal, etc.)
- `blue-700` → `purple-700`
- `blue-100` → `purple-100`
- `blue-800` → `purple-800`

**Files to update:**
- `resources/js/pages/Home.vue`
- `resources/js/pages/About.vue`
- `resources/js/pages/Contact.vue`
- `resources/js/pages/Products/Index.vue`
- `resources/js/components/Navbar.vue`
- `resources/js/components/Footer.vue`

### Option B: Custom Brand Colors in Tailwind Config

**Create/Edit:** `tailwind.config.js`

```javascript
export default {
  theme: {
    extend: {
      colors: {
        brand: {
          50: '#f0f9ff',
          100: '#e0f2fe',
          200: '#bae6fd',
          300: '#7dd3fc',
          400: '#38bdf8',
          500: '#0ea5e9',  // Main brand color
          600: '#0284c7',
          700: '#0369a1',
          800: '#075985',
          900: '#0c4a6e',
        }
      }
    }
  }
}
```

Then replace `blue-600` with `brand-500` throughout your Vue files.

---

## 3️⃣ CUSTOMIZE HOME PAGE

**File:** `resources/js/pages/Home.vue`

### Change Hero Section Text

**Find (Line ~21-27):**
```vue
<h1 class="mb-6 text-5xl font-bold leading-tight lg:text-6xl">
    Welcome to Your Business
</h1>
<p class="mb-8 text-xl text-blue-100 lg:text-2xl">
    Discover amazing products and services tailored just for you. 
    Quality, innovation, and excellence in everything we do.
</p>
```

**Change to:**
```vue
<h1 class="mb-6 text-5xl font-bold leading-tight lg:text-6xl">
    Your Headline Here
</h1>
<p class="mb-8 text-xl text-blue-100 lg:text-2xl">
    Your company description and value proposition goes here.
</p>
```

### Change Feature Cards

**Find (Line ~48-82):** The three feature cards

**Example - First Feature:**
```vue
<div class="rounded-lg bg-gray-50 p-8 text-center">
    <!-- Icon -->
    <div class="mb-4 flex justify-center">
        <svg class="h-12 w-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <!-- Your icon path -->
        </svg>
    </div>
    <h3 class="mb-3 text-xl font-bold text-gray-900">Your Feature Title</h3>
    <p class="text-gray-600">Your feature description</p>
</div>
```

**Repeat for all 3 features** with your own:
- Feature titles
- Feature descriptions
- Icons (keep SVG structure, just change the title/description)

### Hide Featured Products Section (Optional)

**Find (Line ~88):**
```vue
<section class="bg-gray-50 py-20" v-if="featuredProducts.length > 0">
```

**Change to hide:**
```vue
<section class="bg-gray-50 py-20" v-if="false">
```

---

## 4️⃣ CUSTOMIZE ABOUT PAGE

**File:** `resources/js/pages/About.vue`

### Change Company Story

**Find (Line ~21-36):**
```vue
<h2 class="mb-6 text-3xl font-bold text-gray-900 lg:text-4xl">Our Story</h2>
<div class="space-y-4 text-lg text-gray-600">
    <p>
        Founded with a vision to deliver exceptional products...
    </p>
    <p>
        What started as a small venture...
    </p>
    <p>
        Today, we continue to push boundaries...
    </p>
</div>
```

**Replace all three paragraphs** with your actual company story.

### Change Mission & Vision

**Find (Line ~56-62):** Mission card
```vue
<h3 class="mb-4 text-2xl font-bold text-gray-900">Our Mission</h3>
<p class="text-gray-600">
    To provide innovative solutions and exceptional service...
</p>
```

**Replace with your mission statement.**

**Find (Line ~77-83):** Vision card
```vue
<h3 class="mb-4 text-2xl font-bold text-gray-900">Our Vision</h3>
<p class="text-gray-600">
    To be the leading provider of innovative products...
</p>
```

**Replace with your vision statement.**

### Change Core Values

**Find (Line ~99-176):** Four value cards

**Example - First Value:**
```vue
<div class="text-center">
    <div class="mb-4 flex justify-center">
        <div class="rounded-full bg-blue-100 p-4">
            <svg class="h-8 w-8 text-blue-600">...</svg>
        </div>
    </div>
    <h3 class="mb-2 text-xl font-bold text-gray-900">Integrity</h3>
    <p class="text-gray-600">We uphold the highest standards...</p>
</div>
```

**Change each value's:**
- Title (e.g., "Integrity" → "Your Value")
- Description
- Keep the icon structure

### Change Team Members

**Find (Line ~194-251):** Four team member cards

**Example:**
```vue
<div class="rounded-lg bg-white p-6 text-center shadow-lg">
    <div class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-gray-200">
        <svg>...</svg>
    </div>
    <h3 class="mb-1 text-lg font-bold text-gray-900">John Doe</h3>
    <p class="mb-3 text-sm text-blue-600">CEO & Founder</p>
    <p class="text-sm text-gray-600">Leading with vision and passion</p>
</div>
```

**Replace with your team:**
- Name
- Position
- Description
- (Add real profile images later by replacing the SVG div)

---

## 5️⃣ CUSTOMIZE CONTACT PAGE

**File:** `resources/js/pages/Contact.vue`

### Change Contact Information

**Find (Line ~29-56):**

**Address:**
```vue
<div class="mb-6">
    <h3 class="mb-2 text-xl font-bold text-gray-900">Address</h3>
    <p class="text-gray-600">123 Business St, Suite 100</p>
    <p class="text-gray-600">City, State 12345</p>
</div>
```

**Phone:**
```vue
<div class="mb-6">
    <h3 class="mb-2 text-xl font-bold text-gray-900">Phone</h3>
    <p class="text-gray-600">+1 (555) 123-4567</p>
</div>
```

**Email:**
```vue
<div class="mb-6">
    <h3 class="mb-2 text-xl font-bold text-gray-900">Email</h3>
    <p class="text-gray-600">info@yourbusiness.com</p>
</div>
```

**Replace all with your actual contact details.**

### Change Business Hours (Optional)

**Add after email section:**
```vue
<div class="mb-6">
    <h3 class="mb-2 text-xl font-bold text-gray-900">Business Hours</h3>
    <p class="text-gray-600">Mon - Fri: 9:00 AM - 6:00 PM</p>
    <p class="text-gray-600">Sat: 10:00 AM - 4:00 PM</p>
    <p class="text-gray-600">Sun: Closed</p>
</div>
```

---

## 6️⃣ CUSTOMIZE FOOTER

**File:** `resources/js/components/Footer.vue`

### Change Company Description

**Find (Line ~11-13):**
```vue
<p class="mb-4 text-gray-400">
    Delivering excellence in products and services since day one.
</p>
```

**Replace with your tagline.**

### Update Contact Information in Footer

**Find (Line ~65-88):**

```vue
<li class="flex items-start gap-2">
    <svg>...</svg>
    <span>123 Business St, Suite 100<br>City, State 12345</span>
</li>
<li class="flex items-center gap-2">
    <svg>...</svg>
    <span>info@yourbusiness.com</span>
</li>
<li class="flex items-center gap-2">
    <svg>...</svg>
    <span>+1 (555) 123-4567</span>
</li>
```

**Replace with your contact details.**

### Update Social Media Links

**Find (Line ~15-39):**

```vue
<a href="#" class="text-gray-400 transition hover:text-white">
    <svg>...</svg>
</a>
```

**Replace `href="#"` with your social media URLs:**
- Facebook: `href="https://facebook.com/yourpage"`
- Twitter: `href="https://twitter.com/yourhandle"`
- LinkedIn: `href="https://linkedin.com/company/yourcompany"`

---

## 7️⃣ MANAGE PRODUCTS

### Add New Products via Terminal

```bash
php artisan tinker
```

Then run:
```php
App\Models\Product::create([
    'name' => 'Your Product Name',
    'description' => 'Detailed description of your product or service',
    'price' => 299.99,
    'category' => 'Your Category',
    'is_service' => false,  // true for services, false for products
    'featured' => true,     // true to show on homepage
]);
```

### Edit Existing Products

```bash
php artisan tinker
```

```php
// Find product by ID
$product = App\Models\Product::find(1);

// Update fields
$product->name = 'New Name';
$product->price = 399.99;
$product->save();
```

### Delete Products

```bash
php artisan tinker
```

```php
App\Models\Product::find(1)->delete();
```

### View All Products

```bash
php artisan tinker
```

```php
App\Models\Product::all();
```

---

## 8️⃣ ADD IMAGES

### Product Images

1. **Save images to:** `public/images/products/`
2. **Update product with image path:**

```bash
php artisan tinker
```

```php
$product = App\Models\Product::find(1);
$product->image = '/images/products/your-image.jpg';
$product->save();
```

### Team Member Photos

**Edit:** `resources/js/pages/About.vue`

**Replace (Line ~198):**
```vue
<div class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-gray-200">
    <svg>...</svg>
</div>
```

**With:**
```vue
<img 
    src="/images/team/john-doe.jpg" 
    alt="John Doe" 
    class="mx-auto mb-4 h-24 w-24 rounded-full object-cover"
/>
```

---

## 9️⃣ CONFIGURE EMAIL

### Edit `.env` file

**Development (Mailtrap):**
```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@yourcompany.com
MAIL_FROM_NAME="Your Company Name"
```

**Production (Gmail):**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="Your Company Name"
```

**After editing `.env`, restart server:**
```bash
# Stop servers (Ctrl+C in both terminals)
# Then restart:
php artisan serve
npm run dev
```

---

## 🔟 ADVANCED CUSTOMIZATIONS

### Change Layout Structure

**File:** `resources/js/layouts/MainLayout.vue`

Add elements before/after navbar or footer:
```vue
<template>
    <div class="min-h-screen flex flex-col">
        <!-- Add announcement bar -->
        <div class="bg-blue-600 text-white text-center py-2 text-sm">
            Special Offer: 20% off all services!
        </div>
        
        <Navbar />
        <main class="flex-grow">
            <slot />
        </main>
        <Footer />
    </div>
</template>
```

### Add Google Maps to Contact Page

**File:** `resources/js/pages/Contact.vue`

**Replace the map placeholder (Line ~63-72) with:**
```vue
<div class="aspect-video rounded-lg overflow-hidden">
    <iframe
        src="https://www.google.com/maps/embed?pb=YOUR_EMBED_CODE"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
    ></iframe>
</div>
```

Get embed code: Google Maps → Your Location → Share → Embed a map

---

## 📋 QUICK REFERENCE CHECKLIST

### Essential Customizations:
- [ ] Company name (Navbar + Footer)
- [ ] Hero section headline and description
- [ ] About page company story
- [ ] Mission and vision statements
- [ ] Contact information (all pages)
- [ ] Email configuration
- [ ] Add your products
- [ ] Update social media links

### Optional Customizations:
- [ ] Change color theme
- [ ] Add team member photos
- [ ] Add product images
- [ ] Customize features section
- [ ] Update core values
- [ ] Add Google Maps
- [ ] Add announcement bar
- [ ] Modify footer links

---

## 🎯 TESTING YOUR CHANGES

After each change:
1. Save the file
2. Check browser (should auto-reload with Vite)
3. Test on mobile (browser dev tools → device toolbar)
4. Test all pages work correctly

---

## 💡 TIPS

1. **Make one change at a time** - easier to debug
2. **Keep backups** - copy files before major changes
3. **Test after each change** - catch errors early
4. **Use browser console** - check for JavaScript errors (F12)
5. **Clear cache** - Hard refresh (Ctrl+Shift+R) if changes don't appear

---

## 🆘 TROUBLESHOOTING

**Changes not showing?**
- Hard refresh browser (Ctrl+Shift+R)
- Check if `npm run dev` is running
- Check browser console for errors

**Colors not changing?**
- Make sure to change all variations (e.g., blue-600, blue-700, blue-100)
- Clear browser cache

**Email not working?**
- Check `.env` configuration
- Restart server after changing `.env`
- Test with Mailtrap first (free testing service)

---

## 📞 NEED HELP?

- Laravel Docs: https://laravel.com/docs
- Vue Docs: https://vuejs.org/
- Tailwind Colors: https://tailwindcss.com/docs/customizing-colors
- Tailwind Components: https://tailwindcss.com/components

---

**Start with the easy customizations (text and colors) first, then move to more advanced ones!** 🚀
