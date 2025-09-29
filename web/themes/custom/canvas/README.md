canvas_theme — quick install

1. Copy the `canvas_theme` folder into `web/themes/custom/canvas_theme`.
2. If using SASS, compile `css/style.scss` into `css/style.css`:
   npx sass css/style.scss css/style.css --no-source-map
3. Enable the theme:
   drush en canvas_theme -y
   drush config-set system.theme default canvas_theme
4. Clear cache:
   drush cr
5. Screenshot:

- ![Alt text](my-first-drupal10-app/web/themes/custom/canvas/images/home_page.png)

- ![Alt text](my-first-drupal10-app/web/themes/custom/canvas/images/about_page.png)
