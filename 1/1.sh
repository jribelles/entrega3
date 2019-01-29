#!/bin/bash

echo "$(docker rm -f httpd)";
echo "$(docker rm -f nginx)";
echo "$(docker rm -f datacontainer)";

echo "$(docker run --name datacontainer -d -v DataVolume1:/var/www/html -v DataVolume1:/usr/share/nginx/html  centos)";
echo "$(docker run --name httpd --volumes-from datacontainer -d -p 8080:80 jribelles/centos-httpd-php-jribelles)";

echo "$(docker run --name nginx --volumes-from datacontainer -d -p 8081:80 nginx)";
