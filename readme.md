## Laravel SAAS App

Laravel SAAS App is a web application framework which allows its customers to have their individual and tailored database over the single code base.

###Features:
1.	User registration with sub domain feature  (i.e. user will login by using user.doamin.com)
2.	User will have own database (i.e. Separate database will be created upon user registration)
3.	User will download dummy html content to pdf.


####Advantages:
1. Very little codebase modification, easy to ensure client data does not get mixed.
2. No modification is required to your existing single-tenant codebase.
3. You will only have to modify the configuration file to select a database depending on the client.

####Disadvantages:
Multiple databases to manage so in the event of DB schema updates, you will have to update each and every database.

## Sub Domain Instructions

###Update in etc folder
1.	Go to start.
2.	Left click in notepad->select run by administration.
3.	In notepad, click File->open->c:->window->system32->driver->etc->hosts open it.
4.	In that file add domain 127.0.0.1  subdomainname.anything  eg: subdomain.com
5.	Save


###Update in apache
1.	Open xampp, Click config then choose browse apache.
2.	Open conf->extra->httpd.vhosts.conf open it
3.	Copy paste below code to last of that file

<VirtualHost *>
    DocumentRoot "D:\server\htdocs"       /* here locate your  htdocs*/
    ServerName localhost
    <Directory "D:\server\htdocs">
        Options Indexes FollowSymLinks
        Options +Includes
        AllowOverride FileInfo
        AllowOverride All
        Order allow,deny
        Allow from all
        DirectoryIndex index.php index.shtml index.html index.htm
    </Directory>
</VirtualHost>

<VirtualHost *>
    DocumentRoot "D:\server\htdocs\laraapp\public"   /*here locate you project eg:subdomain.com */
    ServerName subdomain.com /*   name your subdomain eg:subdomain.com */
    ServerAlias *. subdomain.com  /*   name your subdomain eg:subdomain.com */
<Directory "D:\server\htdocs\laraapp\public">
    Order allow,deny
    Allow from all
</Directory>
</VirtualHost>


Restart your xampp. Check it in your browser  subdomain.com
