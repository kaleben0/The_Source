![SS1](/screenshots/capture-main.png)

# The Source - Customizable Startpage

## Built with HTML/CSS/PHP/JS/JQuery

### Requirements

- Webserver (Apache/Nginx)
- MySQL
- PHP 7.4+

### Software/Plugins Utilized

- [CodeMirror](https://codemirror.net/)
- [Google Fonts](https://fonts.google.com/)
- [Font Awesome](https://fontawesome.com/)
- [HTAM](https://github.com/Maxelweb/HTAM)
- [JQuery](https://jquery.com/)
- [JQueryUI](https://jqueryui.com/)
- [Tipr](https://github.com/lt1946/Tipr)
- [Weather Widget](https://weatherwidget.io/)

### Features

![SS2](/screenshots/capture-search.png)

- 10 Custom Categories <---New!
- 5 Custom Draggable Frames <---New!
- Google Multi-Search w/ 24 Custom Searches <---New!
- Customize Your CSS <---New!
- Customizable Wallpaper & Avatar/Logo
- Wallpaper / Message changes based on time of day
- Wallpaper now supports animated GIF format - [Imgur Sample Collection](https://imgur.com/a/A14dP6h)
- [Customizable Weather Widget](https://weatherwidget.io/)
- Password Generator
- Keyboard Shortcut Keys
- Mobile View
- Clock

## Installation

- Install MySQL Server, PHP, and Webserver (Apache/Nginx)
- `git clone https://github.com/kaleben0/The_Source.git` in your webserver directory
- Create a DB & User in MySQL
- Import the_source.sql into your new db (usually something like (without quotes) 'mysql -u "username" -p "new database name" < the_source.sql')
- Update /functions/source_db.php with your database settings (database name, host, username, password)
- Click the Gear icon in the upper right corner and edit your settings.

### Modify your php.ini (for image uploads)

- This sets the max download size as 20Mb, you can make it higher if needed.

<pre><span>
  `file_uploads = On`<br>
  `upload_max_filesize = 20M`<br>
  `post_max_size = 20M`<br>
</span></pre>

### Permissions

Set the owner/group of the directory as the default for your webserver (www-data)

  <pre><span>sudo chown -R www-data:www-data The_Source</span></pre>

Set your images directory as writable so that you can upload your images

  <pre><span>sudo chmod -R 755 The_Source/images/</span></pre>

Set your custom.css file as writable so that you can customize your css

  <pre><span>sudo chmod 777 The_Source/css/custom.css</span></pre>

#### HIGHLY recommended that you protect your site with at least Basic Authentication
- HTAM (HTAccess Manager) can be accessed in the Main Menu, which you can use to
 create a .htaccess and add a username & password.
