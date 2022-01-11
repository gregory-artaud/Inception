FROM debian:buster

RUN apt-get update -y && apt-get install -y mariadb-server

COPY ./config/init.sh .
RUN chmod +x init.sh

EXPOSE 3306

CMD ["sh", "init.sh"]
