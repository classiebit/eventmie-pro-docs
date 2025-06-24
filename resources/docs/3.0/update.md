<!--
Meta Description: Step-by-step guide to update Eventmie Pro from v2.0.x to v3.0.x. Learn how to upgrade your Laravel event management platform safely, including config, language, and database updates.
Meta Keywords: Eventmie Pro update, upgrade Eventmie, Laravel event management, update guide, v2.0.x to v3.0.x, Eventmie Pro FullyLoaded, update service, composer update, vendor publish, language files, admin panel translation
-->
# Update Eventmie Pro from v2.0.x to v3.0.x

---

>{info} This comprehensive guide will help you seamlessly update your Eventmie Pro or Eventmie Pro FullyLoaded installation from version 2.0.x to 3.0.x. Follow each step to ensure a smooth and secure upgrade of your Laravel event management platform.
<!-- >{success} Updating will **NEVER MODIFY OR DELETE** your website's existing users' data (file uploads) & database tables data.  -->

---

<!-- - [Prerequisites](#prerequisites)
- [Update Service](#update-service)
- [Steps to update](#Steps-to-update)
- [Update Config](#update-config)
- [Update Languages](#update-languages)

<a name="prerequisites"></a> 
## Prerequisites for Updating Eventmie Pro

To upgrade to Eventmie Pro v3.0.x, please follow these prerequisites:

1. Download the latest Eventmie Pro version from the [Classiebit.com - Downloads page](https://classiebit.com/downloads). Ensure you have a valid license and backup your website files and database before proceeding.

    ---

    ![Download Eventmie Pro](/images/v2/classiebit-downloads.webp "Download Eventmie Pro for Laravel")

    ---

<a name="update-service"></a> 
## Eventmie Pro Update Service Options

You can update your Eventmie Pro website to the latest version by following this guide. If you prefer expert assistance, Classiebit offers a paid update service for both Eventmie Pro and Eventmie Pro FullyLoaded.

### Eventmie Pro Update Service

1. **Simple Update Service (USD 50):** For websites with **NO CODE CUSTOMISATIONS**.
2. **Advanced Update Service (USD 150):** For websites with **CODE CUSTOMISATIONS**.

### Eventmie Pro FullyLoaded Update Service

1. **Simple Update Service (USD 100):** For websites with **NO CODE CUSTOMISATIONS**.
2. **Advanced Update Service (USD 300):** For websites with **CODE CUSTOMISATIONS**.

To request a paid update service, email us at `info@classiebit.com` and our team will assist you with the upgrade process.

<a name="Steps-to-update"></a> 
## Step-by-Step Guide: How to Update Eventmie Pro

You can update your Eventmie Pro or Eventmie Pro FullyLoaded website by following these essential steps. Please ensure you **DO NOT** skip any step for a successful upgrade.

* Extract the `eventmie-pro-v2.0.x.zip` file and then extract the package file `eventmie-pro.zip`.
* Copy the new `eventmie-pro` folder to your website directory.
* Delete the existing `eventmie-pro` folder and replace it with the new one.
* Run the Composer update command to update dependencies:

    ```php
    composer update
    ```

* On your production (live) server, optimize the autoloader and skip dev dependencies:

    ```php
    composer install --optimize-autoloader --no-dev
    ```

* Finally, run the Eventmie Pro auto-updater command to complete the upgrade:

    ```php
    php artisan eventmie-pro:update
    ```

<a name="update-config"></a> 
## Update Eventmie Pro Configuration File

---

>{danger} The following command will override your existing `config/eventmie.php` file. Backup your configuration before proceeding.

---

Eventmie Pro v3.0.x introduces changes to the configuration file. Update your base app `config/eventmie.php` file with the latest version using:

```php
php artisan vendor:publish --tag=eventmie-pro-config --force
```

<a name="update-languages"></a> 
## Update Eventmie Pro Language Files

---

>{danger} The following command will override your existing `lang/vendor/eventmie-pro/*` language files. Backup your language files before proceeding.

---

Update your base app `lang/vendor/eventmie-pro/*` language files to the latest version:

```php
php artisan vendor:publish --tag=eventmie-pro-lang --force
```

---

>{danger} The following command will override your existing `lang/vendor/voyager/*` language files. Backup your Voyager language files before proceeding.

---

Eventmie Pro v3.0.x improves Admin Panel translations. Update the Admin Panel language files:

```php
php artisan vendor:publish --tag=eventmie-pro-voyager-lang --force
```

And finally, update the database `translations` table to ensure the Admin Panel supports multiple languages:

```php
php artisan eventmie-pro:translate-admin-panel
```