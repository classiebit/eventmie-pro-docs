# Installation

Anofie comes with a installer which make the installation process smoother as beer 🍻 (cheers!)


![screenshot](http://anofie_docs.test/images/anofie-pro-installer.png)


---

- [Server Requirements](#Server-Requirements)
- [Install](#Install)


<a name="Server-Requirements"></a>
## Server Requirements

1. PHP version 5.6 or newer is recommended.


<a name="Install"></a>
## Install

1. Unzip the package.
2. Copy all from the Anofie folder and paste into your website directory.
3. You website directory must look like below.

    ```bash

    xyz.com
    │
    ├── application
    ├── captcha
    ├── install
    ├── system
    ├── themes
    ├── upload
    │
    ├── .htaccess
    └── index.php

    ```

4. Visit `xyz.com/install` to open the installer.
5. Then enter your database credentials.

    > {info} If installing on local system, please do not create the database, just enter your localhost database credentials and the installer will auto create the new database.

6. You can choose if you want to install with or without dummy data.
7. Click Install to start the installation process.


> {primary} After installation if you see something like `Error number: 1146 Table settings doesn't exists` or a `blank page`, then just reload the browser.


---