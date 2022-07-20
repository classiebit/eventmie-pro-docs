
>{success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# Bitpay Crypto Payment Gateway

Crypto Currency Payment gateway to accept all available Cryptocurrencies in the world using BitPay. You can also pay using BitPay wallet.

---

![6-bitpay-make-payment](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/6-bitpay-make-payment.png "6-bitpay-make-payment")

---

<br>

To activate it you need to follow through the below setup process. After that, attendees can pay from various Cryptocurrencies that are available in Bitpay, such as, 


- [Requirements](#Requirements)
- [Setup Test BitPay](#Setup-Test-BitPay)
- [Setup Production BitPay](#Setup-Production-BitPay)
- [Pay with Cryptocurrencies](#Pay-with-Cryptocurrencies)


<a name="Requirements"></a>
## Requirements

1. Setup a Test BitPay Merchant account at [test.bitpay.com](https://test.bitpay.com/)
2. Setup a Production BitPay Merchant account at [bitpay.com](https://bitpay.com/)


<a name="Setup-Test-BitPay"></a>
## Setup Test BitPay

You can only setup BitPay online and not on localhost. Hence, please follow the below steps after uploading your website on your live domain.

<br>

Now, let's setup Test BitPay for test payment. The production BitPay setup is same as test. Hence, make sure you create a BitPay merchant account at both-


1. Login into your website as Admin and visit Admin Panel -> Settings -> Apps tab.
2. Enter 
    - BitPay Key Name: Enter a new random value e.g AbcXyzzMedia 
    - BitPay Encrypt Code: Enter a new random secret code e.g KJHakj879&*kjkjh
    - Keep BitPay Production Off

    ---

    ![1-bitpay-admin-panel](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/1-bitpay-admin-panel.png "1-bitpay-admin-panel")

    ---

    >{primary} The BitPay Key Name and Encrypt code are not obtained by BitPay, you can enter any random secret code. And don't change them once you entered.

    ---

3. Now, logout as Admin and Login with a Customer account into your website and keep the tab opened.

    ---

    ![2-bitpay-website-two-tabs](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/2-bitpay-website-two-tabs.png "2-bitpay-website-two-tabs")

    ---

4. Then open a new tab and visit [test.bitpay.com](https://test.bitpay.com/).
5. Login into your Test BitPay Merchant account.
6. Switch to your website tab and go to an Event Page and Checkout with BitPay.

    ---

    ![3-bitpay-checkout](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/3-bitpay-checkout.png "3-bitpay-checkout")

    ---

7. This checkout is just to create a BitPay Test credentials file on your server, and that file will create a connection between your website and your BitPay Merchant account.
8. Enter your website/brand name in Client ID and click Approve.

    ---

    ![4-bitpay-approve](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/4-bitpay-approve.png "4-bitpay-approve")

    ---

9. Close the Bitpay tab that you're in and setup complete.


<a name="Setup-Production-BitPay"></a>
## Setup Production BitPay

Setup Production BitPay to accept real Cryptocurrencies into your BitPay account.


1. Login into your website as Admin and visit Admin Panel -> Settings -> Apps tab.
2. Turn BitPay Production On
3. Now, logout as Admin and Login with a Customer account into your website and keep the tab opened.
4. Then open a new tab and visit [bitpay.com](https://bitpay.com/).
5. Login into your Production BitPay Merchant account.
6. Switch to your website tab and go to an Event Page and Checkout with BitPay.
7. This checkout is just to create a BitPay Production credentials file on your server, and that file will create a connection between your website and your BitPay Merchant account.
8. Enter your website/brand name in Client ID and click Approve.
9. Close the Bitpay tab that you're in and setup complete.




<a name="Pay-with-Cryptocurrencies"></a>
## Pay with Cryptocurrencies

Once the above setup is done, the attendees can pay with Cryptocurrency-

1. Go to Checkout popup and selct BitPay payment option.
2. On the next page, login into customer Bitpay account and proceed.
3. Select a Cryptocurrency to pay with.

    ---

    ![5-bitpay-select-currency](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/5-bitpay-select-currency.png "5-bitpay-select-currency")

    ---

4. And finally, you'll see a QrCode at which, you can send Cryptocurrency.

    ---

    ![6-bitpay-make-payment](https://eventmie-pro-docs.classiebit.com//images/fullyloaded/6-bitpay-make-payment.png "6-bitpay-make-payment")

    ---

5. And after successful payment, you'll be redirected to webstie with successful booking.