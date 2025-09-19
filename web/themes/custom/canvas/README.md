My Custom Theme — quick install

1. Copy the `my_custom_theme` folder into `web/themes/custom/my_custom_theme`.
2. If using SASS, compile `css/style.scss` into `css/style.css`:
   npx sass css/style.scss css/style.css --no-source-map
3. Enable the theme:
   drush en my_custom_theme -y
   drush config-set system.theme default my_custom_theme
4. Clear cache:
   drush cr
