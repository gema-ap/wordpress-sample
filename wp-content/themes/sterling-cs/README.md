# Sterling Commercial Solutions - WordPress Theme

Professional commercial cleaning services WordPress theme converted from Astro. Features modern design, responsive layouts, and industry-specific content sections.

## Features

- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Modern hero section with call-to-action
- ✅ Service cards with image backgrounds
- ✅ Industry carousel with navigation
- ✅ Custom navigation menus
- ✅ Widget-ready footer areas
- ✅ SEO-friendly structure
- ✅ Accessibility features (ARIA labels, keyboard navigation)

## Requirements

- WordPress 6.0 or higher
- PHP 8.0 or higher
- Node.js 18.20+ (for development only)

## Installation

### 1. Upload Theme to WordPress

**Option A: Via WordPress Admin**
1. Zip the `wp-theme` folder
2. Go to WordPress Admin → Appearance → Themes → Add New
3. Click "Upload Theme" and select the zip file
4. Click "Install Now" and then "Activate"

**Option B: Via FTP/File Manager**
1. Upload the entire `wp-theme` folder to `/wp-content/themes/`
2. Rename it to `sterling-theme` (or your preferred name)
3. Go to WordPress Admin → Appearance → Themes
4. Activate "Sterling Commercial Solutions"

### 2. Configure Site Identity

1. Go to **Appearance → Customize → Site Identity**
2. Set your **Site Title**: "Sterling Commercial Solutions"
3. Set your **Tagline**: "Your trusted partner for professional industrial cleaning services"
4. Upload a logo (optional - currently using SVG icon)

### 3. Create Navigation Menus

1. Go to **Appearance → Menus**
2. Create a new menu called "Primary Navigation"
3. Add custom links:
   - About Us → `#about`
   - Services → `#services`
   - Industries → `#industries`
4. Assign to "Primary Menu" location
5. Save menu

### 4. Configure Footer Widgets

1. Go to **Appearance → Widgets**
2. Add widgets to three footer areas:
   - **Footer Widget Area 1**: Custom HTML or Navigation Menu (Our Story)
   - **Footer Widget Area 2**: Custom HTML or Navigation Menu (Services)
   - **Footer Widget Area 3**: Custom HTML or Navigation Menu (Contact)

### 5. Set Homepage

1. Go to **Settings → Reading**
2. Select "A static page" for homepage displays
3. Choose "Front Page" as your homepage
4. Save changes

## Theme Structure

```
wp-theme/
├── style.css                    # Theme header & info
├── functions.php                # Theme setup & functions
├── header.php                   # Site header
├── footer.php                   # Site footer
├── front-page.php               # Homepage template
├── assets/
│   ├── css/
│   │   └── main.css            # Main stylesheet
│   ├── js/
│   │   └── main.js             # Main JavaScript
│   └── images/                  # Theme images
├── template-parts/
│   ├── content-apart-cards.php  # "What Sets Us Apart" cards
│   ├── content-service-cards.php # Service cards
│   └── content-carousel.php     # Industry carousel
└── README.md                    # This file
```

## Customization

### Change Colors

Edit CSS variables in `assets/css/main.css`:

```css
:root {
    --sterling-silver: #b7bcc2;
    --deep-slate: #434a54;
    --mountain-blue: #2e5d89;
    --lake-mist: #e7eef3;
    --warm-copper: #c67133;
}
```

### Replace Background Images

#### Hero Background
Edit in `assets/css/main.css` line 43:
```css
--hero-bg-image: url('your-image-url.jpg');
```

#### Service Card Images
Edit in `template-parts/content-service-cards.php` - update the `$services` array image URLs.

#### Industry Carousel Images
Edit in `template-parts/content-carousel.php` - update `<img src="">` attributes.

### Modify Content Sections

- **Hero Content**: Edit `front-page.php` lines 12-72
- **What Sets Us Apart**: Edit `template-parts/content-apart-cards.php`
- **Services**: Edit `template-parts/content-service-cards.php`
- **Industries Carousel**: Edit `template-parts/content-carousel.php`

### Add Custom Post Types

To make services and industries dynamic, add to `functions.php`:

```php
// Register Services Custom Post Type
function sterling_register_services_cpt() {
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools',
    ));
}
add_action('init', 'sterling_register_services_cpt');
```

## Social Media Links

Update in `footer.php` lines 50-64:
Replace `#` with your actual social media URLs.

## Support

For issues or questions about the theme:
- Email: support@sterlingcommercialsolutions.com
- Documentation: See original Astro project README

## Migration Notes

This theme was converted from an Astro static site. Key differences:

- **Dynamic Menus**: WordPress navigation menus replace hard-coded links
- **Widget Areas**: Footer content can be managed via widgets
- **Template Parts**: Content sections separated for easier customization
- **PHP Functions**: SVG icons rendered via PHP function
- **WordPress Integration**: Uses wp_head(), wp_footer(), body_class() etc.

## Credits

- **Original Design**: Astro static site
- **Icons**: Lucide Icons (inline SVG)
- **Fonts**: Google Fonts (Montserrat, Source Sans 3, Lora)
- **Images**: Unsplash (placeholder images - replace with your own)

## License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html
