# Multiple Languages

Eventmie supports multiple languages, including Russian, Portuguese, Chinese, Japanese and even RTL languages such as Arabic, Persian, Urdu, etc. 

---

![Eventmie pro multi-langauge](/images/21-multi-regional.webp "Eventmie pro multi-langauge")

---

> {success} Eventmie `Auto-detects` **RTL** language and changes the website direction to **RTL**

---

- [Set Default Language](#Set-Default-Language)
- [Add New Language](#Add-New-Language)
- [Delete Language](#Delete-Language)


<a name="Set-Default-Language"></a>
## Set Default Language

Changing the default language is very simple. Go to Eventmie config `config/eventmie` file and change the `default_lang` to your preferred language.

<br>

```php
'default_lang'  => 'hi'
```

<br>

Here's a list of all available languages-

1. **en**       - English
2. **ar**       - عربى
3. **de**       - Deutsche
4. **fr**       - Française
5. **hi**       - हिन्दी
6. **it**       - Italiano
7. **ja**       - 日本語
8. **nl**       - Nederlands
9. **ru**       - русский
10. **zh-CN**   - 中国
11. **zh-TW**   - 中國



<a name="Add-Language"></a>
## Add Language

When you run Eventmie install command, it publishes all the languages to your application `resources/lang/vendor/eventmie` directory. So that if you wanna change something in an existing language, you can do so. 

1. And, to add a new language, simply copy the `en` directory and paste it as `<your_language_name_shortcode>`. Then translate all the variable's **VALUES** inside the new language folder `em.php` file.

    ---

    >{warning} Translate variable **VALUES** only and not **VARIABLE NAMES**

    ---

    e.g Suppose you wanna add `romanian` language. Simply copy the `en` folder and paste it as `ro`

    ```bash

        resources
            │
            ├── lang
                ├── vendor
                    ├── eventmie
                        ├── en
                        └── ro

    ```


2. Then open `resources/lang/vendor/eventmie/en/em.php` and add your language name

    ```php
        "en"        => 'English',
        "ar"        => 'عربى',
        "de"        => 'Deutsche',
        "fr"        => 'Française',
        "hi"        => 'हिन्दी',
        "it"        => 'Italiano',
        "ja"        => '日本語',
        "nl"        => 'Nederlands',
        "ru"        => 'русский',
        "zh-CN"     => '中国',
        "zh-TW"     => '中國',
        "ro"        => 'Română', // the new language
    ```


---

>{success} Once you add a new language, it'll be added to the language dropdown automatically.

---

<a name="Delete-Language"></a>
## Delete Language

Simply delete the language folder that you wanna remove from `resources/lang/vendor/eventmie/` and it'll be removed from the language dropdown automatically.
