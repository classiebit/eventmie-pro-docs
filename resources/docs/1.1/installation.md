# Installation

Eventmie Pro can be installed via composer. Bruhhh... 💪

---

> {info.fa-youtube} A complete video tutorial guide for getting started quickly is **Coming Soon**

---

- [Prerequisites](#Prerequisites)
- [Server Requirements](#Server-Requirements)
- [Installation Errors](#Installation-Errors)
- [Install](#Install)
- [Web Installer](#Web-Installer)
- [Purchased From Codecanyon](#Purchased-From-Codecanyon)
- [Configurations](#Configurations)


<a name="Prerequisites"></a> 
## Prerequisites

* Laravel version 5.5 / 5.6 / 5.7 / 5.8 / 6.x and above
* Make sure to install the Eventmie Pro package on a **Fresh** or **Existing** Laravel application. 
* We also assume that you've set up the database.
* If you're running MySql version older than < 5.7 then disable strict mode in Laravel `config/database.php` `'strict' => false`


<a name="Server-Requirements"></a> 
## Server Requirements

Before you start. Make sure your server meets atleast the below requirements. **(necessarily required!!!)**

- PHP >= 7.1.3
- MySql >= 5.7.7
- MariaDB >= 10.2.2 (if you're using MariaDB)
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- iconv PHP Extension

>{success} Before buying a hosting, simply confirm these requirements with their support team.


<a name="Installation-Errors"></a>
## Installation Errors

If you're getting error - `1071 Specified key was too long;` while installation, it's due to older Mysql version. To resolve these, follow the below simple step and then try installing again.

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


<a name="Install"></a>
## Install

1. If installing Eventmie Pro on an existing Laravel application and you already have Auth system then **skip this step**

    if installing Eventmie Pro on **Fresh Laravel application** then run 

    **For Laravel 5.5 to 5.8**

    ```php
    php artisan make:auth

    php artisan migrate
    ```

    **For Laravel 6.x**

    ```php
    composer require laravel/ui --dev

    php artisan ui vue --auth

    npm install && npm run dev

    php artisan migrate
    ```


2. Unzip the `eventmie-pro.zip` file, copy the `eventmie-pro` folder and place it in your Laravel application root directory.

    >{warning} The folder name must be `eventmie-pro` in your Laravel website directory.
    

3. Open your Laravel application `composer.json` file and paste the below code in the end (right before last curly `}` bracket)

    ```json
    "repositories": [{
        "type": "path",
        "url": "eventmie-pro/"
    }]
    ```

    (once you complete, the `composer.json` file will look something like this) 

    ```json
    {
        .
        .
        .
        .
        .
        
        "minimum-stability": "dev",
        "prefer-stable": true,
        "scripts": {
            "post-autoload-dump": [
                "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
                "@php artisan package:discover --ansi"
            ],
            "post-root-package-install": [
                "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
            ],
            "post-create-project-cmd": [
                "@php artisan key:generate --ansi"
            ]
        },


        "repositories": [{
            "type": "path",
            "url": "eventmie-pro/"
        }]

    }

    ```

4. Install Eventmie Pro via Composer

    ```php
    composer require classiebit/eventmie-pro
    ```

5. Run Eventmie Pro install command

    ```php
    php artisan eventmie:install
    ```

6. While installation, it will ask you for the license code. Enter the license code to complete the installation process.

    >{info} Remember, one license code is valid for one domain only. Contact support for more details.


<a name="Web-Installer"></a>
## Web Installer

---

![Eventmie Web Installer](https://eventmie-pro-docs.classiebit.com/images/eventmie-pro-web-installer.jpg "Eventmie Web Installer")

---


Eventmie Pro `v1.1.1` introduced a new web-installer, which installs Eventmie Pro directly on the web-server in few clicks.

>{warning} Recommended way to install Eventmie Pro is from the above manual method. Developers must go with the manual method. First, install it locally then deploy it to a live server. Web Installer method is only for non-developers who want to install Eventmie Pro directly on web-server/hosting/CPANEL.

To start with Eventmie Pro web-installer. After purchase & downloading Eventmie Pro, on extracting eventmie-pro.zip, you'll get two folders-

1. `eventmie-pro` - This is **eventmie-pro PACKAGE** for installation via the above manual method (command line)
2. `eventmie-pro-web installer` - This is **eventmie-pro WEB-INSTALLER**, to install Eventmie-pro via the web interface.


>{info} Web-installer installs everything including - Laravel Framework + Eventmie Pro package + Database + all other composer dependencies. So if you're not a developer, you can use web-installer to install Eventmie Pro easily in few clicks.


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


<a name="Purchased-From-Codecanyon"></a>
## Purchased From Codecanyon

If you've purchased Eventmie Pro from Codecanyon `codecanyon.net` then follow these simple steps-

1. Enter `Purchase-code` as a License key in the Eventmie Pro installer.
2. Visit [classiebit.com](https://classiebit.com), signup as new user and go to [Downloads](https://classiebit.com/downloads)
3. Click on <larecipe-button radius="half" type="black">Purchased from Codecanyon?</larecipe-button>
4. In the popup, enter the Purchase-code and submit. You'll see the product on the download list.
5. At last, add the authorized domain. And you're good to go. 👍




<a name="Configurations"></a>
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