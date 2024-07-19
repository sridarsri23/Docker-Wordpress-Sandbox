#!/bin/bash

# Copy wp-config.php if it does not exist
if [ ! -e /var/www/html/wp-config.php ]; then
    cp /usr/src/wordpress/wp-config-sample.php /var/www/html/wp-config.php
    sed -i 's/database_name_here/wordpress/' /var/www/html/wp-config.php
    sed -i 's/username_here/wordpress/' /var/www/html/wp-config.php
    sed -i 's/password_here/wordpress/' /var/www/html/wp-config.php
    sed -i 's/localhost/db/' /var/www/html/wp-config.php
fi

exec "$@"

