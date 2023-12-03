# Installation

Eventmie Pro can be installed via composer. Bruhhh... 💪

---

> {primary.fa-youtube} Here's a complete video tutorial guide for getting started quickly **[Eventmie Pro Academy](https://classiebit.com/academy/eventmie-pro/eventmie-pro-installation-with-installer)** 👈

---

- [Server Requirements](#server-requirements)
- [Download Eventmie-pro](#download-eventmie-pro)
- [Install via Composer](#install-via-composer)
- [Install via Web-Installer](#install-via-web-installer)
- [Purchased From Codecanyon](#purchased-from-codecanyon)
- [Installation Errors](#installation-errors)


<a name="server-requirements"></a> 
## Server Requirements

Before you start. Make sure your server meets at least the below requirements. **(MUST HAVE!)**

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
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- iconv PHP Extension
- Imagick PHP Extension




<a name="download-eventmie-pro"></a> 
## Download Eventmie-pro

* Download Eventmie-pro from `classiebit.com/downloads`.
* On the same `classiebit.com/downloads` page, make sure you add a domain name to authorize domain, on which you're going to install Eventmie-pro.
* No need for domain authorization for `localhost`.
* Unzip the Eventmie Pro script that you've downloaded. 
* You'll find two more ZIP files inside. 
    1. `eventmie-pro.zip` is the Laravel package for **install via Composer**.
    2. `eventmie-pro-webinstaller.zip` is web-installer for **install via Web-installer**.
    
---

>{primary} `eventmie-pro-webinstaller.zip` is a complete Laravel website, simply extra it in your website directory and follow the **Install via Web-installer** guide below.

---


<a name="install-via-composer"></a>
## Install via Composer

### Prerequisites

* Laravel version 6.x / 7.x / 8.x
* Laravel Authentication must be installed.

---

>{success} You can install Eventmie Pro on a **Fresh** or **Existing** Laravel application. 

---

> {primary} Laravel installation guide **[Laravel Installation](https://laravel.com/docs/)** 👈

---


### Start Eventmie Pro installation


1.  Unzip `eventmie-pro.zip` file, copy `eventmie-pro` folder and place it in your Laravel application root directory.

    ---

    >{primary} The folder name must be `eventmie-pro` in your Laravel website directory.
    
    ---

    ![Install via Composer](/images/installation-directories.jpg "Install via Composer")

    ---
    

2. Open your Laravel application `composer.json` file and paste the below code in the end (right before last curly `}` bracket)

    ```json
    "repositories": [{
        "type": "path",
        "url": "eventmie-pro/"
    }]
    ```

3. Install Eventmie Pro via Composer

    ```php
    composer require classiebit/eventmie-pro
    ```

4. Run Eventmie Pro install command

    ```php
    php artisan eventmie-pro:install
    ```

5. While installation, it will ask you for the license code. Enter the license code to complete the installation process.

    ---

    >{primary} Remember, one license code is valid for one domain only. Read license agreement here - **[Classiebit Licenses](https://classiebit.com/license)** 👈.

    ---


<a name="install-via-web-installer"></a>
## Install via Web-Installer

Eventmie Pro also comes with web-installer for those, who are not familiar with the Laravel framework. The web-installer installs Eventmie Pro directly on the web-server in few clicks. No technical or coding skills needed.

---

>{primary} Extract the `eventmie-pro-webinstaller.zip` inside the website directory e.g `public_html` or `www`.

---

![Eventmie Web Installer](/images/installation-web-installer.jpg "Eventmie Web Installer")

---

>{primary} Web-installer installs everything - Laravel Framework + Eventmie Pro package + composer dependencies.

---

Follow these simple steps for getting started with web-installer.

1. Create a database on the CPANEL/server and copy the database credentials- `database name`, `username` & `password`.
2. Then after extracting `eventmie-pro-webinstaller.zip` in the website directory, go to the website directory. 
3. Open the `.env` file at the root `public_html/.env` and enter the database credentials. 

    ```php
        DB_DATABASE=<database-name>
        DB_USERNAME=<database-user-username>
        DB_PASSWORD=<database-user-password>
    ```

3. Visit the website URL. It'll ask for the License code, enter it and click Proceed.
4. After successful license verification, it'll redirect to the Eventmie Pro web-installer steps form.
5. In the steps form, things are self-explanatory.

    * **Step-1: Check server requirements** <br>
    It'll auto check the webserver requirements, and will point out if any PHP extension is missing. If in case of missing extensions, you need your web server/hosting provider or install missing PHP extension yourself. After installing missing PHP extensions, return to the installer page and refresh.

    
    * **Step-2: Check Folder Permissions** <br> 
    If you see some red cross. Change two folder permissions `storage` & `bootstrap`. (you'll see more info about this on the installer page.)

    * **Step-3: Final Step** <br>
    Enter Website Name & URL and Click Install.



<a name="purchased-from-codecanyon"></a>
## Purchased From Codecanyon

If you've purchased Eventmie Pro from Codecanyon `codecanyon.net` then follow these simple steps-

1. Enter `Purchase-code` as a License key in the Eventmie Pro installer.
2. Visit [classiebit.com](https://classiebit.com), signup as new user and go to [Downloads](https://classiebit.com/downloads)
3. Click on <larecipe-button radius="half" type="black">Purchased from Codecanyon?</larecipe-button>
4. In the popup, enter the Purchase-code and submit. You'll see the product on the download list.
5. Finally, add the authorized domain, where you're going to install Eventmie Pro, and you're good to go. 👍



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