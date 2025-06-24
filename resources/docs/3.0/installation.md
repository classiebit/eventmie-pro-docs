# Installation

Eventmie Pro can be installed easily via Composer or through the user-friendly web installer.

---

> {primary.fa-youtube} For a step-by-step video guide, watch **[Eventmie Pro Academy](https://classiebit.com/academy/eventmie-pro/eventmie-pro-installation-with-installer)** 👈

---

- [Server Requirements](#server-requirements)
- [Download Eventmie-pro](#download-eventmie-pro)
- [Install via Composer](#install-via-composer)
- [Install via Web-Installer](#install-via-web-installer)
- [Purchased From Codecanyon](#purchased-from-codecanyon)
- [Installation Errors](#installation-errors)
- [Signup Error](#signup-error)
- [Update Admin Email](#update-admin-email)


<a name="server-requirements"></a> 
## Server Requirements

Before installing Eventmie Pro, ensure your server meets the following minimum requirements. **(MUST HAVE!)**

---

>{primary} Before purchasing hosting, confirm these requirements with your provider's support team.

---

- PHP >= 8.1
- MySQL >= 5.7.7 or MariaDB >= 10.2.2
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

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/a-eaCkehFe4?si=DcapZsjbL6ouMun-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

---

* Download Eventmie Pro from `classiebit.com/downloads`.
* On the same page, add your domain name to authorize the domain where you will install Eventmie Pro.
* If you have an Enterprise license, domain authorization is not required; you can install on unlimited domains.
* No domain authorization is needed for `localhost`.
* Unzip the downloaded Eventmie Pro package.
* Inside, you'll find two ZIP files:
    1. `eventmie-pro.zip` – Laravel package for **Composer installation**.
    2. `eventmie-pro-webinstaller.zip` – Complete web installer for **Web-installer installation**.

---

>{primary} `eventmie-pro-webinstaller.zip` is a complete Laravel website. Extract it in your web directory and follow the **Install via Web-installer** guide below.

---


<a name="install-via-composer"></a>
## Install via Composer

### Prerequisites

* Laravel version 6.x / 7.x / 8.x / 9.x

---

>{success} Eventmie Pro can be installed on a **fresh** or **existing** Laravel application.

---

> {primary} For Laravel installation instructions, see **[Laravel Installation](https://laravel.com/docs/)** 👈

---


### Start Eventmie Pro installation


1.  Unzip the `eventmie-pro.zip` file, copy the `eventmie-pro` folder, and place it in your Laravel application's root directory.

    ---

    >{primary} The folder name must be `eventmie-pro` in your Laravel website directory.
    
    ---

    ![Install via Composer](/images/installation-directories.webp "Install via Composer")

    ---
    

2. Open your Laravel application's `composer.json` file and add the following code at the end (right before the last curly `}` bracket):

    ```json
    "repositories": [{
        "type": "path",
        "url": "eventmie-pro/"
    }]
    ```

3. Install Eventmie Pro via Composer:

    ```php
    composer require classiebit/eventmie-pro
    ```

4. Run the Eventmie Pro install command:

    ```php
    php artisan eventmie-pro:install
    ```

5. During installation, you will be prompted for your license code. Enter it to complete the process.

    ---

    >{primary} One license code is valid for one domain only, except for the Enterprise license. Read the license agreement here - **[Classiebit Licenses](https://classiebit.com/license)** 👈.

    ---


<a name="install-via-web-installer"></a>
## Install via Web-Installer

Eventmie Pro also offers a web-installer for users unfamiliar with Laravel. The web-installer allows you to set up Eventmie Pro directly on your web server in just a few clicks—no coding required.

---

>{primary} Extract `eventmie-pro-webinstaller.zip` inside your website directory, e.g., `public_html` or `www`.

---

![Eventmie Web Installer](/images/v2/pro-installer.webp "Eventmie Web Installer")

---

>{primary} The web-installer sets up everything: Laravel Framework, Eventmie Pro package, and composer dependencies.

---

Follow these steps to get started with the web-installer:

1. Create a database on your cPanel/server and note the credentials: `database name`, `username`, and `password`.
2. After extracting `eventmie-pro-webinstaller.zip` in your website directory, go to that directory.
3. Open the `.env` file at the root (e.g., `public_html/.env`) and enter your database credentials:

    ```php
        DB_DATABASE=<database-name>
        DB_USERNAME=<database-user-username>
        DB_PASSWORD=<database-user-password>
    ```

3. Visit your website URL. When prompted, enter your license code and click Proceed.
4. After successful license verification, you'll be redirected to the Eventmie Pro web-installer steps form.
5. Follow the on-screen steps:

    * **Step-1: Check server requirements** <br>
    The installer will automatically check your server requirements and highlight any missing PHP extensions. If any are missing, install them or contact your hosting provider. Refresh the page after resolving any issues.

    
    * **Step-2: Check Folder Permissions** <br> 
    If you see a red cross, change the permissions for the `storage` and `bootstrap` folders (details provided on the installer page.)

    * **Step-3: Final Step** <br>
    Enter your Website Name & URL and click Install.



<a name="purchased-from-codecanyon"></a>
## Purchased From Codecanyon

If you purchased Eventmie Pro from Codecanyon (`codecanyon.net`), follow these steps:

1. Enter your `Purchase-code` as the License key in the Eventmie Pro installer.
2. Visit [classiebit.com](https://classiebit.com), sign up as a new user, and go to [Downloads](https://classiebit.com/downloads).
3. Click on <larecipe-button radius="half" type="black">Purchased from Codecanyon?</larecipe-button>
4. In the popup, enter your Purchase-code and submit. The product will appear in your download list.
5. Add the authorized domain where you will install Eventmie Pro, and you're ready to go. 👍



<a name="installation-errors"></a>
## Installation Errors

1. If you encounter the error `1071 Specified key was too long;` during installation, it's due to an older MySQL version. To resolve:

* Go to `config/database.php` and update the `mysql` section as follows:

    ```php
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'strict'    => false,
    'engine'    => 'InnoDB ROW_FORMAT=DYNAMIC',
    ```


2. If you're running MySQL `5.7` or older, disable strict mode in the `mysql` section of `config/database.php`:

    ```php
    'strict'    => false,
    ```

3. If you get a `classiebit/eventmie-pro package not found error`, it may be due to the `symlink` feature being disabled on some hosts. To fix:

- Delete the `classiebit` folder inside the `vendor` directory and run `composer update` in your website's root directory.


<a name="signup-error"></a>
## Signup Error

After installation, ensure you add your Mail server SMTP credentials in the Admin Panel.

- Go to the Admin Panel
- **Update the Admin email (admin@admin.com) to a real email address.**
- Click on Settings -> Mail tab
- Enter your mail server credentials.
- Test your SMTP credentials at [smtper.net](https://www.smtper.net) if emails are not being delivered.

---

>{warning} If some emails are sending but booking emails are not, it's likely due to the default admin@admin.com email. Please update it to a real email address.

---

![Admin email update](/images/update-admin-email.png "Admin email update")

---


<a name="update-admin-email"></a>
## Update Admin Email

After installation, update the Admin email and password:

- Go to the Admin Panel and click the Profile icon at the top-right.

    ---

    ![Admin email update](/images/1-admin-email.webp "Admin email update")

    ---

- Click Profile, then Edit Profile on the next page.

    ---

    ![Admin email update](/images/2-admin-email.webp "Admin email update")

    ---

- Update **admin@admin.com** to your real email address.

    ---

    ![Admin email update](/images/3-admin-email.webp "Admin email update")

    ---

- Also change the Admin password.