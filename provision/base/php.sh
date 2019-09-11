#!/usr/bin/env bash

php_ini="/etc/php/7.2/fpm/php.ini"

echo "*** Installing PHP"

sudo apt -y install lsb-release apt-transport-https ca-certificates

# add PHP repository
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg

echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php7.2.list

sudo apt update

# install php
sudo apt install -y php7.2 php7.2-cli php7.2-fpm php7.2-json php7.2-pdo php7.2-mysql php7.2-zip php7.2-gd php7.2-mbstring php7.2-curl php7.2-xml php7.2-bcmath php7.2-json

sudo apt dist-upgrade

# configure php.ini
sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" ${php_ini}

# install composer
sudo apt install -y composer

echo "*** PHP already installed..."
