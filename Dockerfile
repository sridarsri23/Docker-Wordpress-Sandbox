# Use the official WordPress image with PHP 7.4 and Apache
FROM wordpress:php7.4-apache

# Install vim
RUN apt-get update && apt-get install -y vim

# Copy custom php.ini configuration
COPY php.ini /usr/local/etc/php/conf.d/php.ini

# Download and extract WordPress 6.4.5 if it does not exist
RUN curl -o wordpress.tar.gz https://wordpress.org/wordpress-6.4.5.tar.gz && \
    tar -xzf wordpress.tar.gz --strip-components=1 -C /usr/src/wordpress && \
    rm wordpress.tar.gz

# Set working directory
WORKDIR /var/www/html

# Ensure the wp-config.php file is created
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]

