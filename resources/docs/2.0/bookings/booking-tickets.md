# Booking Event's Tickets

Eventmie Pro has a super simple, secure & fast checkout process. 💪

In v2.0 we've added time-bound checkout. A checkout timer of 5 minutes will run during the checkout, in that period, system will block selected tickets or seat for the attendee so that they book tickets easily before ticket being go out-of-stock in case of high sales.

<br>


1. **Customer** can make bookings of any events, for themselves.
2. **Admin** can make bookings of any events, for **Customer**.
3. **Organizer** can make a booking of **THEIR OWN** events only, for **Customer**.

---

![new-checkout-ui-design](/images/v2/EventmieProImages/bookings-checkout.webp "new-checkout-ui-design")

---


- [Customer: Booking Tickets](#customer-booking-tickets)
- [Organizer: Booking Tickets](#organizer-booking-tickets)
- [Admin: Booking Tickets](#admin-booking-tickets)
- [Payment Option: Free](#payment-option-free)
- [Payment Option: Offline](#payment-option-offline)
- [Payment Option: Online](#payment-option-online)
- [Paid or UnPaid Booking](#paid-unpaid-booking)
- [Booking Process](#booking-process)


<a name="customer-booking-tickets"></a>
## Customer: Booking Tickets

Customers can book tickets within few clicks.

1. Go to the Event page and scroll down to `Get your tickets now` section.
2. Click on the event date.
3. On the `Checkout` popup, select ticket `Quantity`.
4. Then, select a payment option and click `Checkout`.


<a name="organizer-booking-tickets"></a>
## Organizer: Booking Tickets

An organizer can book tickets for customers, only of **THEIR OWN** events.

* Organizer must know the registered email of the **Customer**, to make bookings for them.
* Customer must be registered on the website.

---

>{primary} The `Customers` are  `Private` for Organizers. Organizers can't see all the customers, instead, they can only enter the customer's full email address to book tickets for them..

---

For an Organizer, to book a ticket for a customer-

1. Go to the Event page and scroll down to `Get your tickets now` section.
2. Click on the event date.
3. On the `Checkout` popup, enter customer email in the `Select Customer` auto-complete dropdown.
4. Select the ticket `Quantity`.
4. Then, select a payment option and click `Checkout`.



<a name="admin-booking-tickets"></a>
## Admin: Booking Tickets

Admin can book tickets for customers of **ALL** events. Admin also needs to enter the `Customer Email`.

---

>{success} Admin can find the customer email from `Admin Panel -> Users` page.

---

For Admin, to book a ticket for a customer-

1. Go to the Event page and scroll down to `Get your tickets now` section.
2. Click on the event date.
3. On the `Checkout` popup, enter customer email in the `Select Customer` auto-complete dropdown.
4. Select the ticket `Quantity`.
4. Then, select a payment option and click `Checkout`.

---

>{primary} Admin can only choose either `Free` or `Offline` payment option. (why would you pay yourself)

---



<a name="payment-option-free"></a>
## Payment Option: Free

There are 3 types of payment options-

First is- Free (checkout-free). In the case of free tickets, you can make bookings directly without going through any payment gateway.


<a name="payment-option-offline"></a>
## Payment Option: Offline

Offline (Cash on Arrival). This option means you can make a paid booking without making any payment, like, booking premium/paid tickets without going through a payment gateway.

* Organizers & Admin can make bookings for customers directly, without making any online payment.
* And then, they can collect the money via some external payment sources or in cash.
*

---

>{success} Admin can also disable `Offline Payment Option` for `Customers` and `Organizers` from the `Admin Panel -> Settings -> Bookings` tab.

---

![bookings-offline-mode-on-off](/images/bookings-offline-mode-on-off.webp "bookings-offline-mode-on-off")

---

>{primary} Please DO NOT get confused by the word (you can change any of these English words from the language file).

---


<a name="payment-option-online"></a>
## Payment Option: Online

Online Payment via payment gateways. Eventmie Pro comes with an integrated `PayPal` express checkout payment gateway.

---

>{success} If you want any other online payment gateway, we can integrate it for you. Simply send us an email on `info@classiebit.com`.

---


<a name="paid-unpaid-booking"></a>
## Paid or UnPaid Booking

Added a new & very important `Booking Status` called `Is Paid` - `Yes` or `No`. It shows, whether the booking amount has been paid by the customer or not.

<br>

As there are having different types of `Payment Options`, the `Is Paid` status varies accordingly-

1. **Free Checkout**- `Is Paid` status is always `Yes`.
2. **Online Payment**- `Is Paid` status is always `Yes`.
3. **Offline Payment**- `Is Paid` status is always `No`.

<br>

After receiving the payment in case of `Offline Payment`, Admin, or Organizer can update the `Is Paid` status to `Yes`.

---

>{primary} If `Is Paid` is `No`, then the customer WILL NOT be able `Download Tickets` or `Access Online Event Secret Details`.

---



<a name="booking-process"></a>
## Booking Process (under the hood)

Let's see, what exactly makes the booking & checkout process so faster & smoother. The below info is just to show you, what's going on under the hood.

The booking process is separated into two parts (micro-services). When you click on the Checkout button, below is a list of all processes that take place under the hood.

### Pre-booking process

1. Initiate a progress loader that shows checkout progress.
2. Validate the booking, if fails, stop the process and throw an error.
3. If successful, start processing payment.
4. On successful payment, finish the booking process. (finish pre-booking process).
5. Show successful payment & booking notification alert and redirect to `My Bookings Page`.

---

>{primary} There are separate `My Bookings` pages for Customers, Organizers & Admin, which shows all bookings. We'll discuss in the `Manage Bookings` section.

---

### Post-booking process

1. On the bookings page, initiate a progress loader that shows post-booking progress.
2. Generate Ticket PDF.
3. Send Ticket emails & notifications to `Customer`, `Organizer` & `Admin`.
4. Finally, finish the post-booking process and show notification alert.


### Benefits of the Booking Process

- Independent pre-booking & post-booking processes.
- Faster checkout, lesser waiting time.
- More reliable, e.g if email sending fails, it won't affect other related tasks.
- For more clarity for each task, a user can track each process and can contact support about the exact issue.


---

><iframe width="75%" height="500" src="https://www.youtube.com/embed/LahJYztSmnw?si=ZtvDmFsRWYwGhwni" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


---