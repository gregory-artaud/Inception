FROM debian:buster

RUN apt-get update -y && apt-get install -y mariadb-server

COPY ./config/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./config/wordpress.sql .
COPY ./config/init.sh .
RUN chmod +x init.sh

EXPOSE 3306

CMD ["sh", "init.sh"]
