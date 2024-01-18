FROM mysql:8.0

ENV MYSQL_ROOT_PASSWORD=movie123

COPY ./database.sql /docker-entrypoint-initdb.d/database.sql

CMD ["mysqld"]
