FROM debian:buster

RUN apt-get update && apt-get install -y ngnix openssl

COPY ./conf/nginx.cnf /etc/nginx
COPY ./tools /var/www

EXPOSE 443

CMD ["/var/www/start.sh"]