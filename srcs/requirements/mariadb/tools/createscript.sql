-- создаем базу данных wordpress
CREATE DATABASE wordpress;

-- создаем пользователя, % обозначает, что мы можем получить доступ с другой машины
CREATE USER 'jcollin'@'%' IDENTIFIED BY 'jcollin_password';

-- wordpress.* для всех таблиц в бд; даем всем права пользователю
GRANT ALL PRIVILEGES ON wordpress.* TO 'jcollin'@'%';

-- для модификации привилегий
FLUSH PRIVILEGES;