# Eventmie Pro & FullyLoaded Configuration Guide

---

>{primary} Eventmie Pro publishes its config file at `config/eventmie.php`.

---

Easily tailor your Eventmie Pro or FullyLoaded installation to your business needs. This guide covers all essential configuration options, best practices, and professional tips to ensure your platform is secure, scalable, and ready for global audiences.

- [Route Prefix](#route-prefix)
- [Multiple Languages](#multiple-languages)
- [RTL Languages](#rtl-languages)
- [Default Language](#default-language)
- [Add New Language](#add-new-language)
- [Delete Language](#delete-language)


<a name="route-prefix"></a>
## Route Prefix

Control whether Eventmie Pro runs at your domain root (e.g. `example.com`) or under a subdirectory (e.g. `example.com/events`). This is essential for integrating with existing Laravel sites or customizing your admin panel URL.

```php
'route' => [
    'prefix'            => 'event-website', // Main site prefix
    'admin_prefix'      => 'secret-admin',  // Admin panel prefix
],
```

---

> {info} For multi-site or white-label setups, use unique prefixes for each deployment.

---

<a name="multiple-languages"></a>
## Multiple Languages

Eventmie Pro supports global audiences with multi-language and RTL support. Add or remove languages from the dropdown by editing the `locales` array:

```php
'locales'   => [
    'en', 'ar', 'de', 'fr', 'hi', 'it', 'ja', 'nl', 'ru', 'zh_CN', 'zh_TW',
],
```

---

> {success} All translations are stored in `resources/lang/vendor/eventmie-pro`.

---

<a name="rtl-languages"></a>
## RTL Languages

Eventmie Pro auto-detects RTL languages from the `rtl_langs` list and switches the UI direction. Add any new RTL language codes here:

```php
'rtl_langs'     => [
    'ar', // Arabic
    'fa', // Persian
    'he', // Hebrew
    'ms', // Malay
    'ur', // Urdu
    'ml'  // Malayalam
],
```


<a name="default-language"></a>
## Default Language

Set your default site language. Ensure it exists in the `locales` array.

```php
'default_lang'  => 'en',
```

---

> {primary} Edit translations in `resources/lang/vendor/eventmie-pro/<lang>/em.php`.

---

<a name="add-new-language"></a>
## Add New Language

1. Duplicate the `en` folder in `resources/lang/vendor/eventmie-pro` and rename it to your new language code (e.g. `ro` for Romanian).
- Suppose you wanna add `Romanian` language. Simply duplicate `en` folder and rename duplicated folder to `ro`.

    ```bash
    resources
        │
        ├── lang
            ├── vendor
                ├── eventmie-pro
                    ├── en
                    └── ro
    ```
2. Translate all values in the new `em.php` file.
3. Repeat for `resources/lang/vendor/voyager` for admin panel translations.
- Suppose you wanna add `Romanian` language. Simply duplicate `en` folder and rename duplicated folder to `ro`.

    ```bash
    resources
        │
        ├── lang
            ├── vendor
                ├── voyager
                    ├── en
                    └── ro
    ```
4. Add the new language code to the `locales` array in `config/eventmie.php`.
    ```php
    'locales'   => [
        'en',
        'ro',
        .
        .
    ],
    ```

---

> {success} Find more admin translations at [Voyager Translations](https://github.com/the-control-group/voyager/tree/1.4/publishable/lang)

---

<a name="delete-language"></a>
## Delete Language

1. Remove the language folder from both `resources/lang/vendor/eventmie-pro/` and `resources/lang/vendor/voyager/`.
2. Remove the language code from the `locales` array.
3. Run:

    ```bash
    php artisan eventmie-pro:translate-admin-panel
    ```

