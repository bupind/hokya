# hokya
setting vhost.example.conf [F:xampp\apache\conf\extra\httpd-vhosts.conf]
<VirtualHost *:80>
  ServerName honk.local
  ServerAlias www.honk.local

  DocumentRoot "F:/xampp5/htdocs/honk"

  <Directory F:/xampp5/htdocs/honk>
    Options -Indexes +FollowSymLinks
    AllowOverride All
    Require all granted
  </Directory>
</VirtualHost>
