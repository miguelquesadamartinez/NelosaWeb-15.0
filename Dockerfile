# Dockerfile para PHP 5.6 con soporte legacy mysql_* functions
FROM php:5.6-apache

# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysql mysqli pdo pdo_mysql

# Habilitar módulos Apache
RUN a2enmod rewrite

# Configurar ServerName para evitar warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Configurar charset por defecto (ISO-8859-1 para legacy code)
RUN echo "php_value default_charset \"ISO-8859-1\"" >> /etc/apache2/conf-available/charset.conf && \
    a2enconf charset

# Configurar PHP para desarrollo legacy
RUN { \
    echo 'display_errors = On'; \
    echo 'error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT'; \
    echo 'log_errors = On'; \
    echo 'error_log = /var/log/apache2/php_errors.log'; \
    echo 'short_open_tag = On'; \
    echo 'register_globals = Off'; \
    echo 'magic_quotes_gpc = Off'; \
    echo 'session.auto_start = 0'; \
    echo 'default_charset = "ISO-8859-1"'; \
    echo 'max_execution_time = 300'; \
    echo 'memory_limit = 256M'; \
    echo 'post_max_size = 32M'; \
    echo 'upload_max_filesize = 32M'; \
} > /usr/local/etc/php/conf.d/legacy.ini

# Configurar DocumentRoot en /var/www/html
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Configurar AllowOverride para .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Exponer puerto 80
EXPOSE 80

# Comando por defecto
CMD ["apache2-foreground"]
