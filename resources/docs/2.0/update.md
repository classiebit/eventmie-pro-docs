# Update from v1.8.x to v2.0.x

---

>{success} Updating will **NEVER MODIFY OR DELETE** your website's existing users' data (file uploads) & database tables data. 

---


- [Prerequisites](#prerequisites)
- [Update Service](#update-service)
- [Steps to update](#Steps-to-update)
- [Update Config](#update-config)
- [Update Languages](#update-languages)


<a name="prerequisites"></a> 
## Prerequisites

To update to v2.0.x-

1. Download the latest version from [Classiebit.com - Downloads page](https://classiebit.com/downloads)

    ---

    ![classiebit-download](/images/v2/classiebit-downloads.webp "classiebit-download")

    ---


<a name="update-service"></a> 
## Update Service

You can update your website with the latest version for free by following the below update guide. 
But, if you want us to update your website with the latest version, we also provide paid `update Service`. 

### For Eventmie Pro

<br>
There are two types of update service-

1. Simple Update Service Cost **USD 50**: If there are **NO CODE CUSTOMISATIONS** on your website.
2. Advanced Update Service Cost **USD 150**: If there are **CODE CUSTOMISATIONS** on your website.

### For Eventmie Pro FullyLoaded

<br>
There are two types of update service-

1. Simple Update Service Cost **USD 100**: If there are **NO CODE CUSTOMISATIONS** on your website.
2. Advanced Update Service Cost **USD 300**: If there are **CODE CUSTOMISATIONS** on your website.


<br>
To request paid update service, please send us an email at `info@classiebit.com` and we'll get back to you.


<a name="Steps-to-update"></a> 
## Steps to update

If can update your website yourself by following the below steps. Please make sure you **DO NOT** miss any step.


* Extract the `eventmie-pro-v2.0.x.zip` file and then extract the package file `eventmie-pro.zip`.
* Copy the `eventmie-pro` folder and go to your website directory.
* Delete the current `eventmie-pro` folder & replace it with the new one.
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

Few changes have been made to the Eventmie Pro config file in `v2.0`. The below command will update your base app `config/eventmie.php` file with the latest one.

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

In `v2.0`, we've improved the Admin Panel translations as well. Run the below command to copy the Admin Panel language files to your base app.

```php
php artisan vendor:publish --tag=eventmie-pro-voyager-lang --force
```

<br>

And finally, this one will update the database -> `translations` table that's responsible for showing the Admin Panel in multiple languages.

```php
php artisan eventmie-pro:translate-admin-panel
```