# Settings

Let's first start by setting up Eventmie Pro global settings. We're starting from Admin Panel, so that we can set some initial data before moving on to front-end.

---

>{primary} To visit Settings, log in as Admin and then `Admin Panel -> Settings`

---

> {warning} Please read the guidelines provided below each setting, and follow exactly mentioned.


- [Site](#Site)
- [SEO](#SEO)
- [Social](#Social)
- [Contact](#Contact)
- [Booking](#Booking)
- [Multi-Vendor](#Multi-Vendor)
- [Admin](#Admin)
- [Apps](#Apps)
- [Payment Methods](#payment-methods)
- [PayPal](#paypal)
- [Offline Payment](#offline-payment)
- [Mail](#Mail)
- [Regional](#Regional)

<a name="Site"></a>
## Site

Setup website brand identity.


|Setting Name|Type|Description|
|:-|:-|
|Site Name|`text`|brand name|
|Site Slogan|`text`|Tagline|
|Site Logo|`image:jpg|jpeg|png`|Logo|
|Site Favicon|`image:jpg|jpeg|png`|Favicon/icon|
|Extra Footer Credits|`rich-text`|Change footer credits|



<a name="SEO"></a>
## SEO

Set website's global SEO meta tags.


|Setting Name|Type|Description|
|:-|:-|
|Meta Title|`text`|short title explaining your business|
|Meta Keywords|`text`|comma separated unique keywords that describe your website in-short|
|Meta Description|`text`|short description of your website|



<a name="Social"></a>
## Social

About your social-media existence.


|Setting Name|Type|Description|
|:-|:-|
|Facebook Page Username|`text`|Facebook page **username** only|
|Twitter Account Username|`text`|Twitter account **username** only|
|Instagram URL|`url`|Instagram profile **URL**|
|Linkedin URL|`url`|Linkedin profile/company **URL**|




<a name="Contact"></a>
## Contact

Contact details


|Setting Name|Type|Description|
|:-|:-|
|Address|`text`|office address|
|Phone|`number`|office phone number|
|Email|`email`|office email|
|Google Map Lat|`coordinates`|Google map coordinates **Lat** of your office address| 
|Google Map Long|`coordinates`|Google map coordinates **Long** of your office address| 




<a name="Booking"></a>
## Booking

Bookings & Events global settings.


|Setting Name|Type|Description|
|:-|:-|
|Pre Booking Time|`number`|total number of hours before, a customer can book an event|
|Pre Cancellation Time|`number`|total number of hours before, a customer can request Booking Cancellation|
|Hide Expired Events|`enable/disable`|Show/Hide expired events on event listing page|
|Max Ticket Qty Limit Per Order|`number`|Set Max ticket quantity limit to be purchased in a single order. WARNING: keep it under 100|
|Allow Offline Payment For Organizer|`enable/disable`|Enable/Disable offline payment method for Organizers|
|Allow Offline Payment For Customer|`enable/disable`|Enable/Disable offline payment method for Customers|

---

>{primary} Admin can always make a booking via the Offline Payment method.

---

<a name="Multi-Vendor"></a>
## Multi-Vendor

Switch between Multi-vendor mode

|Setting Name|Type|Description|
|:-|:-|
|Multi Vendor|`enable/disable`|turn on or off the multi-vendor option|
|Admin Commission|`number`|set your commission in (%) percentage. (must be positive value)|
|Verify Email Before Login|`enable/disable`|If enabled, users will need to verify email after signup|
|Publish Event After Admin Approval|`enable/disable`|If enabled, the event will go live only after Admin approval|



<a name="Admin"></a>
## Admin

Admin panel content settings


|Setting Name|Type|Description|
|:-|:-|
|Admin Background Image|`image:jpg,jpeg,png`|admin login page background image|
|Admin Title|`text`|admin login page title & header title|
|Admin Description|`text`|admin login page sub-title|
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
|PayPal Client Id|`string`|Paypal client id (New Rest API)|
|PayPal Secret|`string`|Paypal secret (New Rest API)|
|PayPal Production Mode|`enable/disable`|Turn on/off production (real) mode payments|



<a name="payment-methods"></a>
## Payment Methods

Eventmie Pro comes with **PayPal** express checkout system and **Offline Payment** method.

---

>{success} In case of Free tickets, users can book tickets directly without going through the payment gateway.

---


1. **Admin** - Can only use the Offline Payment method to make bookings for customers.

2. **Organizer** - Can use PayPal & Offline Payment method to make bookings for customers.

3. **Customer** - Can use PayPal & Offline Payment method to make bookings for themselves.

---

>{primary} We've excluded PayPal for Admin, because, it does not make any sense to pay yourself. 🤑

---

<a name="paypal"></a>
## PayPal

To get started with PayPal, simply-

1. Go to `Admin Panel -> Settings -> Apps Tab`.
2. Add your PayPal account `Client Id` & `Secret`.
3. Add the **Callback URL** to your PayPal account- `<yourwebsite.com>/bookings/paypal/callback`.
4. Then, first, keep the `PayPal Production Mode` disabled, and make a test booking.
5. If test booking successful, enable the production mode to start receiving real payments.


<a name="offline-payment"></a>
## Offline Payment

Offline payment means, booking a premium ticket without making online payment. By default, the offline payment method is disabled. You need to enable it first. To get started with Offline Payment, simply-

1. Go to `Admin Panel -> Settings -> Bookings Tab`.
2. Turn on `Allow Offline Payment For Organizer` & `Allow Offline Payment For Customer`.
3. You can turn on/off offline payment for Organizers & Customers separately, depending on your requirements.

---

>{primary} Admin can always make a booking via the Offline Payment method.

---




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
|Mail Encryption|`list`|disable, SSL, TLS|
|Mail Sender Email|`email`|Sender email e.g eventmie@classiebit.com|
|Mail Sender Name|`string`|Sender Name e.g Eventmie|






<a name="Regional"></a>
## Regional

Region-specific configurations.


|Setting Name|Type|Description|
|:-|:-|
|Timezone|`list`|Choose your region specific timezone|
|Currency|`list`|Choose your default currency|


<br>

#### Auto Timezone Conversion from Server-side to Client-side & vice versa.

- Suppose the default timezone is `America/Los_Angeles` and a customer visiting the website from `India/Kolkata`, then the customer will see the date & time according to `India/Kolkata` timezone.

    ---

    > {success} Eventmie Pro detects visitor's timezone and does all the conversions behind the scenes.

    ---


