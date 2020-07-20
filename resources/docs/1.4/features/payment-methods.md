# Payment Methods

Eventmie Pro comes with an integrated **PayPal** express checkout system. And now in v1.3, we've added **Offline Payment** method for all types of users i.e Admin, organizers, customers.

---

>{success} In case of Free tickets, users can book tickets directly without going through the payment gateway.

---


1. **Admin** - Can only use the Offline Payment method to make bookings for customers.

2. **Organizer** - Can use PayPal & Offline Payment method to make bookings for customers.

3. **Customer** - Can use PayPal & Offline Payment method to make bookings for themselves.

---

>{primary} We've excluded PayPal for Admin, because, it does not make any sense for Admin to make a payment from their own PayPal account. 💪

---


- [PayPal](#PayPal)
- [Offline Payment <small>*(v1.3)*</small>](#Offline-Payment)


---


<a name="PayPal"></a>
## PayPal

To get started with PayPal, simply-

1. Go to Admin Panel -> Settings -> Apps Tab.
2. Add your PayPal account `Client Id` & `Secret`.
3. Add the **Callback URL** to your PayPal account- `<yourwebsite.com>/bookings/paypal/callback`.
4. Then, first, keep the `PayPal Production Mode` disabled, and make a test booking.
5. If test booking successful, enable the production mode to start receiving real payments.



<a name="Offline-Payment"></a>
## Offline Payment <small>*(v1.3)*</small>

By default, the offline payment method is disabled. You need to enable it first. To get started with Offline Payment, simply-


1. Go to Admin Panel -> Settings -> Bookings Tab.
2. Turn on `Allow Offline Payment For Organizer` & `Allow Offline Payment For Customer`.
3. You can turn on/off offline payment for Organizers & Customers separately, depending on your requirements.


---

>{primary} Admin can always make a booking via the Offline Payment method.

---