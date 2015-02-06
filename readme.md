## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Sub Domain Instructions

##Update in etc folder,
1.	Go to start.
2.	Left click in notepad->select run by administration.
3.	In notepad, click File->open->c:->window->system32->driver->etc->hosts open it.
4.	In that file add domain 127.0.0.1  subdomainname.anything  eg: subdomain.com
5.	Save


##Update in apache,
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
