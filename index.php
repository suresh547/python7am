#!/bin/bash
yum update -y
yum install http* php php-mysql --skip-broken -y
service httpd start
echo "<?php phpinfo();?>" > /var/www/html/index.php