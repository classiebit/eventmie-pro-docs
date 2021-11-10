# Stripe Direct Payment

With this, when a customer makes the payment to purchase ticket, the organizer receives their part (Organizer Earning) directly into their Stripe Account and Admin receives their part (Admin Commission + Admin Tax) directly into their Stripe Account.

<br>

We've integrate this **[Stripe Direct Payment Gateway](https://stripe.com/docs/connect/enable-payment-acceptance-guide?platform=web)**

<br>

The Admin **Stripe Public Key** and **Stripe Secret Key** are same if you've already enabled **Stripe 3d Checkout**.

<br>

If you haven't enabled **Stripe 3D Checkout**, you (Admin) first need to create a Stripe Merchant Account from **[Stripe](https://stripe.com)**. After setting up your account, you need to copy the `Stripe Public Key` and `Stripe Secret Key`.

<br>

The Organizer needs to Signup for a Stripe account and connect their Stripe on the website to start receiving their Payout directly into their Stripe account.


- [Admin Setup](#admin-setup)
- [Organizer Setup](#organizer-setup)
- [Admin Payout](#admin-payout)
- [Organizer Payout](#organizer-payout)


<a name="admin-setup"></a>
## Admin Setup

Admin needs to follow the below steps to enable it-

<br>

1. Go to Admin Panel -> Settings -> Apps
2. Enter `Stripe Public Key` & `Stripe Secret Key` 
3. Turn on `Stripe Direct` and hit **Save Settings**

---

![stripe-direct-setup](http://eventmie-pro-docs.test/images/fullyloaded/stripe-direct-setup.png "stripe-direct-setup")

---

<br>

You can enter Stripe **Test** keys to Test payment using Stripe Test Card, and Stripe **Live** keys to make real payments.

<a name="organizer-setup"></a>
## Organizer Setup

Admin needs to follow the below steps to start receiving payout directly into their Stripe account-

1. Login as Organizer and go to `Profile`
2. Click on **Connect with Stripe**
3. It'll take you to Stripe website, and from their follow through the steps and you'll be good to go.
4. Once you connect it successfully, you'll see **Stripe Connected** button, which means, Done.

---

![stripe-direct-organizer-connect](http://eventmie-pro-docs.test/images/fullyloaded/stripe-direct-organizer-connect.png "stripe-direct-organizer-connect")

---

![stripe-direct-organizer-connected](http://eventmie-pro-docs.test/images/fullyloaded/stripe-direct-organizer-connected.png "stripe-direct-organizer-connected")

---

![stripe-payment](http://eventmie-pro-docs.test/images/fullyloaded/stripe-payment.png "stripe-payment")

---

If the Admin has entered Stripe **Test** keys then Organizer can Connect a **Test Stripe account**, and Stripe **Live** keys then Organizer can Connect a **Real Stripe account**.


<a name="admin-payout"></a>
## Admin Payout

With Stripe Direct, Organizer and Admin, both can receive direct payment into their Bank accounts via Stripe. And the payout and admin commission processing will become fully-automated.

<br>

Admin will see the `Transferred` status as `Checked` in the Admin Commission.


---

![admin-commission-payout](http://eventmie-pro-docs.test/images/fullyloaded/admin-commission-payout.png "admin-commission-payout")

---



<a name="organizer-payout"></a>
## Organizer Payout

If in case, the Admin has enabled `Stripe Direct` and the Organizer doesn't connected his/her Stripe account, then the all payment will go to Admin Stripe account, and the Admin will need 
to transfer Organizer payment manually via any external medium.

<br>

Organizer will see the `Transferred` status as `Paid` in the `Manage Earnings`.

---

![organizer-earning-payout](http://eventmie-pro-docs.test/images/fullyloaded/organizer-earning-payout.png "organizer-earning-payout")

---

>{primary} To Disable Stripe Direct, simply remove the turn off `Stripe Direct` checkbox.

---