# Update Eventmie Pro & FullyLoaded: v2.0.x → v3.0.x

Upgrade your Eventmie Pro or FullyLoaded platform with confidence. This guide provides a step-by-step, industry-standard process to ensure a seamless, secure, and future-proof update—whether you're a developer, agency, or business owner.

---

>{success} Updating will **NEVER MODIFY OR DELETE** your website's existing user data, file uploads, or database tables.

---

### 🚀 Unlock the Complete Power of Eventmie Pro by upgrading to FullyLoaded Web + App Bundle – and Save Big!

**Already using Eventmie Pro?** Unlock advanced features, premium support, and enterprise scalability by upgrading to FullyLoaded. Save big on your Eventmie Pro website by upgrading to FullyLoaded.

**How to Upgrade:**
1. Contact our team at [info@classiebit.com](mailto:info@classiebit.com) or via your Classiebit account.
2. Pay only the difference (e.g., if you paid $69 for Pro, upgrade to FullyLoaded for just $430 more).
3. Receive your FullyLoaded license and upgrade instructions.
4. Follow the [FullyLoaded Upgrade Guide](./fullyloaded/upgrade) for any additional steps.

---

> {primary} **Seamless Upgrades:** Your data, settings, and customizations remain intact. Our team can assist with the upgrade process.

---

- [Server Requirements](#server-requirements)
- [Prerequisites & Backup](#prerequisites-backup)
- [Professional Update Services](#professional-update-services)
- [Step-by-Step Update Process](#step-by-step-update-process)
- [Post-Update: Configuration & Language Files](#post-update-configuration--language-files)
- [Troubleshooting & Checklist](#troubleshooting--checklist)
- [Need Help?](#need-help)

<a name="server-requirements"></a>
## Server Requirements

Before you begin, make sure your hosting/server meets these minimum requirements. Eventmie Pro & FullyLoaded is built on Laravel 11. (Laravel 12 support is coming soon)
- PHP >= 8.2
- MySQL >= 8.0 or MariaDB >= 10.3

---

> {primary} **Tip:** You can get started in minutes with Hostinger.com web hosting. Use our referral link to get 50% off + extra 20% off. 👉 [Click here to get started](https://www.hostinger.com/web-hosting?REFERRALCODE=classiebit) <br> Hostinger has all the features you need to get started with Eventmie Pro.

---

<a name="prerequisites-backup"></a> 
## Prerequisites & Backup

To upgrade to Eventmie Pro or FullyLoaded v3.0.x, please follow these prerequisites and backup your website:

--- 

> {warning} **Never skip backups!** This is your safety net in case of unexpected issues.

---

1. **Download the Latest Version:**
   - Get the latest Eventmie Pro or FullyLoaded from your [Classiebit.com Downloads](https://classiebit.com/downloads) account.

    ---

    ![Download Eventmie Pro](/images/v2/classiebit-downloads.webp "Download Eventmie Pro for Laravel")

    ---

2. **Backup Your Website:**
   - Backup all website files and your database.
   - Test your backup by restoring it on a staging server if possible.

3. **Check Customizations:**
   - Note any code customizations or third-party integrations.


<a name="professional-update-services"></a>
## Professional Update Services

Prefer expert assistance? Classiebit offers paid update services for all scenarios:

**Eventmie Pro**
- Simple Update (No Code Customizations): **$50**
- Advanced Update (With Code Customizations): **$150**

<br>
**FullyLoaded Web**
- Simple Update: **$100**
- Advanced Update: **$300**

<br>
**FullyLoaded Web + App**
- Simple Update: **$300**
- Advanced Update: **$500**

<br>
👉 To request a professional update, email [info@classiebit.com](mailto:info@classiebit.com). Our team ensures a zero-downtime, stress-free upgrade.



<a name="step-by-step-update-process"></a>
## Step-by-Step Update Process

Follow these steps for a successful upgrade:

1. **Extract the Update Package**
   - Unzip the downloaded package (`eventmie-pro-webinstaller-v3.0.zip` or `eventmie-pro-fullyloaded-3.0.zip`).
   - Overwrite your existing website directory with the new files.
2. **Update Composer Dependencies**
   - Run:
     ```bash
     composer update
     ```
   - On production/live servers, optimize for performance:
     ```bash
     composer install --optimize-autoloader --no-dev
     ```
3. **Run the Eventmie Pro Auto-Updater**
   - Complete the upgrade with:
     ```bash
     php artisan eventmie-pro:update
     ```
4. **Clear & Optimize Cache**
   - Ensure your site loads the latest changes:
     ```bash
     php artisan config:cache
     php artisan route:cache
     php artisan view:cache
     ```

---

<a name="post-update-configuration--language-files"></a>
## Post-Update: Configuration & Language Files

1. **Review Configuration:**
- Update your `config/eventmie.php` as needed. See the [Configuration Guide](./configuration.md) for all options and best practices.

2. **Update Language Files:**
- Sync your language files in `resources/lang/vendor/eventmie-pro` and `resources/lang/vendor/voyager`.
- For new languages or admin panel translations, follow the [Add New Language](./configuration.md#add-new-language) section.


<a name="troubleshooting--checklist"></a>
## Troubleshooting & Checklist

- [ ] Did you backup your files and database before starting?
- [ ] Did you overwrite all files with the new version?
- [ ] Did you run all Composer and Artisan commands?
- [ ] Did you update your configuration and language files?
- [ ] Are all features working as expected on your staging/live site?

---

> {success} If you encounter issues, restore your backup and contact support for assistance.

---

<a name="need-help"></a>
## Need Help?

**Support Email:** [info@classiebit.com](mailto:info@classiebit.com). Priority support and live event coverage available for enterprise clients.
  
---

> {primary} **Stay up to date:** Regularly check for new releases and follow best practices for security, performance, and deliverability.

---