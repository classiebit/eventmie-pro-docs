<!--
Meta Description: Accept Bitcoin, Ethereum, and cryptocurrency payments with BitPay in Eventmie Pro FullyLoaded. Expand your event reach globally, support crypto payments, and attract tech-savvy attendees worldwide.
Meta Keywords: BitPay crypto payments, cryptocurrency ticketing, Eventmie Pro FullyLoaded, Bitcoin payments, Ethereum payments, global event payments, crypto ticketing, event management, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# BitPay Cryptocurrency Payments for Eventmie Pro FullyLoaded

## Why It Matters
Eventmie Pro FullyLoaded integrates with BitPay—accept cryptocurrency payments worldwide, support Bitcoin, Ethereum, and major digital currencies, and expand your reach to tech-savvy global audiences.

**Global Payment Gateway:**
- Accept payments from anywhere in the world
- Support for Bitcoin, Ethereum, and major cryptocurrencies
- No currency conversion fees or international payment delays

**Seamless Crypto Checkout:**
- Fast, secure, and mobile-friendly payment flows
- Reduce barriers for crypto-using attendees
- QR code payments for easy mobile transactions

**Reporting & Settlement:**
- Track crypto payments and settlements in real time
- Export data for accounting and compliance
- Automatic conversion to your preferred currency

Enable BitPay to accept Bitcoin, Ethereum, and all major cryptocurrencies in your Eventmie Pro FullyLoaded event management platform. BitPay allows you to receive secure crypto payments from attendees worldwide, including payments via the BitPay wallet.

---

![6-bitpay-make-payment](/images/fullyloaded/6-bitpay-make-payment.webp "6-bitpay-make-payment")

---

<br>

To turn on BitPay, follow the setup steps below. After setup, attendees can pay using a wide range of cryptocurrencies supported by BitPay.

-   [What You Need](#Requirements)
-   [Setup Test BitPay](#Setup-Test-BitPay)
-   [Setup Live BitPay](#Setup-Production-BitPay)
-   [How Guests Pay with Crypto](#Pay-with-Cryptocurrencies)

<a name="Requirements"></a>

## What You Need for BitPay Crypto Payments

1. Create a Test BitPay Merchant account at [test.bitpay.com](https://test.bitpay.com/)
2. Create a Live BitPay Merchant account at [bitpay.com](https://bitpay.com/)

<a name="Setup-Test-BitPay"></a>

## How to Setup Test BitPay (Practice Mode)

You can only set up BitPay on a live website (not on localhost). Please upload your website to your live domain before starting.

Now, let's set up Test BitPay for practice payments. The live BitPay setup is the same as test. Make sure you create a BitPay merchant account for both environments.

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

## How to Setup Live BitPay (Real Crypto Payments)

Set up Live BitPay to accept real cryptocurrency payments into your BitPay account.

1. Login to your website as Admin and go to Admin Panel -> Settings -> Apps tab.
2. Turn BitPay Production On
3. Logout as Admin and login with a Customer account. Keep this tab open.
4. Open a new tab and visit [bitpay.com](https://bitpay.com/).
5. Login to your Live BitPay Merchant account.
6. Switch to your website tab, go to an Event Page, and checkout with BitPay.
7. This checkout creates a BitPay Live credentials file on your server, connecting your website to your BitPay Merchant account.
8. Enter your website/brand name in Client ID and click Approve.
9. Close the BitPay tab. Live setup is complete.

<a name="Pay-with-Cryptocurrencies"></a>

## How Guests Pay with Cryptocurrencies

Once setup is complete, guests can pay with cryptocurrency as follows:

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

5. After successful payment, guests are redirected to your website with a successful booking confirmation. 