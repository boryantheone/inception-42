#указывает базовый образ (н-р из публичного репозитория докерхаба)
FROM debian:buster

# выполняет команды(как бы создает слой отдельный и сохраняет его, 
# затем на основе нового слоя выполняются уже другие команды)
RUN apt-get update && apt-get install -y mariadb-server 

# копируем файлы с нашего хоста в контейнер
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www

# информирует докер о том, что контейнер слушает определенный порт, когда работает
EXPOSE 3306

RUN service mysql start && mysql < /var/www/createscript.sql && rm -rf /var/www/createscript.sql

# должна быть только одна инструкция  CMD, иначе выполняется последняя
# Основная цель CMD - предоставить параметры по умолчанию для выполняющегося контейнера.
CMD ["/usr/bin/mysqld_safe"]