# Installation

Eventmie Pro can be installed via composer. Bruhhh... 💪

---

> {primary.fa-youtube} Here's a complete video tutorial guide for getting started quickly **[Eventmie Pro Academy](https://classiebit.com/academy/eventmie-pro/eventmie-pro-installation-with-installer)** 👈

---

- [Prerequisites](#prerequisites)
- [Server Requirements](#server-requirements)
- [Download Eventmie-pro](#download-eventmie-pro)
- [Install via Composer](#install-via-composer)
- [Install via Web-Installer](#install-via-web-installer)
- [Purchased From Codecanyon](#purchased-from-codecanyon)
- [Configurations](#configurations)
- [Installation Errors](#installation-errors)


<a name="prerequisites"></a> 
## Prerequisites

You can install Eventmie Pro on a **Fresh** or **Existing** Laravel application. 

---

> {primary} Laravel installation guide **[Laravel Installation](https://laravel.com/docs/)** 👈

---

* Laravel version 6.x / 7.x
* Setup database


<a name="server-requirements"></a> 
## Server Requirements

Before you start. Make sure your server meets atleast the below requirements. **(MUST HAVE!)**

---

>{primary} Before buying a hosting, simply confirm these requirements with their support team.

---

- PHP >= 7.3
- MySql >= 5.7.7 or MariaDB >= 10.2.2 
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- fileinfo PHP Extension
- Mbstring PHP Extension
- Mcrypt PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- iconv PHP Extension
- Imagick PHP Extension




<a name="download-eventmie-pro"></a> 
## Download Eventmie-pro

* Download Eventmie-pro from `classiebit.com/downloads`.
* On the same `classiebit.com/downloads` page, make sure you add domain name to authorize domain, on which you're going to install Eventmie-pro.
* No need of domain authorization for `localhost`.
* Unzip the Eventmie Pro script that you've downloaded. 
* You'll find two more ZIP files inside. 
    1. `eventmie-pro.zip` is Laravel package for **install via Composer**.
    2. `eventmie-pro-webinstaller.zip` is web-installer for **install via Web-installer**.
    


<a name="install-via-composer"></a>
## Install via Composer

---

>{primary} If you already have Laravel Authentication, skip step 1.

---

1. Setup Laravel Authentication

    ```php
    composer require laravel/ui

    php artisan ui bootstrap --auth

    php artisan migrate
    ```


2.  Unzip `eventmie-pro.zip` file, copy `eventmie-pro` folder and place it in your Laravel application root directory.

    ---

    >{primary} The folder name must be `eventmie-pro` in your Laravel website directory.
    
    ---

    ![Install via Composer](http://eventmie-pro-docs.test/images/installation-directories.jpg "Install via Composer")

    ---
    

3. Open your Laravel application `composer.json` file and paste the below code in the end (right before last curly `}` bracket)

    ```json
    "repositories": [{
        "type": "path",
        "url": "eventmie-pro/"
    }]
    ```

4. Install Eventmie Pro via Composer

    ```php
    composer require classiebit/eventmie-pro
    ```

5. Run Eventmie Pro install command

    ```php
    php artisan eventmie-pro:install
    ```

6. While installation, it will ask you for the license code. Enter the license code to complete the installation process.

    >{primary} Remember, one license code is valid for one domain only. Contact support for more details.


<a name="install-via-web-installer"></a>
## Install via Web-Installer

Eventmie Pro also comes with web-installer for those, who are not familiar with Laravel framework. The web-installer installs Eventmie Pro directly on the web-server in few clicks. No technical or coding skills needed.

---

![Eventmie Web Installer](http://eventmie-pro-docs.test/images/installation-web-installer.jpg "Eventmie Web Installer")

---

To start with Eventmie Pro web-installer. After purchase & downloading Eventmie Pro, on extracting eventmie-pro.zip, you'll get two folders-

1. `eventmie-pro` - This is **eventmie-pro PACKAGE** for installation via the above manual method (command line)
2. `eventmie-pro-web installer` - This is **eventmie-pro WEB-INSTALLER**, to install Eventmie-pro via the web interface.


>{primary} Web-installer installs everything including - Laravel Framework + Eventmie Pro package + Database + all other composer dependencies. So if you're not a developer, you can use web-installer to install Eventmie Pro easily in few clicks.


Follow these simple steps for getting started with web-installer.

1. Copy all the folders & files from `eventmie-pro-web installer` and paste them inside the website directory. e.g `public_html`
2. Open the `.env` file at `public_html/.env` and enter the database credentials. It's important to enter database credentials manually before proceeding to web-installer.

    ```php
        .
        .
        .

        DB_DATABASE=<database-name>
        DB_USERNAME=<database-user-username>
        DB_PASSWORD=<database-user-password>

        .
        .
        .
    ```

3. Then visit the website URL, and it'll first ask for License code. Enter it and click Proceed.
4. After successful license verification, it'll redirect to the Eventmie Pro web-installer steps form.
5. In the steps form, everything is self-explanatory.

    * Step-1: Check server requirements. It'll auto check the webserver requirements, and will point out if some PHP extension is missing. If in case some extensions missing, you simply contact your web server/hosting provider, and they'll install those missing extensions, after that, return to the installer and try again.

    * Step-2: Check Folder Permissions. If you see some red cross. Change two folder permissions `storage` & `bootstrap`. (you'll see more info about this on the installer page.)

    * Step-3: Enter Website Name, URL & Database Credentials.

6. Final step: Click install.


<a name="purchased-from-codecanyon"></a>
## Purchased From Codecanyon

If you've purchased Eventmie Pro from Codecanyon `codecanyon.net` then follow these simple steps-

1. Enter `Purchase-code` as a License key in the Eventmie Pro installer.
2. Visit [classiebit.com](https://classiebit.com), signup as new user and go to [Downloads](https://classiebit.com/downloads)
3. Click on <larecipe-button radius="half" type="black">Purchased from Codecanyon?</larecipe-button>
4. In the popup, enter the Purchase-code and submit. You'll see the product on the download list.
5. At last, add the authorized domain. And you're good to go. 👍




<a name="configurations"></a>
## Configurations

After installation, you'll see the Eventmie config `config/eventmie` file. You can make the following changes-

<br>

1. Route config - whether to run Eventmie as a base site e.g `example.com` or on a specific URL e.g `example.com/myevents`

    ```php
    'route' => [
        'prefix'            => null, // for front-end
        'admin_prefix'      => 'admin', // for admin panel
    ],
    ```



2. RTL Languages - Eventmie detects RTL language from this list and changes site direction accordingly. You can add any other RTL language to the list.

    ```php
    'rtl_langs'        => [
        'ar', // arabic
        'fa', // persian
        'he', // hebrew
        'ms', // malay
        'ur', // urdu
        'ml' // malayalam
    ],
    ```


<a name="installation-errors"></a>
## Installation Errors

1. If you're getting error - `1071 Specified key was too long;` while installation, it's due to older Mysql version. To resolve these, follow the below simple step and then try installing again.

* Go to file `config/database.php` and change these values in `mysql` section

    ```php
    .
    .
    .
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'strict'    => false,
    'engine'    => 'InnoDB ROW_FORMAT=DYNAMIC',
    .
    .
    .
    ```


2. If you're running MySql `5.7` or older, then disable strict mode in `config/database.php`

    ```php
    .
    .
    .
    'strict'    => false,
    .
    .
    .
    ```