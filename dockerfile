FROM dunglas/frankenphp

ENV SERVER_NAME=":80"

WORKDIR /app

COPY . /app

RUN install-php-extensions \
    pdo_mysql \
    gd \
    intl \
    zip \
    opcache

# Install Composer secara langsung
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/bin/composer

RUN composer install --no-interaction --prefer-dist --optimize-autoloader
