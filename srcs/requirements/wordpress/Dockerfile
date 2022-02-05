FROM debian:buster

RUN apt update -y && apt upgrade -y && apt install -y \
	wget php-cli php-mysql php-curl php-gd php-intl php-fpm

WORKDIR /var/www/html

COPY ./config/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY ./config/wp-config.php /app/wp-config.php
COPY ./config/init.sh /app/init.sh

EXPOSE 9000

RUN chmod +x /app/init.sh
RUN /app/init.sh

CMD ["php-fpm7.3", "--nodaemonize"]
