#!/usr/bin/env bash

DBUSER='vagrant'
DBPASSWD='vagrant'
DBNAME='marussia'
php_ini="/etc/php/7.2/fpm/php.ini"

echo "*** Configure Database"

echo "mysql-server mysql-server/root_password password ${DBPASSWD}" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password ${DBPASSWD}" | debconf-set-selections

sudo mysql -uroot -p${DBPASSWD} -e "CREATE DATABASE ${DBNAME}"
sudo mysql -uroot -p${DBPASSWD} -e "grant all privileges on $DBNAME.* to '${DBUSER}'@'localhost' identified by '${DBPASSWD}'"

echo "*** Configure the php.ini"

sed -i "s/error_reporting = .*/error_reporting = E_ALL/" ${php_ini}
sed -i "s/display_errors = .*/display_errors = On/" ${php_ini}

echo "*** Configure the default vhost"

cat /var/www/marussia.local/provision/templates/nginx-default > /etc/nginx/sites-available/default

# restart nginx
sudo systemctl reload nginx

cd /var/www/marussia.local

# install vendor packages
composer install

npm install
npm run production

echo "*** DEV ENV is already configured!"
