

# Docke-WP-Sandbox by SridarSri

This repository provides a Docker-based environment for running WordPress with PHP 7.4 and Apache, along with MySQL 5.7 as the database backend. It includes custom configurations and an entrypoint script to ensure proper setup.

## Contents

1. [Dockerfile](Dockerfile)
2. [docker-compose.yml](docker-compose.yml)
3. [entrypoint.sh](entrypoint.sh)
4. [php.ini](php.ini) - Custom PHP configuration (ensure this file is present in the directory)

## How to Run and Setup the Environment

Follow the steps below to set up and run the WordPress environment using Docker.

### Prerequisites

- Docker
- Docker Compose

### Steps

1. **Clone the Repository**
   ```
   git clone https://github.com/yourusername/Docker_WP_Sandbox.git
   cd Docker_WP_Sandbox
   ```

3. **Build the Docker Images**

   `docker-compose build`

4. **Run the Containers**

    `docker-compose up`

5. **Access WordPress**

    Open your web browser and navigate to http://localhost:8888. You should see the WordPress setup screen.

6. **Logging into WordPress**

The default database credentials are set in docker-compose.yml.
You will be prompted to set up an admin user during the WordPress setup process.

**Customizing for Specific Versions of WordPress and PHP**
# Changing the WordPress Version

To use a different version of WordPress, modify the curl command in the Dockerfile to download the desired version. For example, to use WordPress 5.7.2:


**Dockerfile**
```
RUN curl -o wordpress.tar.gz https://wordpress.org/wordpress-5.7.2.tar.gz && \
    tar -xzf wordpress.tar.gz --strip-components=1 -C /usr/src/wordpress && \
    rm wordpress.tar.gz
```
# Changing the PHP Version

To change the PHP version, update the FROM line in the Dockerfile. For example, to use PHP 8.0:

dockerfile

**Dockerfile**
FROM wordpress:php8.0-apache

# Custom PHP Configuration

Ensure you have a php.ini file in the same directory as your Dockerfile. Modify it as needed to customize PHP settings.
**Files**
Dockerfile: Defines the environment for WordPress, including PHP and Apache.
docker-compose.yml: Sets up the WordPress and MySQL containers and defines the necessary environment variables and volumes.
entrypoint.sh: Ensures wp-config.php is created and properly configured on startup.
php.ini: Custom PHP configuration file (ensure this file is present in the directory).

Example php.ini

Here is an example of what your php.ini might look like:

```
upload_max_filesize = 64M
post_max_size = 64M
max_execution_time = 300
```
# License

This project is licensed under the MIT License. See the LICENSE file for details.
Contact



# Environment Variables

The following environment variables are set in the docker-compose.yml file:

    WORDPRESS_DB_HOST: Database host (default: db)
    WORDPRESS_DB_USER: Database username (default: wordpress)
    WORDPRESS_DB_PASSWORD: Database password (default: wordpress)
    WORDPRESS_DB_NAME: Database name (default: wordpress)

# Database Configuration

The MySQL database is configured with the following settings in docker-compose.yml:

    MYSQL_ROOT_PASSWORD: Root password for MySQL (default: somewordpress)
    MYSQL_DATABASE: Name of the WordPress database (default: wordpress)
    MYSQL_USER: Username for the WordPress database (default: wordpress)
    MYSQL_PASSWORD: Password for the WordPress database (default: wordpress)

Ensure these settings match those in wp-config.php if you make any changes.

# Entrypoint Script

The entrypoint.sh script ensures that the wp-config.php file is created and configured with the correct database settings.
(Copy wp-config.php if it does not exist)
```
#!/bin/bash
if [ ! -e /var/www/html/wp-config.php ]; then
    cp /usr/src/wordpress/wp-config-sample.php /var/www/html/wp-config.php
    sed -i 's/database_name_here/wordpress/' /var/www/html/wp-config.php
    sed -i 's/username_here/wordpress/' /var/www/html/wp-config.php
    sed -i 's/password_here/wordpress/' /var/www/html/wp-config.php
    sed -i 's/localhost/db/' /var/www/html/wp-config.php
fi
```


