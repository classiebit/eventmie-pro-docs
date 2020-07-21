# Configuration

After installing Eventmie Pro, go to the Eventmie Pro config file at `config/eventmie.php`.

Although, we've set default options in it so that you can continue without changing any of default configurations.

But if you wanna change the default configurations and modify it according to your requirements, simply follow the below guidelines.


- [Route Prefix](#route-prefix)
- [Multiple Languages](#multiple-languages)
- [RTL Languages](#rtl-languages)
- [Default Language](#default-language)

<a name="route-prefix"></a>
## Route Prefix

The prefix is, whether to run Eventmie Pro as a base site e.g `example.com` or on a specific URL e.g `example.com/event-website`.

<br>
You can set a URL prefix. In case, you're installing it on the existing Laravel website, you'll want to set a URL prefix for Eventmie Pro.
e.g `example.com/event-website`. And `admin_prefix` is for changing the Admin Panel URL.


```php
'route' => [
    'prefix'            => 'event-website',
    'admin_prefix'      => 'secret-admin',
],
```


<a name="multiple-languages"></a>
## Multiple Languages

Add or remove language to add/remove language from the language dropdown.

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

>{success} Eventmie Pro detects RTL language from the `rtl_langs` list and changes site direction accordingly. 

---

We've added some pre-defined RTL languages. If you're adding a language which is RTL and which is not included in the below list, make sure you add that language in the `rtl_langs`.


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

The default language is English `en`. You can change it to any other. Make sure that the language that you're setting as default, must be in the above `locales` list.

```php
'default_lang'  => 'en',
```
