# Installation

Eventmie Pro can be installed via composer. Bruhhh... 💪

---

> {info.fa-youtube} Here's a complete video tutorial guide for getting started quickly **[Eventmie Pro Academy](https://classiebit.com/academy/eventmie-pro/getting-started)** ✌️

---

- [Prerequisites](#Prerequisites)
- [Install](#Install)
- [Configurations](#Configurations)


<a name="Prerequisites"></a>
## Prerequisites

* Laravel version 5.5 / 5.6 / 5.7 / 5.8 / 6.x and above
* Make sure to install the Eventmie Pro package on a **Fresh** or **Existing** Laravel application. 
* We also assume that you've set up the database.
* If you're running MySql version older than < 5.7 then disable strict mode in Laravel `config/database.php` `'strict' => false`


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