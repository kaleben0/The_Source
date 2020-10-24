<h1>The Source - A Customizable Startpage</h1>

<h4>Built with HTML/CSS/PHP/JS/JQuery</h4>

* Demo Site - http://thesourcepage.000webhostapp.com/
* Username:  the_demo
* Password: thedemo

<h5>Requirements</h5>

* Webserver (Apache/Nginx)
* MySQL
* PHP 7.0+

<h5>Software/Plugins Utilized</h5>

* CodeMirror - https://codemirror.net/
* Google Fonts - https://fonts.google.com/
* Font Awesome - https://fontawesome.com/
* HTAM - https://github.com/Maxelweb/HTAM
* JQuery - https://jquery.com/
* JQueryUI - https://jqueryui.com/
* MySQL Edit Table - https://sourceforge.net/projects/sql-edit-table/
* Tipr - https://github.com/lt1946/Tipr
* Weather Widget - https://weatherwidget.io/

<h5>Features</h5>

* 5 Custom Draggable Frames <---New!
* Google Multi-Search w/ 24 Custom Searches <---New!
* Customize Your CSS <---New!
* Clock
* Weather Widget from https://weatherwidget.io/
* Password Generator
* Keyboard Shortcut Keys
* Mobile View
* Message / Wallpaper changes based on time of day
* Wallpaper now supports animated GIF format (My collection - https://imgur.com/a/A14dP6h)

<h3>Installation</h3>

* Install MySQL Server, PHP, and Webserver (Apache/Nginx)
* git clone https://github.com/kaleben0/The_Source.git in your webserver directory
* Create a DB & User in MySQL
* Import the_source.sql into your new db (usually something like (without quotes) 'mysql -u "username" -p "new database name" < the_source.sql')
* Update /functions/source_db.php, /functions/db_index.php with your database settings (database name, host, username, password)
* Click the Gear icon in the upper right corner and edit your settings.

<h5>Modify your php.ini (for image uploads)</h5>

* This sets the max download size as 20Mb, you can make it higher if needed.

`file_uploads = On`
`upload_max_filesize = 20M`
`post_max_size = 20M`

<h5>Permissions</h5>

* Set the owner/group of the directory as the default for your webserver (www-data) <br>
`chown -R www-data:www-data the_source`<br>
* Set your images directory as writable so that you can upload your images<br>
`chmod -R 755 the_source/images/`<br>
* Set your custom.css file as writable so that you can customize your css<br>
`chmod 777 the_source/css/custom.css`<br>

<h3>It is HIGHLY recommended that you protect your site with at least Basic Authentication </h3>
* HTAM (HTAccess Manager) can be accessed in the Main Menu, which you can use to add username & password as well as set up your .htaccess file.

<h2>Screen Shots</h2>

![SS1](/screenshots/capture-main.png)

![SS2](/screenshots/capture-search.png)
