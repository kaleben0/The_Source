<h1>The Source - A Customizable Startpage</h1>

<h4>Built with HTML/CSS/PHP/JS/JQuery</h4>

* Demo Site - http://thesourcepage.000webhostapp.com/
* Username:  the_demo
* Password: thedemo

Requirements
* Webserver (Apache or Nginx will work)
* MySQL Server
* PHP 7.0+

Software/Plugins Utilized
* CodeMirror - https://codemirror.net/
* Google Fonts - https://fonts.google.com/
* Font Awesome - https://fontawesome.com/
* HTAM - https://github.com/Maxelweb/HTAM
* JQuery - https://jquery.com/
* JQueryUI - https://jqueryui.com/
* MySQL Edit Table - https://sourceforge.net/projects/sql-edit-table/
* Tipr - https://github.com/lt1946/Tipr
* Weather Widget - https://weatherwidget.io/


Features
* 5 Custom Draggable Frames <---New!
* Google Multi-Search w/ 24 Custom Searches <---New!
* Customize Your CSS <---New!
* Clock
* Weather
* Password Generator
* Keyboard Shortcut Keys
* Message / Wallpaper changes based on time of day
* Mobile View
* Wallpaper now supports animated GIF format (My collection - https://imgur.com/a/A14dP6h)

<h3>Installation</h3>

* Install MySQL Server, PHP, and your webserver
* git clone https://github.com/kaleben0/The_Source.git in your webserver directory
* Create a DB & User in MySQL
* Import the_source.sql into your new db (usually something like (without quotes) 'mysql -u "username" -p "new database name" < the_source.sql')
* Update /functions/source_db.php, /functions/db_index.php with your database settings (database name, host, username, password)
* Click the Gear icon in the upper right corner and edit your settings.

Modify your php.ini (for image uploads)
* file_uploads = On
* upload_max_filesize = 20M
* post_max_size = 20M

Permissions
* chmod -R 755 the_source/images/
* chmod 777 the_source/css/custom.css
* chown -R www-data:www-data the_source <--- Might be different based on your webserver of choice

<h3>It is HIGHLY recommended that you protect your site with at least Basic Authentication </h3>
* The user icon in the upper right side launches HTAM, which you can use to add username & password as well as set up your .htaccess file.

<h4>This is completely open source and you can do anything you want with it. Some of the software used to make it have their own licenses that you'll have to look at those, but everything I did is open game. Enjoy!</h4>

<h2>Screen Shots</h2>

![SS1](/screenshots/capture-main.png)

![SS2](/screenshots/capture-search.png)
