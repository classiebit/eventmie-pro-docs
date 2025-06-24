<!--
Meta Description: Learn how to enable and configure Stripe 3D Secure Checkout Payment Gateway in Eventmie Pro FullyLoaded. Step-by-step guide for Stripe integration, webhook setup, and secure online payments in your Laravel event management platform.
Meta Keywords: Stripe 3D Secure, Stripe payment gateway, Eventmie Pro FullyLoaded, Laravel Stripe integration, Stripe webhook, online payments, secure checkout, payment setup, event management, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# Stripe 3D Secure Checkout Payment Gateway for Eventmie Pro FullyLoaded

Integrate Stripe 3D Secure Checkout to accept secure online payments in your Eventmie Pro FullyLoaded Laravel event management platform. Follow this guide to enable Stripe, configure your API keys, and set up webhooks for reliable payment processing.

To enable Stripe payments, first create a Stripe Merchant Account at **[Stripe](https://stripe.com)**. After setting up your account, copy your `Stripe Public Key` and `Stripe Secret Key`.

---

![stripe-setup](/images/v2/EventmieProFullyLoadedV2.0/PaymentGateways.webp "stripe-setup")

---

1. Go to Admin Panel -> Settings -> Apps
2. Enter your `Stripe Public Key` & `Stripe Secret Key` and click **Save Settings**

<br>

You can use Stripe **Test** keys to test payments with Stripe Test Cards, or Stripe **Live** keys to accept real payments from customers.

---

> {primary} To disable Stripe, simply remove the `Stripe Public Key` & `Stripe Secret Key` from your settings.

---

- [Webhook](#Webhook)

<a name="Webhook"></a>

## Stripe Webhook Integration for Zero Payment Failure

In Eventmie Pro FullyLoaded v3.0 and above, Stripe webhook integration ensures ZERO payment failure. Even if a customer closes the payment tab or faces network issues after payment, the system will still confirm successful bookings using Stripe webhooks.

### How to Activate Stripe Webhook in Eventmie Pro FullyLoaded

1. Go to Admin Panel -> Settings -> Apps
2. Enter your *LIVE* `Stripe Public Key` & `Stripe Secret Key` and click **Save Settings**
3. Access your web hosting/cPanel, open the terminal in your website root directory (*public_html*)
4. Run the following command to connect your website with Stripe webhook:

    ```php
    php artisan cashier:webhook
    ```

    ---

    > {warning} Run the above Stripe webhook command only on your live domain and with live Stripe keys for production payments.

    ---

### Configure Stripe Webhook in Stripe Dashboard

After the above steps, complete the webhook setup in your Stripe dashboard:

1. Go to Developers -> Webhooks Tab -> Click Hosted Endpoint URL. See screenshot below:

    ---

    ![stripe-webhook-1](/images/v2/1-stripe-webhook.webp "stripe-webhook-1")

    ---
    
2. Click the 3 Dots on the right -> Click Update Details. See screenshot below:

    ---

    ![stripe-webhook-2](/images/v2/2-stripe-webhook.webp "stripe-webhook-2")

    ---

3. Click on Select Events dropdown -> Search for Checkout -> Select all Checkout events -> Click Update Endpoint.

    ---

    ![stripe-webhook-3](/images/v2/3-stripe-webhook.webp "stripe-webhook-3")

    ---

4. Copy the webhook secret key from the right side and add it to your website Admin Panel.

    ---

    ![stripe-webhook-4](/images/v2/4-stripe-webhook.webp "stripe-webhook-4")

    ---

5. Go to website Admin Panel -> Settings -> Apps -> Stripe Webhook Secret Key

    ---

    ![stripe-webhook-5](/images/v2/5-stripe-webhook.webp "stripe-webhook-5")

    ---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/LnRQQ_vTO8I?si=HdQAltpuXof0qaT4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
---

> {success} Now you're all set! You will see successful events on the Stripe webhook page after each successful payment in your Eventmie Pro FullyLoaded website.

---