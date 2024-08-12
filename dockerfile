# Use the official PHP image with built-in web server
FROM php:8.0-cli

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the current directory contents into the container
COPY . .

# Expose port 8000 to the outside world
EXPOSE 8000

# Run PHP built-in server
CMD ["php", "-S", "0.0.0.0:8000"]
