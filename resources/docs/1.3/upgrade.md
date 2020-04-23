# Upgrade to v1.2.x

Updating Eventmie Pro is simple. Just download the latest version of Eventmie Pro from [Classiebit.com - Downloads page](https://classiebit.com/downloads) after login into your account.

- [Steps to upgrade](#Steps-to-upgrade)

<a name="Steps-to-upgrade"></a> 
## Steps to upgrade

* Extract the **eventmie-pro-v1.2.x.zip** file. 
* Copy the **eventmie-pro** folder and go to your website directory.
* Delete the current **eventmie-pro** folder & replace it by the new one.
* Then run the composer update command

    ```php
    composer update
    ```

* On production (live) server, run this command as well

    ```php
    composer install --optimize-autoloader --no-dev
    ```

* Finally, run the auto-updater command

    ```php
    php artisan eventmie:update
    ```
