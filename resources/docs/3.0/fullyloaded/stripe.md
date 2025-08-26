<!--
Meta Description: Accept secure online payments with Stripe 3D Secure Checkout in Eventmie Pro FullyLoaded. Easy, step-by-step guide for enabling Stripe, connecting payment alerts, and ensuring reliable bookings.
Meta Keywords: Stripe 3D Secure, Stripe payments, Eventmie Pro FullyLoaded, online payments, secure checkout, booking confirmations, payment alerts, event management, ticketing, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# Stripe 3D Secure Checkout Payment Gateway for Eventmie Pro FullyLoaded

## Why It Matters
Reliable payments are the heart of every successful event. With Stripe 3D Secure Checkout, guests complete bookings with confidence, organizers reduce failed transactions, and your team spends less time on payment follow‑ups. This means higher conversion at checkout, fewer support requests, and a smoother ticketing experience from start to finish.

Integrate Stripe 3D Secure Checkout to accept secure online payments in your Eventmie Pro FullyLoaded event management platform. Follow this simple guide to turn on Stripe, add your keys, and connect payment alerts for dependable booking confirmations.

To start accepting Stripe payments, first create a Stripe Merchant Account at **[Stripe](https://stripe.com)**. After setting up your account, copy your `Stripe Public Key` and `Stripe Secret Key`.

---

![stripe-setup](/images/v2/EventmieProFullyLoadedV2.0/PaymentGateways.webp "stripe-setup")

---

1. Go to Admin Panel -> Settings -> Apps
2. Enter your `Stripe Public Key` & `Stripe Secret Key` and click **Save Settings**

<br>

You can use Stripe **Test** keys to try payments with Stripe Test Cards, or Stripe **Live** keys to accept real payments from customers.

---

> {primary} To disable Stripe, simply remove the `Stripe Public Key` & `Stripe Secret Key` from your settings.

---

- [Stripe Payment Alerts (Automatic Confirmations)](#Webhook)

<a name="Webhook"></a>

# Stripe Payment Alerts (Automatic Confirmations)
In Eventmie Pro FullyLoaded v3.0 and above, Stripe payment alerts help prevent failed payments and missed bookings. Even if a guest closes the payment tab or loses internet right after paying, your website will still confirm the booking automatically through Stripe’s payment notifications.

### How to Turn On Stripe Payment Alerts in Eventmie Pro FullyLoaded

1. Go to Admin Panel -> Settings -> Apps
2. Enter your *LIVE* `Stripe Public Key` & `Stripe Secret Key` and click **Save Settings**
3. Open your web hosting/cPanel, and open Terminal in your website root directory (usually `public_html`)
4. Run the following command to connect your website with Stripe payment alerts:

    ```php
    php artisan cashier:webhook
    ```

    ---

    > {warning} Run the above command only on your live domain and with live Stripe keys for real payments.

    ---

### Finish Setup in Your Stripe Dashboard

After the above steps, complete the payment alert setup in your Stripe dashboard:

1. Go to Developers -> Webhooks tab -> Click Hosted Endpoint URL. See screenshot below:

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

> {success} All set! After each successful payment, you’ll see the confirmation in Stripe’s payment alerts page, and bookings will be confirmed automatically on your Eventmie Pro FullyLoaded website.

---
