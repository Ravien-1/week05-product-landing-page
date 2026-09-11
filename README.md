# Luzon Furniture Responsive Product Landing Page

![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=flat-square&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-Responsive-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-Components-F7523F?style=flat-square&logo=laravel&logoColor=white)

## Introduction

A product landing page is a focused web page that introduces a business, presents its products or services, and encourages visitors to take an action. These actions may include viewing products, contacting the business, requesting more information, or placing an order.

Landing pages are important because they give customers a clear first impression of a business. A well-designed page can make products easier to explore, strengthen the business's identity, build customer trust, and guide visitors toward contacting or buying from the business.

The purpose of this project is to create a modern and responsive online presentation for **Luzon Furniture**, a real furniture business located in Sta. Cruz, Laguna. The website displays actual furniture products, prices, store benefits, and contact information through a clean interface inspired by modern furniture e-commerce designs. The project was developed using Laravel, Blade Components, and Tailwind CSS.

## Objectives

This project was created to accomplish the following objectives:

- Build a complete product landing page using Laravel.
- Create reusable user interface elements with Blade Components.
- Apply a mobile-first approach to responsive web design.
- Use Tailwind CSS utility classes for styling and layout.
- Organize page content using Flexbox and CSS Grid.
- Maintain consistent colors, typography, buttons, cards, and spacing.
- Display actual business information and supplied product images accurately.
- Improve usability across desktop, tablet, and mobile devices.
- Practice clean and maintainable frontend development.
- Document the project for GitHub and a professional portfolio.

## Responsive Web Design

Responsive web design allows the landing page to adjust to different screen sizes. This is important because customers may visit the website using a mobile phone, tablet, laptop, or desktop computer.

### Mobile First Design

The project follows a mobile-first approach. The layout begins with a simple single-column arrangement for small screens. Additional columns and wider spacing are applied as the available screen size increases. This keeps the content readable and the controls easy to use on mobile devices.

### Responsive Breakpoints

Tailwind responsive prefixes are used to change the layout at different screen sizes:

```html
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
```

- The default layout uses one column for mobile devices.
- `sm:grid-cols-2` displays two columns on small tablets and wider screens.
- `lg:grid-cols-3` displays three columns on laptops and desktop screens.

### Flexbox

Flexbox is used for the navigation bar, buttons, contact information, and content groups that need flexible alignment.

```html
<nav class="flex items-center justify-between">
```

This keeps the logo, navigation links, and call-to-action button properly aligned.

### CSS Grid

CSS Grid is used for repeated content such as product cards, feature cards, pricing cards, and testimonials.

```html
<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
```

Grid creates an organized layout and makes the cards respond naturally to different viewport widths.

### User Experience

The page uses readable text, clear headings, visible buttons, descriptive image alternative text, and consistent spacing. Navigation links connect directly to page sections, while the mobile menu makes the navigation accessible on smaller screens. These decisions help visitors find products and contact information with less effort.

## Tailwind CSS

Tailwind CSS is a utility-first CSS framework. Instead of writing a separate custom class for every element, small utility classes are combined directly in the markup.

### Advantages of Tailwind CSS

- Speeds up interface development.
- Keeps spacing and colors consistent.
- Provides built-in responsive utilities.
- Reduces the need for repeated custom CSS.
- Makes hover and focus states easier to apply.
- Supports Flexbox and Grid layouts.
- Makes component styling easier to maintain.

### Responsive Utility Classes

The project uses utilities such as:

```html
<h1 class="text-5xl sm:text-7xl lg:text-9xl">
    Make Every Room Feel Like Home
</h1>
```

The heading becomes larger as the screen becomes wider. Other project utilities include `px-5`, `lg:px-8`, `rounded-3xl`, `shadow-lg`, `hover:-translate-y-1`, and `focus-visible:ring-4`.

### Component Styling

Tailwind classes are placed inside reusable Blade components so every repeated card or button follows the same design.

```blade
<a {{ $attributes->merge([
    'class' => 'inline-flex items-center justify-center rounded-full bg-lime px-6 py-3 font-bold text-ink transition hover:bg-ink hover:text-white'
]) }}>
    {{ $slot }}
</a>
```

## Blade Components

Blade Components are reusable interface templates provided by Laravel. They allow repeated elements to be written once and used in different areas of the application.

Reusable components improve maintainability because changes can be made in one component instead of editing the same HTML in many places. Modular UI development also keeps files shorter, reduces duplicated code, and makes each section easier to understand and test.

The project includes components for:

- Navigation bar
- Hero section
- Buttons
- Feature cards
- Product cards
- Pricing cards
- Testimonial cards
- Footer

### Sample Feature Card Component

```blade
@props(['title', 'description', 'icon'])

<article class="rounded-3xl border border-ink/10 bg-white p-6">
    <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-full bg-lime">
        {{ $icon }}
    </div>

    <h3 class="text-2xl font-bold">{{ $title }}</h3>
    <p class="mt-3 text-muted">{{ $description }}</p>
</article>
```

### Sample Component Usage

```blade
<x-feature-card
    icon="✓"
    title="Delivery with Care"
    description="Ask about delivery arrangements in Sta. Cruz and nearby areas."
/>
```

### Blade Components Folder

![Blade Components Folder](screenshots/12-blade-components-folder.png)

## User Interface Design

### Color Palette

| Color | Hex Value | Usage |
| --- | --- | --- |
| Charcoal | `#111318` | Headings, navigation, footer, and dark buttons |
| Bright Lime | `#B9FF2C` | Primary buttons, highlights, and featured elements |
| Light Gray | `#F3F4F5` | Page and section backgrounds |
| White | `#FFFFFF` | Cards and main content surfaces |
| Muted Gray | `#65676D` | Supporting descriptions and metadata |
| Brand Gold | `#B58A4A` | Existing Luzon Furniture logo details |

The limited palette gives the website a modern identity while keeping the content readable. Dark text and bright call-to-action buttons provide clear visual contrast.

### Typography

The project uses a bold condensed display font for large headings and a clean sans-serif font for paragraphs and interface labels. Large headings create a strong furniture-commerce identity, while the body font remains readable on small screens.

### Iconography

Simple icons support feature cards, contact details, delivery information, payment options, and navigation controls. Icons are used with text labels so their meaning remains clear.

### Button Styles

Buttons use rounded pill shapes, strong contrast, consistent padding, hover transitions, and visible keyboard focus rings. Primary buttons use bright lime, while secondary buttons use outlined or neutral styles.

### Card Design

Product, feature, pricing, and testimonial cards use consistent rounded corners, image proportions, borders, and internal spacing. Hover effects provide visual feedback without distracting from the content.

### Layout Consistency

Sections use the same maximum content width, spacing rhythm, heading hierarchy, and responsive grid behavior. This consistency helps visitors understand the interface and move through the page naturally.

## Folder Structure

```text
week05-product-landing-page/
├── app/
├── public/
│   └── images/
│       └── luzon-furniture/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── layouts/
│       ├── components/
│       └── pages/
├── routes/
├── screenshots/
├── documentation/
└── README.md
```

### Folder Purposes

| Folder | Purpose |
| --- | --- |
| `resources/views/layouts` | Contains the main reusable page layout shared by the landing page. |
| `resources/views/components` | Contains reusable Blade components such as the navbar, cards, buttons, hero, and footer. |
| `resources/views/pages` | Contains the main landing page that assembles the reusable components. |
| `public` | Stores publicly accessible images and other browser assets. |
| `screenshots` | Stores screenshots of the completed interface and project structure. |
| `documentation` | Stores the before-and-after comparison, planning files, and supporting documentation. |

## Featured Products

| Product | Price |
| --- | ---: |
| Curved Sectional Sofa | PHP 42,000 |
| Executive Office Chair | PHP 7,999 |
| Orange L-Shaped Sofa | PHP 13,995 |
| Director-Style Chair | PHP 3,900 |
| Vanity Mirror with Lights | PHP 1,410 |

Prices and stocks are subject to availability. Customers should contact Luzon Furniture to confirm current information.

## Screenshots

Can be found at the [text](screenshots)

## Problems and Solutions

### Product Images Did Not Appear

The original images were initially placed in the wrong public directory. They were moved to `public/images/luzon-furniture`, and the Blade image paths were updated using Laravel's `asset()` helper.

```blade
<img src="{{ asset('images/luzon-furniture/sectional-sofa.png') }}"
     alt="Curved sectional sofa sold by Luzon Furniture">
```

### Blade Template Syntax Error

An unmatched Blade conditional caused an unexpected end-of-file error. The Blade directives were checked and balanced, and Laravel's compiled view cache was cleared.

```powershell
php artisan view:clear
php artisan optimize:clear
```

### Responsive Navigation

The desktop navigation did not fit on smaller screens. A mobile menu and responsive visibility classes were added so the navigation remains usable on phones and tablets.

## Installation and Local Setup

```powershell
git clone https://github.com/Ravien-1/week05-product-landing-page.git
cd week05-product-landing-page
composer install
copy .env.example .env
php artisan key:generate
npm install
npm run build
php artisan serve
```

Open the project at:

```text
http://127.0.0.1:8000
```

This landing page uses static product data and does not require a database.

## Reflection

This activity helped me understand how Laravel Blade Components can organize a large interface into smaller and reusable parts. I also learned how Tailwind CSS responsive utilities can adjust the same design for mobile, tablet, and desktop screens. The before-and-after process showed me that consistent spacing, typography, product images, and clear buttons can improve both the appearance and usability of a landing page.

## Business Information

**Luzon Furniture**  
71 A. Regidor Street, Sta. Cruz, Laguna 4009  
Phone: 0956 814 4175  
Dealer of modern imported and local furniture

## Repository

[GitHub Repository](https://github.com/Ravien-1/week05-product-landing-page)

## Author

Ravien C. Ongkiko

