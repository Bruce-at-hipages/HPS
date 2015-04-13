# HPS
hip shared v2 with namespace support (alpha)

## use this conf to setup apache

```
<VirtualHost *:80>
        DocumentRoot /Users/bruceli/Workspace/php/hipages-package/HPS/public
        ServerName hps.localhost
        DirectoryIndex index.php index.html index.htm index.shtml
        ErrorLog "/var/log/apache2/hps_error.log"
        CustomLog "/var/log/apache2/hps_access.log" common
</VirtualHost>
<Directory /Users/bruceli/Workspace/php/hipages-package/HPS/public>
        Options MultiViews FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
        RewriteEngine On
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^ index.php [QSA,L]
</Directory>
```
