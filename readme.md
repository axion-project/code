# APAC-Gold WordPress Theme

A custom WordPress theme for APAC GOLD.

## Installation

1. Download the theme files
2. Upload the entire folder to your WordPress themes directory (`wp-content/themes/`)
3. Activate the theme through the WordPress admin dashboard (Appearance > Themes)

## Theme Features

- Responsive design for all device sizes
- Custom homepage with service tiles
- Interactive particle background effect
- Customizable colors through the WordPress Customizer
- Support for menus in header and footer
- SEO-friendly markup

## Required Plugins

This theme works best with the following plugins:
- None required, but compatible with most popular WordPress plugins

## Customization

### Theme Options

You can customize the theme using the WordPress Customizer (Appearance > Customize):

1. **Site Identity**: Change the site title, tagline, and logo
2. **Colors**: Adjust the theme's background color
3. **Menus**: Set up the primary and footer navigation menus

### Service Tiles

The service tiles on the homepage can be edited in the `index.php` file. For a more customizable solution, consider creating a custom widget or using Advanced Custom Fields plugin.

### Images

Place your images in the `assets/images/` directory:
- logo.png - Main logo
- question.png - Ask a Question icon
- purchase.png - Purchase Order icon
- track.png - Track Order icon
- info.png - Information icon
- solve.png - Solve a Problem icon

## Developer Notes

### File Structure

- `style.css` - Main stylesheet and theme information
- `functions.php` - Theme setup and functionality
- `header.php` - Header template
- `footer.php` - Footer template
- `index.php` - Main template file and homepage
- `single.php` - Single post template
- `page.php` - Page template
- `inc/enqueue.php` - Script and style registration
- `assets/js/scripts.js` - Custom JavaScript including particles.js configuration

### CSS Classes

The theme uses the following main CSS classes:
- `.logo-container` - Logo and tagline container
- `.services` - Container for service tiles
- `.service` - Individual service tile

## Support

For support or customization requests, please contact APAC GOLD.

## License

This theme is licensed under the GPL v2 or later.
