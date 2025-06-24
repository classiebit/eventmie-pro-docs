# Settings

Begin by configuring the global settings for Eventmie Pro to ensure your event management platform is tailored to your brand and business needs. Start from the Admin Panel to set up essential data before moving to the front-end.

---

>{primary} To access Settings, log in as Admin and navigate to `Admin Panel -> Settings`

---

> {warning} Please carefully read and follow the guidelines provided below each setting for optimal configuration.


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

Establish your website's brand identity and visual presence.


|Setting Name|Type|Description|
|:-|:-|
|Site Name|`text`|Your brand or business name|
|Site Slogan|`text`|Your website's tagline or slogan|
|Site Logo|`image:jpg|jpeg|png`|Upload your logo image|
|Site Favicon|`image:jpg|jpeg|png`|Upload your favicon/icon|
|Extra Footer Credits|`rich-text`|Customize footer credits|



<a name="SEO"></a>
## SEO

Configure global SEO meta tags to improve your website's search engine ranking and visibility.


|Setting Name|Type|Description|
|:-|:-|
|Meta Title|`text`|A concise title that describes your event business|
|Meta Keywords|`text`|Comma-separated keywords relevant to your event platform|
|Meta Description|`text`|A brief description of your website for search engines|



<a name="Social"></a>
## Social

Connect your event management platform to your social media profiles for better engagement and brand awareness.


|Setting Name|Type|Description|
|:-|:-|
|Facebook Page Username|`text`|Your Facebook page **username** only|
|Twitter Account Username|`text`|Your Twitter account **username** only|
|Instagram URL|`url`|Full URL to your Instagram profile|
|Linkedin URL|`url`|Full URL to your LinkedIn profile or company page|




<a name="Contact"></a>
## Contact

Provide accurate contact information for your event business.


|Setting Name|Type|Description|
|:-|:-|
|Address|`text`|Your office or business address|
|Phone|`number`|Official phone number|
|Email|`email`|Official email address|
|Google Map Lat|`coordinates`|Latitude for your office location|
|Google Map Long|`coordinates`|Longitude for your office location|




<a name="Booking"></a>
## Booking

Manage global booking and event settings to optimize the attendee experience and streamline event operations.


|Setting Name|Type|Description|
|:-|:-|
|Pre Booking Time|`number`|Number of hours before an event that customers can book|
|Pre Cancellation Time|`number`|Number of hours before an event that customers can request a booking cancellation|
|Hide Expired Events|`enable/disable`|Show or hide expired events on the event listing page|
|Max Ticket Qty Limit Per Order|`number`|Maximum number of tickets per order (recommended: under 100)|
|Allow Offline Payment For Organizer|`enable/disable`|Enable or disable offline payment for organizers|
|Allow Offline Payment For Customer|`enable/disable`|Enable or disable offline payment for customers|
|Disable Booking Cancellation|`enable/disable`|Enable or disable booking cancellation for customers|
|Disable Ticket Download|`enable/disable`|Enable or disable ticket download for customers|
|Disable Google Calendar|`enable/disable`|Enable or disable Google Calendar integration for customers|

---

>{primary} Admins can always make bookings using the Offline Payment method.

---

<a name="Multi-Vendor"></a>
## Multi-Vendor

Switch between single-vendor and multi-vendor modes to control how events are managed and who can organize them.

|Setting Name|Type|Description|
|:-|:-|
|Multi Vendor|`enable/disable`|Enable or disable the multi-vendor feature|
|Admin Commission|`number`|Set your commission percentage (must be a positive value)|
|Verify Email Before Login|`enable/disable`|Require users to verify their email after signup|
|Publish Event After Admin Approval|`enable/disable`|Require admin approval before events go live|
|Manually Approve Organizer|`enable/disable`|Require admin approval for customers to become organizers|

---

> {info} Learn more about the Organizer Manual Approval Process here **[Organiser Manual Approval](https://eventmie-pro-docs.classiebit.com/docs/1.7/admin/organiser-approval)** 👈

---


<a name="Admin"></a>
## Admin

Customize the appearance and content of your admin panel for a professional and branded experience.


|Setting Name|Type|Description|
|:-|:-|
|Admin Background Image|`image:jpg,jpeg,png`|Background image for the admin login page|
|Admin Title|`text`|Title and header for the admin login page|
|Admin Description|`text`|Subtitle for the admin login page|
|Admin Loader|`image:jpg,jpeg,png`|Loader image for the admin login page|
|Admin Icon Image|`image:jpg,jpeg,png`|Logo for the admin panel|







<a name="Apps"></a>
## Apps

Integrate external applications and APIs to enhance your event platform's functionality.


|Setting Name|Type|Description|
|:-|:-|
|Google Client ID|`string`|Google OAuth client ID|
|Google Client Secret|`string`|Google OAuth client secret|
|Google Map Key|`string`|Google Maps API key|
|Facebook App Id|`string`|Facebook OAuth app ID|
|Facebook App Secret|`string`|Facebook OAuth app secret|
|PayPal Client Id|`string`|PayPal client ID (REST API)|
|PayPal Secret|`string`|PayPal secret (REST API)|
|PayPal Production Mode|`enable/disable`|Enable or disable live PayPal payments|



<a name="payment-methods"></a>
## Payment Methods

Eventmie Pro supports **PayPal** express checkout and **Offline Payment** methods for flexible event ticketing and payment processing.

---

>{success} For free tickets, users can book directly without using a payment gateway.

---


1. **Admin** - Can only use the Offline Payment method to make bookings for customers.

2. **Organizer** - Can use PayPal & Offline Payment methods to make bookings for customers.

3. **Customer** - Can use PayPal & Offline Payment methods to book tickets for themselves.

---

>{primary} PayPal is excluded for Admin, as it is not necessary to pay yourself. 🤑

---

<a name="paypal"></a>
## PayPal

To enable PayPal payments for your event website:

1. Go to `Admin Panel -> Settings -> Apps Tab`.
2. Enter your PayPal account `Client Id` & `Secret`.
3. Add the **Callback URL** to your PayPal account: `<yourwebsite.com>/bookings/paypal/callback`.
4. Initially, keep `PayPal Production Mode` disabled and make a test booking.
5. If the test booking is successful, enable production mode to start accepting real payments.

<br>

---

#### Steps to set up PayPal Client ID and Secret:

<br>

1. Set up PayPal Sandbox for test payments:
    - Log in to your PayPal account and visit the [PayPal Developer Dashboard](https://developer.paypal.com/developer/accountStatus/)
    - Click on **Sandbox** and then **Create App**
    ---
    ![1-paypal](/images/1-paypal.webp "1-paypal")
    ---
    - Enter the **App Name** (e.g., **Example Sandbox**), select App Type as **Merchant**, keep the **Sandbox Business Account** as is, and click **Create App**.
    ---
    ![2-paypal](/images/2-paypal.webp "2-paypal")
    ---
    - Copy the **Client ID & Secret** and go to your event website **Admin Panel → Settings → App**. Add these credentials in **PayPal client ID** and **PayPal secret** fields, and keep **Production Mode Off** for sandbox testing.
    ---
    ![3-paypal](/images/3-paypal.webp "3-paypal")
    ---
    - Copy the **PayPal Callback URL** from **Admin Panel → Settings → App** and add it to PayPal as the **Return URL**. Click **Save**.
    ---
    ![5-paypal](/images/5-paypal.webp "5-paypal")
    ---
<br>

2. Set up PayPal Live (production) for real payments:
    - Visit the [PayPal Developer Dashboard](https://developer.paypal.com/developer/accountStatus/)
    - Select **Live** and click **Create App**
    ---
    ![6-paypal](/images/6-paypal.webp "6-paypal")
    ---
    - Enter the **App Name** (e.g., Example Live) and click **Create app**
    ---
    ![7-paypal](/images/7-paypal.webp "7-paypal")
    ---
    - Enter the same **Callback URL**, check the required checkboxes, and click **Save**
    ---
    ![8-paypal](/images/8-paypal.webp "8-paypal")
    ---
    - Copy the Live App **Client ID & Secret** and go to **Admin → Settings → Apps**. Enter them in the **PayPal Client ID** & **Secret** fields, and turn **Production Mode On**
    ---
    ![9-paypal](/images/9-paypal.webp "9-paypal")
    ---
    ![10-paypal](/images/10-paypal.webp "10-paypal")
    ---
    - You can now test live payments on your website




<a name="offline-payment"></a>
## Offline Payment

Offline payment allows booking premium tickets without online payment. By default, this method is disabled. To enable Offline Payment:

1. Go to `Admin Panel -> Settings -> Bookings Tab`.
2. Enable `Allow Offline Payment For Organizer` & `Allow Offline Payment For Customer`.
3. You can enable or disable offline payment for Organizers & Customers separately as needed.

---

>{primary} Admins can always make bookings using the Offline Payment method.

---




<a name="Mail"></a>
## Mail

Configure your email settings to ensure reliable communication with attendees and organizers.


|Setting Name|Type|Description|
|:-|:-|
|Mail Driver|`string`|Mail driver name (e.g., smtp)|
|Mail Host|`string`|Mail host (e.g., 127.0.0.1)|
|Mail Port|`string`|Mail port (e.g., 1025)|
|Mail Username|`string`|Mail username (e.g., testuser)|
|Mail Password|`string`|Mail password (e.g., testpwd)|
|Mail Encryption|`list`|Choose: disable, SSL, or TLS|
|Mail Sender Email|`email`|Sender email (e.g., eventmie@classiebit.com)|
|Mail Sender Name|`string`|Sender name (e.g., Eventmie)|






<a name="Regional"></a>
## Regional

Set up region-specific configurations for accurate time, currency, and localization.


|Setting Name|Type|Description|
|:-|:-|
|Timezone|`list`|Select your region-specific timezone|
|Currency|`string`|Set your default currency|
|Date Format|`list`|Choose your preferred date format|
|Time Format|`list`|Choose your preferred time format|


<br>

#### Automatic Timezone Conversion from Server-side to Client-side & vice versa.

- If your default timezone is `America/Los_Angeles` and a customer visits from `India/Kolkata`, the customer will see dates and times in their local timezone, while `America/Los_Angeles` remains the website's central timezone.

---

> {success} Eventmie Pro automatically detects visitors' timezones and handles server-to-client DateTime conversions seamlessly.

---



