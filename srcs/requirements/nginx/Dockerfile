FROM debian:buster

RUN apt update -y && apt upgrade -y && apt install -y nginx openssl

RUN rm /etc/nginx/sites-available/default
RUN rm /etc/nginx/sites-enabled/default

COPY config/nginx.conf /etc/nginx/sites-available/default

RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default

RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
	-keyout /etc/nginx/ssl/www.gartaud.42.fr.key -out /etc/nginx/ssl/www.gartaud.42.fr.crt \
	-subj "/C=FR/ST=France/L=Paris/O=Gartaud/OU=42/CN=www.gartaud.42.fr"
RUN chmod 777 /etc/nginx/ssl/*
RUN chmod 777 -R /var/www 
RUN chown -R www-data:www-data /var/www/
EXPOSE 443
CMD ["nginx", "-g", "daemon off;"]
