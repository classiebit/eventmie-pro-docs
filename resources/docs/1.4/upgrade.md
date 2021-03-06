# Upgrade from v1.3.x to v1.4.x

---

>{danger} You must be on v1.3.x to upgrade to v1.4.x. Please DO NOT directly upgrade to v1.4.x from v1.2.x.

---

>{success} Upgrading will **NEVER MODIFY OR DELETE** your website's existing users' data (file uploads) & database tables data. 

---


- [Prerequisites](#prerequisites)
- [Steps to upgrade](#Steps-to-upgrade)
- [Update Config](#update-config)
- [Update Languages](#update-languages)


<a name="prerequisites"></a> 
## Prerequisites

To upgrade to v1.4.x-

1. You must be on v1.3.x.
2. If you're running Laravel 5.8, you must first upgrade to Laravel 6.x or 7.x. [Laravel Upgrade Guide](https://laravel.com/docs/7.x/upgrade)
3. Download the latest version from [Classiebit.com - Downloads page](https://classiebit.com/downloads)

---

>{primary} If you want us to upgrade your website with all the latest versions, we also provide `Upgrade Service`. Simply send us an email on `info@classiebit.com`. 

---


<a name="Steps-to-upgrade"></a> 
## Steps to upgrade

* Extract the `eventmie-pro-v1.4.x.zip` file and then extract package file `eventmie-pro.zip`.
* Copy the `eventmie-pro` folder and go to your website directory.
* Delete the current `eventmie-pro` folder & replace it by the new one.
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
    php artisan eventmie-pro:update
    ```


<a name="update-config"></a> 
## Update Config

---

>{danger} Below command will override the existing `config/eventmie.php` file.

---

Few changes have been made to the Eventmie Pro config file in `v1.4`. The below command will update your base app `config/eventmie.php` file with the latest one.

```php
php artisan vendor:publish --tag=eventmie-pro-config --force
```


<a name="update-languages"></a> 
## Update Languages

---

>{danger} Below command will override the existing `lang/vendor/eventmie-pro/*` languages files.

---

Update your base app `lang/vendor/eventmie-pro/*` language files.

```php
php artisan vendor:publish --tag=eventmie-pro-lang --force
```

<br>

---

>{danger} Below command will override the existing `lang/vendor/voyager/*` language files.

---

In `v1.4`, we've made the Admin Panel multi-lingual as well. Run the below command to copy the Admin Panel language files to your base app.

```php
php artisan vendor:publish --tag=eventmie-pro-voyager-lang --force
```

<br>

And finally, this one will update the database -> `translations` table that's responsible for showing the Admin Panel in multiple languages.

```php
php artisan eventmie-pro:translate-admin-panel
```