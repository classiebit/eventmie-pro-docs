# Upgrade from Eventmie Pro to Eventmie Pro FullyLoaded

---

>{danger} You must be on Eventmie Pro v1.7.x before upgrading to Eventmie Pro FullyLoaded.

---

>{success} Updating will **NEVER MODIFY OR DELETE** your website's existing users' data (file uploads) & database tables data. 

---


- [Prerequisites](#prerequisites)
- [Upgrade Service](#upgrade-service)
- [Steps to upgrade](#Steps-to-upgrade)


<a name="prerequisites"></a> 
## Prerequisites

To upgrade to Eventmie Pro FullyLoaded-

1. You must be on Eventmie Pro v1.7.x.
3. Download the latest version from [Classiebit.com - Downloads page](https://classiebit.com/downloads)



<a name="upgrade-service"></a> 
## Upgrade Service

If you want us to upgrade your website to Eventmie Pro FullyLoaded, we also provide paid `upgrade Service`. 

<br>
There are two types of update service-

1. Simple Upgrade Service Cost **USD 100**: If there are **NO CODE CUSTOMISATIONS** on your website.
2. Advanced Upgrade Service Cost **USD 200**: If there are **CODE CUSTOMISATIONS** on your website.

<br>
To request paid update service, please send us an email at `info@classiebit.com` and we'll get back to you.


<a name="Steps-to-upgrade"></a> 
## Steps to upgrade

To upgrade your existing Eventmie Pro website to Eventmie Pro FullyLoaded, then follow the below steps carefully. Please make sure you **DO NOT** miss any step.

---

>{warning} This is `Simple Upgrade` guide for the Eventmie Pro website having **NO CODE CUSTOMISATIONS**. If you're having **CODE CUSTOMISATIONS** into your website, then contact us at `info@classiebit.com`.

---

* Extract the `eventmie-pro-fullyloaded.zip` file and delete the `storage` folder and `.env` file from the extracted folder.
* We'll keep your existing `storage` folder so that you don't loose your existing events, tickets, and other images and pdf files.
* Now, delete all the files and folders from your existing website **EXCEPT** `storage` and `.env` file.
* Don't delete your existing website `storage` folder, or else you'll loose all the event's images and other files.
* Then run the composer update command

    ```php
    composer update
    ```

* On production (live) server, run this command as well

    ```php
    composer install --optimize-autoloader --no-dev
    ```

* Run database migration command

    ```php
    php artisan migrate
    ```

* Run database seeder command

    ```php
    php artisan db:seed
    ```

* Finally run the translation update command

    ```php
    php artisan eventmie-pro:translate-admin-panel
    ```

<br>

And done. ✌️