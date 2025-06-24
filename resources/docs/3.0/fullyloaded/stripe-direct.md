<!--
Meta Description: Learn how to enable and configure Stripe Direct Payment (split payments) in Eventmie Pro FullyLoaded. Step-by-step guide for admin and organizer setup, automated payouts, and secure commission management in your Laravel event management platform.
Meta Keywords: Stripe Direct, split payments, Eventmie Pro FullyLoaded, Laravel Stripe integration, payout automation, organizer earnings, admin commission, payment gateway, event management, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# Stripe Direct Payment (Split Payments) for Eventmie Pro FullyLoaded

Enable Stripe Direct Payment to automate split payments between event organizers and admin in your Eventmie Pro FullyLoaded Laravel event management platform. Organizers receive their event earnings and admin receives commission directly into their respective Stripe accounts, ensuring fast and secure payouts.

<br>

With Stripe Direct, when a customer purchases a ticket, the organizer instantly receives their share (Organizer Earning) in their Stripe Account, while the admin receives their commission and tax (Admin Commission + Admin Tax) in the admin Stripe Account.

<br>

We have integrated the **[Stripe Direct Payment Gateway](https://stripe.com/docs/connect/enable-payment-acceptance-guide?platform=web)** for seamless split payments.

<br>

The Admin **Stripe Public Key** and **Stripe Secret Key** are the same as those used for **Stripe 3D Secure Checkout**. If you haven't enabled Stripe 3D Secure Checkout, create a Stripe Merchant Account at **[Stripe](https://stripe.com)**, then copy your `Stripe Public Key` and `Stripe Secret Key`.

<br>

Organizers must sign up for a Stripe account and connect their Stripe profile on your website to start receiving direct payouts.

-   [Admin Setup](#admin-setup)
-   [Organizer Setup](#organizer-setup)
-   [Admin Payout](#admin-payout)
-   [Organizer Payout](#organizer-payout)

<a name="admin-setup"></a>

## Admin Setup: Enable Stripe Direct Payment

Admin should follow these steps to enable Stripe Direct split payments:

<br>

1. Go to Admin Panel -> Settings -> Apps
2. Enter your `Stripe Public Key` & `Stripe Secret Key`
3. Turn on `Stripe Direct` and click **Save Settings**

---

![stripe-direct-setup](/images/v2/EventmieProFullyLoadedV2.0/PaymentGateways.webp "stripe-direct-setup")

---

<br>

You can use Stripe **Test** keys to test payments with Stripe Test Cards, or Stripe **Live** keys to accept real payments.

<a name="organizer-setup"></a>

## Organizer Setup: Connect Stripe for Direct Payouts

Organizers should follow these steps to start receiving payouts directly into their Stripe account:

1. Login as Organizer and go to `Profile`
2. Click on **Connect with Stripe**
3. You will be redirected to Stripe; follow the steps to connect your account.
4. Once connected, you will see the **Stripe Connected** button, confirming successful setup.

---

![stripe-direct-organizer-connect](/images/v2/EventmieProFullyLoadedV2.0/stripe-direct-organizer-connectd.webp "stripe-direct-organizer-connect")

---

![stripe-direct-organizer-connected](/images/v2/EventmieProFullyLoadedV2.0/stripe-direct-organizer-connect.webp "stripe-direct-organizer-connected")

---

![stripe-payment](/images/v2/EventmieProFullyLoadedV2.0/stripe-payment.webp "stripe-payment")

---

If the Admin has entered Stripe **Test** keys, the Organizer can connect a **Test Stripe account**. With Stripe **Live** keys, the Organizer can connect a **Real Stripe account** for live payouts.

<a name="admin-payout"></a>

## Admin Payout: Automated Commission & Payouts

With Stripe Direct, both Organizer and Admin receive direct payments into their bank accounts via Stripe. Payouts and admin commission processing are fully automated for efficient event management.

<br>

Admin will see the `Transferred` status as `Checked` in the Admin Commission section.

---

![admin-commission-payout](/images/v2/EventmieProFullyLoadedV2.0/admin-commission-payout.webp "admin-commission-payout")

---

<a name="organizer-payout"></a>

## Organizer Payout: Manage Earnings

If the Admin has enabled `Stripe Direct` but the Organizer has not connected their Stripe account, all payments will go to the Admin Stripe account. The Admin will then need to transfer the Organizer's payment manually via an external method.

<br>

Organizer will see the `Transferred` status as `Paid` in the `Manage Earnings` section.

---

![organizer-earning-payout](/images/v3/Organiser-payout-manage-earnings-image-48.webp "organizer-earning-payout")

---

> {primary} To disable Stripe Direct, simply turn off the `Stripe Direct` checkbox in your Admin Panel settings.

---
