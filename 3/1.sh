#!/bin/bash

echo "$(docker rm -f nginx)";
echo "$(docker rm -f datacontainer)";
echo "$(docker rm -f mariadb)";


echo "$(docker run --name datacontainer -d -v nginx:/usr/share/nginx/html -v wordpress:/var/lib/mysql/ centos)";

echo "$(docker run --name mariadb -d -p 3306:3306 -e MYSQL_ROOT_PASSWORD=mariadb -e MYSQL_DATABASE1=wordpress_db -e MYSQL_USER1=moodle -e MYSQL_PASSWORD1=moodle --volumes-from datacontainer orboan/dcsss-mariadb)";

echo "$(docker run --link mariadb:mariadb --name nginx --volumes-from datacontainer -d -p 8081:80 nginx)";

echo"$(wget http://wordpress.org/latest.tar.gz)";

echo "$(tar -xzvf latest.tar.gz)";

echo "$(docker cp wordpress datacontainer:/usr/share/nginx/html)";

#echo "$(docker exec httpd /bin/bash -c "yum install -y php-mysql ")"
#echo "Espera 30 segundos que se esta instalando el php-mysql y aprieta enter";
#read ;
echo "$(docker cp wp-config.php datacontainer:/usr/share/nginx/wordpress)";

#echo "$(docker stop httpd)";

#echo "$(docker start httpd)";

echo "$(rm latest.tar.gz)";

echo "$(rm -rf wordpress)";

