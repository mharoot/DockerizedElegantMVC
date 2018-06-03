FROM mysql:latest

RUN mysql -uroot -ppassword \
    && CREATE DATABASE emvc \
    && USE emvc\
    && emvc < emvc.sql

EXPOSE 80