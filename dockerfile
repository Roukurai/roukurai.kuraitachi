# Use the official lightweight Alpine image
FROM alpine:latest

# Enable the repositories
RUN echo "http://dl-cdn.alpinelinux.org/alpine/v$(cat /etc/alpine-release | cut -d'.' -f1,2)/main" > /etc/apk/repositories && \
    echo "http://dl-cdn.alpinelinux.org/alpine/v$(cat /etc/alpine-release | cut -d'.' -f1,2)/community" >> /etc/apk/repositories && \
    apk update

# Update package repository and install apache2, php, and necessary extensions
RUN apk add apache2 php php-apache2 php-pdo php-pdo_pgsql && \
    rm -rf /var/cache/apk/* && \
    apk update

# Expose port 80 for HTTP traffic
EXPOSE 80

# Add a simple PHP info file for testing
RUN echo "<?php phpinfo(); ?>" > /var/www/localhost/htdocs/index.php

# Start Apache in the foreground to keep the container running
CMD ["httpd", "-D", "FOREGROUND"]
