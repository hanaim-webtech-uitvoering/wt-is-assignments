apt-get update
apt-get upgrade

apt-get install -y wget git
wget https://getcomposer.org/installer -O composer-install.php
php composer-install.php
mv composer.phar /usr/local/bin/composer

cd /srv/assignments
composer require --dev phpunit/phpunit ^9