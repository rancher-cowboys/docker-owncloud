FROM owncloud:9-apache

COPY config.php /var/www/html/config/

ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]
