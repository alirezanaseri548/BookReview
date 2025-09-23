# 📚 Book Review - راهنمای پروژه / Project Guide / Projektanleitung

---

## 🇮🇷 فارسی

### ۱. مقدمه
این پروژه یک وب‌اپلیکیشن بررسی و امتیازدهی کتاب‌هاست که با **Laravel** پیاده‌سازی شده و هدفش ایجاد یک پایگاه داده از کتاب‌ها همراه نقد و امتیاز کاربران است.  

### ۲. هدف نهایی پروژه
- نمایش لیست کتاب‌ها با قابلیت جستجو و فیلتر کردن (جدیدترین‌ها، محبوب‌ترین‌ها، بالاترین امتیازها).
- نمایش جزئیات هر کتاب به همراه نقدها و امتیازها.
- افزودن نقد جدید به کتاب‌ها با فرم ساده.
- استفاده از معماری تمیز و بهینه‌سازی عملکرد با کش (cache).

### ۳. پیش‌نیازها
- PHP >= 8.x  
- Composer  
- Laravel 10+  
- MySQL  
- Node.js (برای قالب‌بندی استایل با Tailwind)

### ۴. راه‌اندازی پروژه
1. **کلون کردن مخزن کد**
   ```bash
   git clone https://github.com/your-username/project-name.git
   ```
2. **نصب وابستگی‌ها**
   ```bash
   composer install
   npm install && npm run dev
   ```
3. **ساخت فایل env**
   ```bash
   cp .env.example .env
   ```
   و تنظیم `DB_CONNECTION` روی `mysql`.
4. **کلید اپلیکیشن**
   ```bash
   php artisan key:generate
   ```
5. **اجرای migration**
   ```bash
   php artisan migrate
   ```
6. **اجرای Seeder (اختیاری)**
   ```bash
   php artisan db:seed
   ```
7. **راه‌اندازی سرور**
   ```bash
   php artisan serve
   ```

### ۵. سناریوی توسعه (بر اساس کامیت‌ها و فایل‌های پروژه)
- **مرحله ۱:** ایجاد ساختار اولیه Laravel و تنظیم MySQL.
- **مرحله ۲:** اضافه کردن مدل `Book` و `Review`، تعریف ارتباط‌ها.
- **مرحله ۳:** ایجاد کنترلر `BookController` برای نمایش لیست کتاب‌ها با فیلتر و کش.
- **مرحله ۴:** ایجاد کنترلر `ReviewController` برای افزودن نقد.
- **مرحله ۵:** طراحی ویو Blade برای لیست (`books/index.blade.php`) و جزئیات کتاب، به همراه کامپوننت امتیاز ستاره‌ای.
- **مرحله ۶:** پیاده‌سازی استایل و فیلترها با Tailwind CSS.
- **مرحله ۷:** بهینه‌سازی Queryها و افزودن Cache به نمایش کتاب‌ها.

---

## 🇬🇧 English

### 1. Introduction
This project is a **Laravel-based web application** for managing books with ratings and user reviews.

### 2. Final Goal
- Display book lists with search and filtering options (latest, most popular, highest rated).
- Show detailed pages with all reviews and ratings.
- Add new reviews via a simple form.
- Apply clean architecture and use caching for performance.

### 3. Prerequisites
- PHP >= 8.x  
- Composer  
- Laravel 10+  
- MySQL  
- Node.js (for TailwindCSS)

### 4. Setup
1. **Clone Project**
   ```bash
   git clone https://github.com/your-username/project-name.git
   ```
2. **Install Dependencies**
   ```bash
   composer install
   npm install && npm run dev
   ```
3. **Create env File**
   ```bash
   cp .env.example .env
   ```
   Set `DB_CONNECTION` to `mysql`.
4. **Generate App Key**
   ```bash
   php artisan key:generate
   ```
5. **Migrate**
   ```bash
   php artisan migrate
   ```
6. **Seed (optional)**
   ```bash
   php artisan db:seed
   ```
7. **Serve**
   ```bash
   php artisan serve
   ```

---

## 🇩🇪 Deutsch

### 1. Einführung
Dieses Projekt ist eine **Laravel-Webanwendung** zur Verwaltung von Büchern mit Bewertungen und Benutzerrezensionen.

### 2. Endziel
- Bücherliste mit Suche und Filterung anzeigen (neueste, beliebteste, am besten bewertet).
- Detailseiten mit allen Rezensionen und Bewertungen.
- Neue Rezensionen über ein einfaches Formular hinzufügen.
- Saubere Architektur und Caching zur Leistungssteigerung.

### 3. Voraussetzungen
- PHP >= 8.x  
- Composer  
- Laravel 10+  
- MySQL  
- Node.js (für Tailwind CSS)

### 4. Einrichtung
1. **Projekt Klonen**
   ```bash
   git clone https://github.com/your-username/project-name.git
   ```
2. **Abhängigkeiten Installieren**
   ```bash
   composer install
   npm install && npm run dev
   ```
3. **env-Datei Erstellen**
   ```bash
   cp .env.example .env
   ```
   `DB_CONNECTION` auf `mysql` setzen.
4. **App-Schlüssel Generieren**
   ```bash
   php artisan key:generate
   ```
5. **Migration Ausführen**
   ```bash
   php artisan migrate
   ```
6. **Seed (optional)**
   ```bash
   php artisan db:seed
   ```
7. **Server Starten**
   ```bash
   php artisan serve
   ```
# BookReview
