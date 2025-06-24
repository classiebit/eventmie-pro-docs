<!--
Meta Description: Learn how to enable and configure BitPay Crypto Payment Gateway in Eventmie Pro FullyLoaded. Step-by-step guide for accepting Bitcoin, Ethereum, and other cryptocurrencies, merchant account setup, and secure crypto payments in your Laravel event management platform.
Meta Keywords: BitPay, crypto payment gateway, Eventmie Pro FullyLoaded, cryptocurrency payments, Bitcoin, Ethereum, Laravel BitPay integration, merchant account, secure payments, event management, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# BitPay Crypto Payment Gateway Integration for Eventmie Pro FullyLoaded

Enable BitPay Crypto Payment Gateway to accept Bitcoin, Ethereum, and all major cryptocurrencies in your Eventmie Pro FullyLoaded Laravel event management platform. BitPay allows you to receive secure crypto payments from attendees worldwide, including payments via the BitPay wallet.

---

![6-bitpay-make-payment](/images/fullyloaded/6-bitpay-make-payment.webp "6-bitpay-make-payment")

---

<br>

To activate BitPay, follow the setup process below. After configuration, attendees can pay using a wide range of cryptocurrencies supported by BitPay.

-   [Requirements](#Requirements)
-   [Setup Test BitPay](#Setup-Test-BitPay)
-   [Setup Production BitPay](#Setup-Production-BitPay)
-   [Pay with Cryptocurrencies](#Pay-with-Cryptocurrencies)

<a name="Requirements"></a>

## Requirements for BitPay Crypto Payments

1. Set up a Test BitPay Merchant account at [test.bitpay.com](https://test.bitpay.com/)
2. Set up a Production BitPay Merchant account at [bitpay.com](https://bitpay.com/)

<a name="Setup-Test-BitPay"></a>

## How to Setup Test BitPay (Sandbox)

You can only set up BitPay online (not on localhost). Please upload your website to your live domain before proceeding.

Now, let's set up Test BitPay for test payments. The production BitPay setup is the same as test. Make sure you create a BitPay merchant account for both environments.

1. Login to your website as Admin and go to Admin Panel -> Settings -> Apps tab.
2. Enter:
    - BitPay Key Name: Enter a new random value (e.g. AbcXyzzMedia)
    - BitPay Encrypt Code: Enter a new random secret code (e.g. KJHakj879&*kjkjh)
    - Keep BitPay Production Off

    ***

    ![1-bitpay-admin-panel](/images/fullyloaded/1-bitpay-admin-panel.webp "1-bitpay-admin-panel")

    ***

    > {primary} The BitPay Key Name and Encrypt Code are not provided by BitPay; you can enter any random secret code. Do not change them once entered.

    ***

3. Logout as Admin and login with a Customer account. Keep this tab open.

    ***

    ![2-bitpay-website-two-tabs](/images/fullyloaded/2-bitpay-website-two-tabs.webp "2-bitpay-website-two-tabs")

    ***

4. Open a new tab and visit [test.bitpay.com](https://test.bitpay.com/).
5. Login to your Test BitPay Merchant account.
6. Switch to your website tab, go to an Event Page, and checkout with BitPay.

    ***

    ![3-bitpay-checkout](/images/v2/EventmieProFullyLoadedV2.0/5.3-bitpay-checkout.webp "3-bitpay-checkout")

    ***

7. This checkout creates a BitPay Test credentials file on your server, connecting your website to your BitPay Merchant account.
8. Enter your website/brand name in Client ID and click Approve.

    ***

    ![4-bitpay-approve](/images/fullyloaded/4-bitpay-approve.webp "4-bitpay-approve")

    ***

9. Close the BitPay tab. Test setup is complete.

<a name="Setup-Production-BitPay"></a>

## How to Setup Production BitPay (Live Crypto Payments)

Set up Production BitPay to accept real cryptocurrency payments into your BitPay account.

1. Login to your website as Admin and go to Admin Panel -> Settings -> Apps tab.
2. Turn BitPay Production On
3. Logout as Admin and login with a Customer account. Keep this tab open.
4. Open a new tab and visit [bitpay.com](https://bitpay.com/).
5. Login to your Production BitPay Merchant account.
6. Switch to your website tab, go to an Event Page, and checkout with BitPay.
7. This checkout creates a BitPay Production credentials file on your server, connecting your website to your BitPay Merchant account.
8. Enter your website/brand name in Client ID and click Approve.
9. Close the BitPay tab. Production setup is complete.

<a name="Pay-with-Cryptocurrencies"></a>

## How Attendees Pay with Cryptocurrencies

Once setup is complete, attendees can pay with cryptocurrency as follows:

1. Go to the checkout popup and select the BitPay payment option.
2. On the next page, login to the customer BitPay account and proceed.
3. Select a cryptocurrency (e.g. Bitcoin, Ethereum, etc.) to pay with.

    ***

    ![5-bitpay-select-currency](/images/fullyloaded/5-bitpay-select-currency.webp "5-bitpay-select-currency")

    ***

4. A QR code will be displayed for sending the cryptocurrency payment.

    ***

    ![6-bitpay-make-payment](/images/fullyloaded/6-bitpay-make-payment.webp "6-bitpay-make-payment")

    ***

5. After successful payment, attendees are redirected to your website with a successful booking confirmation.
