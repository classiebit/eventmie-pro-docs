# Settings

Here you can manage Eventmie Pro global settings.

> {warning} Please, carefully read all the guidelines provided below for each setting, or else it may break down the your site.

---

> {danger} Please make sure you use the exact same setting value type e.g string, numeric, etc.

---

- [Site](#Site)
- [SEO](#SEO)
- [Social](#Social)
- [Contact](#Contact)
- [Booking](#Booking)
- [Multi-Vendor](#Multi-Vendor)
- [Admin](#Admin)
- [Apps](#Apps)
- [Mail](#Mail)
- [Regional](#Regional)

<a name="Site"></a>
## Site

Change your website branding here.


|Setting Name|Type|Description|
|:-|:-|
|Site Name|`alpha`|brand name|
|Site Slogan|`alpha`|brand tagline|
|Site Logo|`image:jpg|jpeg|png`|brand Logo image|
|Site Favicon|`image:jpg|jpeg|png`|website favicon|



<a name="SEO"></a>
## SEO

Website SEO


|Setting Name|Type|Description|
|:-|:-|
|Meta Title|`alpha`|short title of your website|
|Meta Tags|`alpha`|comma seperated unique words that describes your website|
|Meta Description|`alpha`|short description of your website|



<a name="Social"></a>
## Social

About your social existence.


|Setting Name|Type|Description|
|:-|:-|
|Facebook Page Username|`alpha`|Enter your Facebook page **username** only|
|Twitter Account Username|`alpha`|Enter your Twitter account **username** only|
|Instagram URL|`url`|Enter your Instagram profile **URL**|
|Linkedin URL|`url`|Enter your Linkedin profile **URL**|




<a name="Contact"></a>
## Contact

Your contact info.


|Setting Name|Type|Description|
|:-|:-|
|Address|`alpha`|Enter your office address|
|Phone|`numeric`|Enter your office phone number|
|Email|`email`|Enter your official email address|
|Google Map Lat|`numeric`|Google map coordinates **Lat** of your office address| 
|Google Map Long|`numeric`|Google map coordinates **Long** of your office address| 




<a name="Booking"></a>
## Booking

Bookings and Events global settings.


|Setting Name|Type|Description|
|:-|:-|
|Pre Booking Time|`integer`|Enter total hours for how many hours before a customer can book an event|
|Pre Cancellation Time|`integer`|Enter total hours for how many hours before a customer can request for Cancellation|
|Maximum Ticket Quantity|`integer`|Enter max ticket quantity to limit quantity per ticket|
|Hide Expired Events|`bool`|If you want to show or hide the expired events on the website|





<a name="Multi-Vendor"></a>
## Multi-Vendor

Flexibility to use Eventmie as a - 

- multi-vendor website where other organisers can host their events, or 
- you as a single organisation wanna host events.


|Setting Name|Type|Description|
|:-|:-|
|Multi Vendor|`bool`|turn on or off the multi-vendor option|
|Admin Commission|`numeric|gte:0`|In multi-vendor mode, set your commission in (%) percentage. (must be positive value)|






<a name="Admin"></a>
## Admin

Admin panel content settings


|Setting Name|Type|Description|
|:-|:-|
|Admin Background Image|`image:jpg,jpeg,png`|admin login page background image|
|Admin Title|`alpha`|admin login page title & header title|
|Admin Description|`alpha`|admin login page sub-title|
|Admin Loader|`image:jpg,jpeg,png`|admin login page sub-title|
|Admin Icon Image|`image:jpg,jpeg,png`|admin panel logo|






<a name="Apps"></a>
## Apps

External Apps credentials


|Setting Name|Type|Description|
|:-|:-|
|Google Client ID|`string`|Google OAuth client id|
|Google Client Secret|`string`|Google OAuth client secret|
|Google Map Key|`string`|Google Map Key|
|Facebook App Id|`string`|Facebook OAuth app id|
|Facebook App Secret|`string`|Facebook OAuth app secret|
|PayPal Client Id|`string`|Paypal client id (New Rest APi)|
|PayPal Secret|`string`|Paypal secret (New Rest APi)|
|PayPal Production Mode|`bool`|Turn on/off production (real) mode payments|






<a name="Mail"></a>
## Mail

Mail sending configurations


|Setting Name|Type|Description|
|:-|:-|
|Mail Driver|`string`|Mail driver name e.g smtp|
|Mail Host|`string`|Mail host e.g 127.0.0.1|
|Mail Port|`string`|Mail Port e.g 1025|
|Mail Username|`string`|Mail Username e.g testuser|
|Mail Password|`string`|Mail Password e.g testpwd|
|Mail Encryption|`list`|disable, ssl, tls|
|Mail Sender Email|`email`|Sender email e.g eventmie@classiebit.com|
|Mail Sender Name|`string`|Sender Name e.g Eventmie|






<a name="Regional"></a>
## Regional

Region specific configurations.


|Setting Name|Type|Description|
|:-|:-|
|Timezone|`list`|Choose your region specific timezone|
|Currency|`list`|Choose your default currency|
