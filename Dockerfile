FROM ubuntu:14.04
MAINTAINER d.basivireddy@gmail.com
RUN apt-get update && apt-get install -y  apache2 php5 php5-memcached
COPY visitcount.php /var/www/html/index.html
EXPOSE 80
ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
