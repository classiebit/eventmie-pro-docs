<!--
Meta Description: Step-by-step guide to upgrade from Eventmie Pro to Eventmie Pro FullyLoaded. Learn how to migrate your Laravel event management platform, including prerequisites, upgrade service, and safe migration steps.
Meta Keywords: Eventmie Pro upgrade, Eventmie Pro FullyLoaded, Laravel event management, upgrade guide, migration, composer update, database migration, translation update, upgrade service, Classiebit
-->
# Upgrade from Eventmie Pro to Eventmie Pro FullyLoaded

---

>{success} Upgrading to Eventmie Pro FullyLoaded will **NEVER MODIFY OR DELETE** your website's existing users' data, file uploads, or database tables data. Your event management platform remains secure during the migration process.

---

- [Prerequisites](#prerequisites)
- [Upgrade Service](#upgrade-service)
- [Steps to upgrade](#Steps-to-upgrade)


<a name="prerequisites"></a> 
## Prerequisites for Upgrading to Eventmie Pro FullyLoaded

To upgrade your Laravel event management website to Eventmie Pro FullyLoaded:

1. Download the latest Eventmie Pro FullyLoaded version from the [Classiebit.com - Downloads page](https://classiebit.com/downloads). Ensure you have a valid license and always backup your website files and database before starting the upgrade.

    ---

    ![classiebit-download](/images/v2/classiebit-downloads.webp "Download Eventmie Pro FullyLoaded for Laravel")

    ---


<a name="upgrade-service"></a> 
## Eventmie Pro FullyLoaded Upgrade Service

If you want our expert team to upgrade your website to Eventmie Pro FullyLoaded, we offer a paid `upgrade Service` for a hassle-free migration.

There are two types of upgrade service:

1. **Simple Upgrade Service (USD 100):** For websites with **NO CODE CUSTOMISATIONS**.
2. **Advanced Upgrade Service (USD 300):** For websites with **CODE CUSTOMISATIONS**.

To request a paid upgrade service, email us at `info@classiebit.com` and our team will assist you with the migration process.

---

>{success} For a limited time, we are offering Free Simple & Advanced Upgrade service to existing Eventmie Pro customers. Email us to claim this special offer and upgrade to Eventmie Pro FullyLoaded at no cost.

---


<a name="Steps-to-upgrade"></a> 
## Step-by-Step Guide: How to Upgrade to Eventmie Pro FullyLoaded

To upgrade your existing Eventmie Pro website to Eventmie Pro FullyLoaded, follow these essential steps carefully. Please ensure you **DO NOT** skip any step for a successful migration.

---

>{warning} This is a `Simple Upgrade` guide for Eventmie Pro websites with **NO CODE CUSTOMISATIONS**. If your website has custom code, please contact us at `info@classiebit.com` for a tailored upgrade process.

---

* Extract the `eventmie-pro-fullyloaded.zip` file and delete the `storage` folder and `.env` file from the extracted folder.
* Retain your existing `storage` folder to preserve all your events, tickets, images, and PDF files.
* Delete all files and folders from your existing website **EXCEPT** the `storage` and `.env` files.
* Do **NOT** delete your existing website `storage` folder, or you will lose all event images and other files.
* Run the Composer update command to update dependencies:

    ```php
    composer update
    ```

* On your production (live) server, optimize the autoloader and skip dev dependencies:

    ```php
    composer install --optimize-autoloader --no-dev
    ```

* Run the Laravel database migration command to update your database schema:

    ```php
    php artisan migrate
    ```

* Run the database seeder command to populate essential data:

    ```php
    php artisan db:seed
    ```

* Finally, run the translation update command to ensure multilingual support in the admin panel:

    ```php
    php artisan eventmie-pro:translate-admin-panel
    ```

<br>

And done. ✌️