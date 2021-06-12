bst-child
=========

A starter Child Theme for BST

Version 1.1

-----

BST is a Bootstrap 4 Starter Theme, for WordPress

Get BST here: [https://github.com/SimonPadbury/b4st](https://github.com/SimonPadbury/b4st)
-----

**bst-child** contains the minimum requirement for a child theme based off **bst**.

So far, all it has is an enqueue function for the linking the stylesheet `css/styles.css`  

-----

##Notes

(1.) You can't put your styles in this file (style.css). Put them in css/bst-child.css

(2.) Since downloads of BST from GitHub will be in a folder named 'bst-master', therefore in the CSS comment header above I have put 'Template: bst-master'. If the BST root folder has a different name, then you must make the SAME change to the Template line in the CSS comment above.

(3.) You can make this child theme your own by simply:

(a.) Change the name of the root folder
(b.) Change the name of the stylesheet css/style.css
(c.) In functions.php, do a search-and-replace for these two terms:

     "bst-child" => "your-theme-name"
     "bst_child" => "your_theme_name"

(d.) Change the Theme Name in the CSS comment in this file (style.css)

# b4st – A Bootstrap 4 Starter Theme, for WordPress

*Version 2.7.1*

[https://github.com/SimonPadbury/b4st](https://github.com/SimonPadbury/b4st)

------------------

**b4st is a simple, Gutenberg-compatible WordPress starter theme loaded with Bootstrap 4 and Font Awesome 5.**

## Basic features

* [UNLICENCE](http://unlicense.org) (open source).

* Simple, intuitive, clean code. Theme CSS and JS, functions and loops are organized into different folders.

* A starter CSS theme – `/theme/css/b4st.css`, enqueued. (Note: do not put your styles in `styles.css`, because that is not enqueued.)

* `Sidebar-widget-area` is optional. If no widgets are dropped into the sidebar, then the sidebar will not be shown on the frontend (and so the main column is automatically the full width of the Bootstrap `.container`).

## Dependencies

* jQuery and Modernizr – enqueued (served from the WordPress core).

* Bootstrap 4.3.1 CSS – enqueued (served by `cdnjs.com` CDN).

* Bootstrap 4.3.1 and Popper 1.14.7 bundle JS – enqueued (served by `cdnjs.com` CDN). Popper is needed by Bootstrap popovers, tooltips and collapsed navbar “hamburger” action.

* Font Awesome 5.8.1 – enqueued (CSS served by `use.fontawesome.com` CDN).

## Bootstrap Integration

* Bootstrap navbar with WordPress menu and search.
	* Navbar dropdowns (child menus) are handled by a [custom walker nav menu class](https://github.com/SimonPadbury/b4st/blob/master/functions/navbar.php).

* Bootstrap customized comments and feedback response form.

* Bootstrap pagination for:
  * blog index and blog category pages
  * Bootstrap pagination for posts/pages if split over a series of 'pages'

## Gutenberg Compatibility

* Gutenberg editor stylesheet – into which has been copy-pasted the typography styles from Bootstrap 4’s _Reboot_ CSS (see [http://getbootstrap.com/docs/4.3.1/content/reboot/](http://getbootstrap.com/docs/4.1/content/reboot/)).
  * Note: Blog post and page content in theme’s frontend are controlled by Bootstrap’s columnar grid layout – not by the Gutenberg editor CSS. This means that _b4st does not support Gutenberg’s extra-wide image blocks_.

## Child-Theme Friendly

* Many functions are pluggable.
  * Note: Although b4st was originally intended as a simple starter theme (hence the name **b4st**), several developers wanted child theme capability. So the functions have been made ‘pluggable’. (However, b4st can still be used as a starter theme.)

* Theme [hooks](/functions/hooks.php) – paired _before_ and _after_ the navbar, post/page main, (optional sidebar) and footer. Parent theme hooks are able to recieve [actions](https://developer.wordpress.org/plugins/hooks/actions/) from a child theme.

* Also, the navbar brand, navbar search form and sub-footer “bottomline” are inserted using pluggable hooks. So, a child theme can override these.

* _Documentation on b4st theme hooks can be found in the [wiki](https://github.com/SimonPadbury/b4st/wiki/b4st-Theme-Hooks)._

style base https://codepen.io/oliviale/pen/LYYrKMV

# Development Folder Structure

```
version: "3.9"
    
services:
  db:
    image: mysql:5.7
    volumes:
      - db_data:/var/lib/mysql
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: somewordpress
      MYSQL_DATABASE: wordpress
      MYSQL_USER: wordpress
      MYSQL_PASSWORD: wordpress
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    ports:
      - 8088:80
    environment:
      - PMA_HOST=db
    depends_on:
      - db
      
  wordpress:
    depends_on:
      - db
    image: wordpress:latest
    ports:
      - "8000:80"
    restart: always
    environment:
      WORDPRESS_DB_HOST: db:3306
      WORDPRESS_DB_USER: wordpress
      WORDPRESS_DB_PASSWORD: wordpress
      WORDPRESS_DB_NAME: wordpress
    volumes:
      - wordpress:/var/www/html
      - ./wp-content/plugins:/var/www/html/wp-content/plugins
      - ./wp-content/themes:/var/www/html/wp-content/themes
      - ./wp-content/uploads:/var/www/html/wp-content/uploads
volumes:
  db_data: {}
  wordpress: {}
```