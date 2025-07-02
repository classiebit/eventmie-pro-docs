# Installation Guide

Welcome to the Eventmie Pro installation guide! This step-by-step documentation will help you install Eventmie Pro quickly and easily, whether you're a developer or a non-technical user.


- [Quick Start](#quick-start)
- [Server Requirements](#server-requirements)
- [Download Eventmie Pro](#download-eventmie-pro)
- [Install via Web Installer](#install-via-web-installer)
- [Purchased from Codecanyon?](#purchased-from-codecanyon)
- [Troubleshooting & Common Errors](#troubleshooting--common-errors)
- [Post-Installation Checklist](#post-installation-checklist)
- [Need Help?](#need-help)
- [Enterprise-Grade Hosting](#enterprise-grade-hosting)

---

<a name="quick-start"></a>
## Quick Start

1. **Check server requirements** (see below)
2. **Download Eventmie Pro** from our website [classiebit.com/downloads](https://classiebit.com/downloads) or Codecanyon.
3. **Extract and upload** the web installer to your server
4. **Set up your database**
5. **Run the website** in your browser and go through the installation process.
6. **Complete the post-installation checklist**

---

<a name="server-requirements"></a>
## Server Requirements

Before you begin, make sure your hosting/server meets these minimum requirements. Eventmie Pro is built on Laravel 11. (Laravel 12 support is coming soon)
- HTTPS enabled (SSL certificate) is required. Or else the Ticket scanner will not work and site will not load properly.
- PHP >= 8.2
- MySQL >= 8.0 or MariaDB >= 10.3
- Composer >= 2.0
- PHP Extensions:
    - **BCMath** | **Ctype** | **Fileinfo** | **JSON** | **Mbstring** | **OpenSSL** | **PDO** | **Tokenizer** | **XML** | **Curl** | **Intl** | **Zip** | **GD** or **Imagick** | **Iconv**

---

> {primary} **Tip:** You can get started in minutes with Hostinger.com web hosting. Use our referral link to get 50% off + extra 20% off. 👉 [Click here to get started](https://www.hostinger.com/web-hosting?REFERRALCODE=classiebit) <br> Hostinger has all the features you need to get started with Eventmie Pro.

---

<a name="download-eventmie-pro"></a>
## Download Eventmie Pro

1. Log in to your [Classiebit account](https://classiebit.com/downloads) (or Codecanyon, if purchased there).
2. Download the latest Eventmie Pro package.
3. Add your domain for license authorization (not required for localhost or **Enterprise** license).
4. Unzip the downloaded ZIP. Inside, you'll find:
    - `eventmie-pro-webinstaller.zip` – the complete Laravel website for web installer installation.

---

> {primary} **Note:** `eventmie-pro-webinstaller.zip` is a full Laravel project. You do NOT need to install Laravel separately.

---

<a name="install-via-web-installer"></a>
## Install via Web Installer

The web installer is designed for all users—no coding required!

### Step 1: Upload Files
- Extract `eventmie-pro-webinstaller.zip` to your web directory (e.g., `public_html`, `www`, or your project root).

### Step 2: Set Up Database
- Create a new MySQL/MariaDB database and user in your hosting control panel (e.g., cPanel, Plesk).
- Note the database name, username, and password.

### Step 3: Configure Environment
- Open the `.env` file in the root directory.
- Enter your database credentials:

    ```env
    DB_DATABASE=your_db_name
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_db_password
    ```

### Step 4: Run the Installer
- Visit your website URL in a browser (e.g., `https://yourdomain.com`).
- Enter your license code when prompted and click **Proceed**.
- Follow the on-screen steps:
    1. **Check Server Requirements** – Installer will highlight any missing PHP extensions.
    2. **Check Folder Permissions** – Set correct permissions for `storage` and `bootstrap` folders if needed.
    3. **Finalize Setup** – Enter your website name and URL, then click **Install**.

---

> {primary} The installer will automatically set up Laravel, Eventmie Pro, and all dependencies.

---

> {primary.fa-youtube} **Prefer video?** Watch our [step-by-step installation video](https://classiebit.com/academy/eventmie-pro/eventmie-pro-installation-with-installer) for a visual walkthrough.

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/a-eaCkehFe4?si=DcapZsjbL6ouMun-" title="Eventmie Pro step-by-step installation video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

---

<a name="purchased-from-codecanyon"></a>
## Purchased from Codecanyon?

1. Use your Codecanyon **Purchase Code** as the **license key** during installation.
2. Register at [classiebit.com](https://classiebit.com) and go to [Downloads](https://classiebit.com/downloads).
3. Click **Purchased from Codecanyon?** and enter your purchase code to access downloads and domain authorization.
4. Add the authorized domain where you will install Eventmie Pro, and you're ready to go. 👍

---

<a name="troubleshooting--common-errors"></a>
## Troubleshooting & Common Errors

### 1. `1071 Specified key was too long;`
- Caused by older MySQL versions. In `config/database.php`, update the `mysql` section:
    ```php
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'strict'    => false,
    'engine'    => 'InnoDB ROW_FORMAT=DYNAMIC',
    ```

### 2. MySQL Strict Mode
- For MySQL 5.7 or older, set `'strict' => false` in `config/database.php`.

### 3. `classiebit/eventmie-pro package not found`
- Delete the `classiebit` folder in `vendor` and run `composer update` in your project root.

### 4. Signup or Email Issues
- After installation, update your admin email and SMTP settings in the Admin Panel (see below).

---

<a name="post-installation-checklist"></a>
## Post-Installation Checklist

1. **Update Admin Email**
    - Log in to the Admin Panel
    - Change the default email (`admin@admin.com`) to your real email address
    - Go to **Settings → Mail** and enter your SMTP credentials
    - Test your SMTP at [smtper.net](https://www.smtper.net)

2. **Change Admin Password**
    - For security, update the default admin password

3. **Test Your Installation**
    - Create a test event and booking to ensure everything works

4. **Set Up Backups**
    - Configure regular backups for your files and database

---

<a name="need-help"></a>
## Need Help?

- **Documentation:** Explore the rest of the docs for advanced configuration, features, and troubleshooting.
- **Support:** Contact [info@classiebit.com](mailto:info@classiebit.com) for technical support or customization services.

---

> {success} **You're all set!** Enjoy your new Eventmie Pro platform. If you need help, we're here for you—before, during, and after your event.

---


---

<a name="enterprise-grade-hosting"></a>
## Need Enterprise-Grade Hosting?

Looking for high-performance, managed hosting for your Eventmie Pro platform? Our premium cloud hosting solutions provide:

- **AWS-powered infrastructure** with Laravel Forge management
- **24/7 monitoring and support** for peace of mind
- **Automatic scaling** to handle traffic spikes during major events
- **Zero-downtime migrations** from your current hosting
- **Priority live event support** for mission-critical events

Perfect for high-traffic events, enterprise clients, and organizations that need reliability and performance.

👉 **[Learn more about our Cloud Hosting & Managed AWS Solutions →](/{{route}}/{{version}}/fullyloaded/cloud-hosting)**

---

