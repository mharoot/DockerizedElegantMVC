# Dockerized ElegantMVC 
LEMP STACK, Using php-fpm, with nginx as a frontend load balancer, with redis for session management, and MySQL.

#### MySQL note
There is one thing that the docker-compose.yml doesnt take care of yet.  That's exporting our emvc.sql file

1. I manually went into the `mysql` container after running `docker-compose up`.
2. Then I run: `docker exec -it mysql mysql -uroot -p`
3. Then I create the database named `test`
4. Then I run: `use test`
5. Finally I just copied and pasted the content of emvc.sql

### TODO:
Make steps 1-5 completely automated by creating a docker file for MySQL and making the appropriate modifcations in the mysql service.