# Installation

Eventmie Pro FullyLoaded can be installed via composer as well as via web-installer. The installation proccess is exactly same as installing Eventmie Pro. No hard and fast. 🤞


- [Server Requirements](#server-requirements)
- [Download Eventmie-pro FullyLoaded](#download-eventmie-pro-FullyLoaded)
- [Install via Composer](#install-via-composer)
- [Install via Web-Installer](#install-via-web-installer)
- [Installation Errors](#installation-errors)
- [Signup Error](#signup-error)


<a name="server-requirements"></a> 
## Server Requirements

Same as Eventmie Pro's Server Requirements


<a name="download-eventmie-pro-FullyLoaded"></a> 
## Download Eventmie-pro FullyLoaded

* Download Eventmie-pro FullyLoaded from `classiebit.com/downloads`.
* On the same `classiebit.com/downloads` page, make sure you add a domain name to authorize domain, on which you're going to install Eventmie-pro.
* If You've purchased Eventmie Pro FullyLoaded Enterprise license, then you don't need to add authorize domain, you can install it on unlimited domains.
* No need for domain authorization for `localhost`.
* Unzip the Eventmie Pro FullyLoaded script that you've downloaded. 
* You'll find one ZIP file inside. 
    - `eventmie-pro-fullyloaded.zip`
    
---

>{primary} `eventmie-pro-fullyloaded.zip` is a complete Laravel website, simply extract it in your website directory and follow the  installation guide below.

---


<a name="install-via-composer"></a>
## Install via Composer


1. Unzip `eventmie-pro-fullyloaded.zip` file into your website directory e.g `public_html`.
2. Open Terminal inside website root directory e.g `public_html` and run

    ```php
    composer update
    ```

3. Then run Eventmie Pro install command

    ```php
    php artisan eventmie-pro:install
    ```

4. Then run migration command

    ```php
    php artisan migrate
    ```

4. Finally, run database seed command

    ```php
    php artisan db:seed
    ```    

5. While installation, it will ask you for the license code. Enter the license code to complete the installation process.

    ---

    >{primary} Remember, one license code is valid for one domain only, except Enterprise license. Read license agreement here - **[Classiebit Licenses](https://classiebit.com/license)** 👈.

    ---


<a name="install-via-web-installer"></a>
## Install via Web-Installer

Eventmie Pro FullyLoaded also comes with web-installer for those, who are not familiar with the Laravel framework. The web-installer installs Eventmie Pro FullyLoaded directly on the web-server in few clicks. No technical or coding skills needed.

---

>{primary} Extract the `eventmie-pro-fullyloaded.zip` inside the website directory e.g `public_html` or `www`.

---

![Eventmie Web Installer](https://eventmie-pro-docs.classiebit.com/images/v2/fullyloaded-installer.png "Eventmie Web Installer")

---

>{primary} Web-installer installs everything - Laravel Framework + Eventmie Pro FullyLoaded package + composer dependencies.

---

Follow these simple steps for getting started with web-installer.

1. Create a database on the CPANEL/server and copy the database credentials- `database name`, `username` & `password`.
2. Then after extracting `eventmie-pro-fullyloaded.zip` in the website directory, go to the website directory. 
3. Edit the `.env` file at the root `public_html/.env` and enter the database credentials. 

    ```php
        DB_DATABASE="<database-name>"
        DB_USERNAME="<database-user-username>"
        DB_PASSWORD="<database-user-password>"
    ```

3. Visit the website URL. It'll ask for the License code, enter it and click Proceed.
4. After successful license verification, it'll redirect to the Eventmie Pro FullyLoaded web-installer steps form.
5. In the steps form, things are self-explanatory.

    * **Step-1: Check server requirements** <br>
    It'll auto check the webserver requirements, and will point out if any PHP extension is missing. If in case of missing extensions, you need your web server/hosting provider or install missing PHP extension yourself. After installing missing PHP extensions, return to the installer page and refresh.

    
    * **Step-2: Check Folder Permissions** <br> 
    If you see some red cross. Change two folder permissions `storage` & `bootstrap`. (you'll see more info about this on the installer page.)

    * **Step-3: Final Step** <br>
    Enter Website Name & URL and Click Install.



<a name="installation-errors"></a>
## Installation Errors

1. If you're getting error - `1071 Specified key was too long;` while installation, it's due to older Mysql version. To resolve these, follow the below simple step and then try installing again.

* Go to file `config/database.php` and change these values in `mysql` section

    ```php
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'strict'    => false,
    'engine'    => 'InnoDB ROW_FORMAT=DYNAMIC',
    ```


2. If you're running MySql `5.7` or older, then disable strict mode inside `mysql` section in `config/database.php`

    ```php
    'strict'    => false,
    ```

3. You may get `classiebit/eventmie-pro package not found error`, this happens on a very few web-hostings where `symlink` feature is disabled by default. And to resolve the error-

- Delete the `classiebit` folder inside `vendor` folder and run `composer update` command in the Terminal inside the root directory of website.


<a name="signup-error"></a>
## Signup Error

After installation, make sure to add Mail server SMTP credentials on Admin Panel.

- Simply visit Admin Panel
- Click on Settings -> Mail tab
- And enter mail server credentials.
- Make sure to test SMTP credentials here- [smtper.net](https://www.smtper.net) if emails are not delivering.
