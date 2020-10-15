<h1>The Source - A Customizable Startpage</h1>

<h4>Built with HTML/CSS/PHP/JS/JQuery</h4>

Software/Plugins Utilized
* Tipr - https://github.com/lt1946/Tipr
* HTAM - https://github.com/Maxelweb/HTAM
* MySQL Edit Table - https://sourceforge.net/projects/sql-edit-table/
* JQuery 3.2.1
* JQueryUI 1.12.1
* Google Fonts
* Font Awesome - https://fontawesome.com/

Features
* Clock
* Weather
* Message / Wallpaper changes based on time of day
* Wallpaper now supports animated GIF format (My collection - https://imgur.com/a/A14dP6h)
* Mobile View
* Password Generator
* Spotify Playlist Player
* Google Calendar Embed
* Shortcut Navigation Keys

Planned Features
* RRD Graph Integration
* Watchlist (Like a custom ToDo list)
* Google Authentication
* Calculator
* NotePad

Requirements
* Webserver (Apache or Nginx will work)
* MySQL Server
* Latest Version of PHP

Feature Integration Requirements (Optional)
* PrivateBin - https://privatebin.info/
* Shellinabox (Recommend Reverse Proxy) - https://github.com/shellinabox/shellinabox
* Embed URL of your Google Calendar - https://calendar.google.com/calendar/embedhelper
* Spotify Playlist of your choice - Example - https://open.spotify.com/playlist/37i9dQZF1DXdLEN7aqioXM?si=UCxK2phJRKSXPWJMti0NiA

Installation
* Install MySQL Server, PHP, and your webserver
* Install Shellinabox & PrivateBin per their instructions
* git clone https://github.com/kaleben0/The_Source.git in your webserver directory
* Create a DB & User in MySQL
* Import the_source.sql into your new db (usually something like (without quotes) 'mysql -u "username" -p "new database name" < the_source.sql')
* Update /functions/source_db.php, /functions/db_index.php with your database settings (database name, host, username, password)
* Click the Gear icon in the upper right corner and edit the record with your settings.
* Click the Edit icon in the upper left under the top nav bar to open the master directory where you can add/remove/change/favorite bookmarks

Modify your php.ini (for image uploads)
* file_uploads = On
* upload_max_filesize = 20M
* post_max_size = 20M

Permissions
* chmod -R 755 the_source/images/
* chown -R www-data:www-data the_source <--- Might be different based on your webserver of choice

PrivateBin
* For PrivateBin to display in the iframe, you need to modify this file. '/lib/Controller.php'
* Comment out this line 'header('X-Frame-Options: DENY');'


<h2>It is HIGHLY recommended that you protect your site with at least Basic Authentication </h2>
(Unless it is not accessible from the internet, then you are probably fine)

<h4>Also, this is completely open source and you can do anything you want with it. Some of the software used to make it have their own licenses that you'll have to look at those, but everything I did is open game. Enjoy! </h4>

<h2>ScreenShots</h2>

![SS1](/screenshots/capture-main.png)

![SS2](/screenshots/capture-search.png)
