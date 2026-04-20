FROM php:8.2-apache

# dependências do intl
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl

# outras extensões
RUN docker-php-ext-install pdo pdo_mysql

# corrigir conflito de MPM
RUN a2dismod mpm_event mpm_worker && a2enmod mpm_prefork

# rewrite
RUN a2enmod rewrite

# copiar projeto
COPY . /var/www/html

# criar .env a partir do env
RUN cp /var/www/html/env /var/www/html/.env

# apontar pro /public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# configurar AllowOverride para .htaccess funcionar
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# permissões writable
RUN chown -R www-data:www-data /var/www/html/writable && \
    chmod -R 777 /var/www/html/writable

# permissões gerais
RUN chown -R www-data:www-data /var/www/html

# copiar script de inicialização
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

CMD ["docker-entrypoint.sh"]