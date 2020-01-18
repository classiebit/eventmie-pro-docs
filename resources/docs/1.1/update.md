# Update to v1.1.x

Updating Eventmie Pro is simple. Just download the latest version of Eventmie Pro from [Classiebit.com - Downloads page](https://classiebit.com/downloads) after login into your account.

- [Update](#update)

<a name="update"></a> 
## Update

* Extract the **eventmie-pro-v1.1.x.zip** file. 
* Copy the **eventmie-pro** folder and go to your website directory.
* Delete the current **eventmie-pro** folder & replace it by the new one.
* Then run the composer update command

    ```php
    composer update
    ```

* Then run these cache clear commands

    ```php
    php artisan config:clear
    php artisan cache:clear
    php artisan view:clear
    php artisan route:clear
    ```

* On production (live) server, run this command as well

    ```php
    composer install --optimize-autoloader --no-dev
    ```