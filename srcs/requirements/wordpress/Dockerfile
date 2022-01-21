FROM debian:buster

RUN apt update -y && apt upgrade -y && apt install -y \
	wget php-cli php-mysql php-curl php-gd php-intl php-fpm

WORKDIR /var/www/html

RUN wget http://fr.wordpress.org/latest-fr_FR.tar.gz
RUN tar -xzvf latest-fr_FR.tar.gz -C .
RUN rm latest-fr_FR.tar.gz

COPY ./config/www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000

CMD ["tail", "-f", "/dev/null"]
