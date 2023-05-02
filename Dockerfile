FROM php:8.1-apache

WORKDIR /var/www/html/
RUN docker-php-ext-install mysqli

COPY ./php/index.php /var/www/html/
ENV HOSTNAME mysql
ENV USERNAME root
ENV DB redlockdb
ENV PASSWORD db


EXPOSE 7077
CMD ["php","-S","0.0.0.0:80","-t","./"]



