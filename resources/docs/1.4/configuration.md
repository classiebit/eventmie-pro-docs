# Configuration

---

>{primary} Eventmie Pro publishes its config file at `config/eventmie.php`

---

If you wanna change any of default configurations, simply follow the below guidelines.


- [Route Prefix](#route-prefix)
- [Multiple Languages](#multiple-languages)
- [RTL Languages](#rtl-languages)
- [Default Language](#default-language)
- [Add New Language](#add-new-language)
- [Delete Language](#delete-language)


<a name="route-prefix"></a>
## Route Prefix

The prefix is, whether to run Eventmie Pro as a base site e.g `example.com` or on a specific URL e.g `example.com/event-website`.

<br>
In case, you're installing it on the existing Laravel website, you'll want to set a URL prefix
e.g `example.com/event-website`. And `admin_prefix` is for changing the Admin Panel URL.


```php
'route' => [
    'prefix'            => 'event-website',
    'admin_prefix'      => 'secret-admin',
],
```


<a name="multiple-languages"></a>
## Multiple Languages

Eventmie supports multiple languages including **RTL**. Add/remove language to add/remove language from the language dropdown.

```php
'locales'   => [
    'en',
    'ar',
    'de',
    'fr',
    'hi',
    'it',
    'ja',
    'nl',
    'ru',
    'zh_CN',
    'zh_TW',
],
```


<a name="rtl-languages"></a>
## RTL Languages

---

>{success} Eventmie Pro auto-detects RTL languages from the `rtl_langs` list and changes website direction to RTL. 

---

We've added some pre-defined RTL languages. If you're adding a new RTL language that is not included in the `rtl_langs` list, make sure you add it there.


```php
'rtl_langs'     => [
    'ar', // arabic
    'fa', // persian
    'he', // hebrew
    'ms', // malay
    'ur', // urdu
    'ml' // malayalam
],
```


<a name="default-language"></a>
## Default Language


---

>{success} Eventmie Pro publishes its languages to your application `resources/lang/vendor/eventmie-pro` directory. You can change the translations from there. 

---

The default language is English `en`. You can change it to any other. Make sure that the language that you're setting as default, must be in the above `locales` list.

```php
'default_lang'  => 'en',
```


<a name="add-new-language"></a>
## Add New Language


1. Go to the language directory `resources/lang/vendor/eventmie-pro`.
2. Duplicate the `en` directory and rename it to `<new_language_shortname>`. 

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

3. Translate all the variable's **VALUES** (right-side only) inside the new language folder's `em.php` file.

    ---

    >{primary} The below language files are for Admin Panel translations.

    ---

4. Go to the language directory `resources/lang/vendor/voyager`.
5. Duplicate the `en` directory and rename it to `<new_language_shortname>`. 
6. Translate all the variable's **VALUES** (right-side only) inside the new language folder's `*all` files.

    


7. Add the language short name to the `config/eventmie.php` `locales` list.

    ```php
    'locales'   => [
        'en',
        'ro',
        .
        .
    ],
    ```

8. And finally, this one will update the database -> `translations` table that's responsible for showing the Admin Panel in multiple languages.

    ```php
    php artisan eventmie-pro:translate-admin-panel
    ```


<a name="Delete-Language"></a>
## Delete Language

1. Delete the language folder from `resources/lang/vendor/eventmie-pro/` & `resources/lang/vendor/voyager`.
2. Remove the language short name from the `config/eventmie.php` `locales` list.
3. And run this-

    ```php
    php artisan eventmie-pro:translate-admin-panel
    ```