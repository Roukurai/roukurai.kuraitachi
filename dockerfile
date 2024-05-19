# Base image
FROM apache:latest

# Install PostgreSQL
RUN apt-get update && apt-get install -y postgresql

# Create database user and database
RUN echo "CREATE USER kuraiorg WITH PASSWORD 'ADMIN123*@';" | psql -U postgres -d postgres
RUN echo "CREATE DATABASE kuraitachi;" | psql -U postgres -d postgres

# Copy project files
COPY . /var/www/html/

# Configure apache to serve index.html
<VirtualHost *:80>
    ServerName localhost
    DocumentRoot /var/www/html

    <Directory /var/www/html>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

# Expose port 80
EXPOSE 80

# Start apache and PostgreSQL
CMD ["apachectl", "-D", "FOREGROUND", "&", "postgres", "-D", "/var/lib/postgresql/data"]