#!/bin/bash

echo "$(docker rm -f nextcloud)";
echo "$(docker rm -f datacontainer)";
echo "$(docker rm -f mariadb)";


echo "$(docker run --name datacontainer -d -v nextcloud:/var/www/html -v nextcloud:/var/lib/mysql/ centos)";

echo "$(docker run --name mariadb -d -p 3306:3306 -e MYSQL_ROOT_PASSWORD=mariadb -e MYSQL_DATABASE1=wordpress_db -e MYSQL_USER1=moodle -e MYSQL_PASSWORD1=moodle --volumes-from datacontainer orboan/dcsss-mariadb)";

echo "$(docker run --link mariadb:mariadb --name nextcloud --volumes-from datacontainer -d -p 8080:80 nextcloud)";





