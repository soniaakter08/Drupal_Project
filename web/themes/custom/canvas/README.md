canvas_theme — quick install

1. Copy the `canvas_theme` folder into `web/themes/custom/canvas_theme`.
2. If using SASS, compile `css/style.scss` into `css/style.css`:
   npx sass css/style.scss css/style.css --no-source-map
3. Enable the theme:
   drush en canvas_theme -y
   drush config-set system.theme default canvas_theme
4. Clear cache:
   drush cr
5. Visit the page:

- http://my-first-drupal10-app.lndo.site:8000/

6. Screenshot:

## Home page

- ![Alt text](https://github.com/soniaakter08/Drupal_Project/blob/master/web/themes/custom/canvas/images/home_page.png)

## About page

- ![Alt text](https://github.com/soniaakter08/Drupal_Project/blob/master/web/themes/custom/canvas/images/about_page.png)
