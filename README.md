# docker_php_msql_binding
bind docker and php msql database


to run php page on browser 

docker run -d -p 96:80 --name my-php-app -v D:\docker_data\phphelloworld:/var/www/html php:7.4-apache

where 96 port of host or window and 80 is port of docker

for start command

docker-compose up -d

to stop command:

docker-compose down

NOTE: for test app you need to create a database named "company1", a "users" table with two columns "name" and "fav_color" in order for the errors to go away.

You can do this in localhost:8080 (or your set post) with "root" as user, "example" as password. "MySQL" selected for the system, and "db" as the server name.

if any issue feel free to ask
