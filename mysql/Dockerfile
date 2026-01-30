# Dockerfile
FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=india@123
ENV MYSQL_DATABASE=testdb

COPY init.sql /docker-entrypoint-initdb.d/
