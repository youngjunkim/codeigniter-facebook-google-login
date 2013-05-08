# Codeigniter Facebook Google Login
Traditional and social authorization application.


Demo
====
http://demo01.localtom.com/


Installation
============
* Upload files to your web server or local server.
* configuration

  ```
  application/config/database.php
  application/config/oauth2.php
  application/config/tank_auth.php
  application/config/email.php
  ```
* Query schema.sql at your DB


For Linux server
================
* make all sub directory permission to 755 

  ```
  cd /your-directory
  find . -type d -exec chmod 755 {} \;
  ```

* make sure captcha folder is writable

  ```
  chmod 777 captcha
  ```

Based On
========
* Codeigniter 2.1.3

  https://github.com/EllisLab/CodeIgniter/

* Tank Auth 1.09

  https://github.com/TankAuth/Tank-Auth

* Codeigniter OAuth 2.0

  https://github.com/philsturgeon/codeigniter-oauth2


License
=======
MIT License, CodeIgniter License
