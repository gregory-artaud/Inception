#!/bin/sh

wget http://fr.wordpress.org/latest-fr_FR.tar.gz
tar -xzvf latest-fr_FR.tar.gz -C /var/www/html/
cp -rf /var/www/html/wordpress/* /var/www/html/
rm -rf /var/www/html/wordpress
rm latest-fr_FR.tar.gz

service php7.3-fpm start
service php7.3-fpm stop

php-fpm7.3 --nodaemonize