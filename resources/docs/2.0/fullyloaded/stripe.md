> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# Stripe 3D Checkout Payment Gateway

To enable it, you first need to create a Stripe Merchant Account from **[Stripe](https://stripe.com)**. After setting up your account, you need to copy the `Stripe Public Key` and `Stripe Secret Key`.
After getting the Stripe keys, follow the below steps-

---

![stripe-setup](/images/v2/EventmieProFullyLoadedV2.0/PaymentGateways.webp "stripe-setup")

---

1. Go to Admin Panel -> Settings -> Apps
2. Enter `Stripe Public Key` & `Stripe Secret Key` and hit **Save Settings**

<br>

You can enter Stripe **Test** keys to Test payment using Stripe Test Card, and Stripe **Live** keys to make real payments.

---

> {primary} To Disable Stripe, simply remove the `Stripe Public Key` & `Stripe Secret Key`.

---



- [Webhook](#Webhook)

<a name="Webhook"></a>

## Webhook

In v2.0, we've integrated Stripe webhook for ZERO payment failure.

With Stripe webhook, even if the customer accidently closes the payment tab on Stripe checkout page, or due to any network issue, the customer fails to get back on the website after payment, then the system will not miss a successful booking and with the help of Stripe webhook, the system will make a booking for the customer as soon as customer makes the payment on Stripe.

Here's how you can activate Stripe webhook.

1. Go to Admin Panel -> Settings -> Apps 
2. You need to enter *LIVE* keys `Stripe Public Key` & `Stripe Secret Key` and hit **Save Settings**
3. Then you need to go to your web-hosting/cPanel and open the terminal in website root directory *public_html*.
4. Finally, run this command to make a connection between your website & Stripe webhook

    ```php
    php artisan cashier:webhook
    ```

    ---

    > {warning} Make sure you run the above Stripe webhook command on live domain and with live Stripe keys.

    ---


After following the above, you need to go to Stripe dashboard and follow the below steps-

1. Click Developers -> Webhooks Tab -> and click Hosted Endpoint URL. See the below screenshot-

    ---

    ![stripe-webhook-1](/images/v2/1-stripe-webhook.webp "stripe-webhook-1")

    ---
    
2. Click 3 Dots on Right side -> and click Update Details. See the below screenshot-

    ---

    ![stripe-webhook-2](/images/v2/2-stripe-webhook.webp "stripe-webhook-2")

    ---

3. Click on Select Events dropdown -> write Checkout in the search -> Click on Checkout to select all Checkout events -> click Update Endpoint.

    ---

    ![stripe-webhook-3](/images/v2/3-stripe-webhook.webp "stripe-webhook-3")

    ---

4. Then finally copy the webhook secret key from the Right side and add it on your website Admin Panel.

    ---

    ![stripe-webhook-4](/images/v2/4-stripe-webhook.webp "stripe-webhook-4")

    ---

5. Go to website Admin Panel -> Settings -> Apps -> Stripe Webhook Secret Key

    ---

    ![stripe-webhook-5](/images/v2/5-stripe-webhook.webp "stripe-webhook-5")

    ---


---

> {success} Now you're all set, you'll see successful events on Stripe webhook page after successful payments.

---