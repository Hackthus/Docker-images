FROM php:8.2-apache


RUN apt-get update && apt-get upgrade -y \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli pdo pdo_mysql

RUN useradd -m -d /home/hackthus -s /bin/bash hackthus \
    && chown -R hackthus:hackthus /var/www/html


USER hackthus
EXPOSE 80

CMD ["apache2-foreground"]
