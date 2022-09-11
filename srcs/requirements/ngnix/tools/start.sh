#!/bin/bash

# проверяем, существует ли такой файл и если нет, то создаем ssl сертификат
if [! -f /etc/ssl/certs/nginx-selfsigned.crt]; then
    echo "Make a certificate...";
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/nginx-selfsigned.key  \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -subj "/C=RU/ST=Tatarstan/L=Kazan/O=wordpress/CN=jcollin.42.fr";
    echo "Done!";
fi

ngnix