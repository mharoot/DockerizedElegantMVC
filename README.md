# LEMP STACK, Using php-fpm, with nginx as a frontend load balancer, with redis for session management, and MySql
![alt text](https://user-images.githubusercontent.com/24758613/46195300-d0580300-c2b8-11e8-9a2c-9c4e31b90a4b.png)


### Images used
- *mysql:5.7.22*
- *php:7.1.0-fpm*
- **redis:3-alpine**
    - inside this image we run the following command:
    ```
        RUN pecl install `redis-3.0.0` \
        && docker-php-ext-enable redis \
        && apt-get update \
        && apt-get install -y git zlib1g-dev \
        && docker-php-ext-install pdo pdo_mysql zip
    ```
    - note: redis-3.0.0 is the only one that seems to work with these set of images.


- NOTE:
  - you must add the following to your index.php file or anywhere you start your first session
  ```
    ini_set('session.save_handler', 'redis');
    ini_set('session.save_path', 'tcp://redisfrontend:6379, tcp://redisfrontend:6379');
    session_name('ElegantMVC');
    session_start();
  ```

### Dividing the CPU
- `grep -c ^processor /proc/cpuinfo`
    - my output was 2, yours may be different.


### Goin Live on NGROK
NGROK always changes the web domain name in the free version.  Thus, we must modify the following file:
- code/config/PHPMailer.php
- Configure gmail to send email and use your username and pass.  Careful not to post to github.
