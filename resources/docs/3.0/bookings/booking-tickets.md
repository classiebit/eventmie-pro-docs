# Booking Event's Tickets

Eventmie Pro offers a simple, secure, and lightning-fast event ticket booking and checkout process. 💪

In v2.0, we've introduced a time-bound checkout system. A 5-minute checkout timer ensures that selected tickets or seats are reserved for the attendee, allowing them to complete their booking before tickets go out of stock during high-demand sales.

<br>

1. **Customer** can book tickets for any event for themselves.
2. **Admin** can book tickets for any event on behalf of a **Customer**.
3. **Organizer** can book tickets for **THEIR OWN** events only, on behalf of a **Customer**.

---

![new-checkout-ui-design](/images/v3/Ticket-booking-image-11.webp "new-checkout-ui-design")

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

Customers can book event tickets in just a few clicks.

1. Go to the Event page and scroll to the `Get your tickets now` section.
2. Click on the event date.
3. On the `Checkout` popup, select ticket `Quantity`.
4. Choose a payment option and click `Checkout`.

<a name="organizer-booking-tickets"></a>
## Organizer: Booking Tickets

Organizers can book tickets for customers, but only for **THEIR OWN** events.

* The organizer must know the registered email of the **Customer** to make a booking.
* The customer must be registered on the website.

---

>{primary} `Customers` are `Private` for Organizers. Organizers cannot view all customers; they must enter the customer's full email address to book tickets for them.

---

To book a ticket for a customer as an Organizer:

1. Go to the Event page and scroll to the `Get your tickets now` section.
2. Click on the event date.
3. On the `Checkout` popup, enter the customer email in the `Select Customer` auto-complete dropdown.
4. Select the ticket `Quantity`.
4. Choose a payment option and click `Checkout`.

<a name="admin-booking-tickets"></a>
## Admin: Booking Tickets

Admins can book tickets for customers for **ALL** events. Admins also need to enter the `Customer Email`.

---

>{success} Admins can find customer emails from the `Admin Panel -> Users` page.

---

To book a ticket for a customer as an Admin:

1. Go to the Event page and scroll to the `Get your tickets now` section.
2. Click on the event date.
3. On the `Checkout` popup, enter the customer email in the `Select Customer` auto-complete dropdown.
4. Select the ticket `Quantity`.
4. Choose a payment option and click `Checkout`.

---

>{primary} Admins can only choose either the `Free` or `Offline` payment option. (Why pay yourself?)

---

<a name="payment-option-free"></a>
## Payment Option: Free

There are three types of payment options:

The first is Free (checkout-free). For free tickets, bookings can be made instantly without any payment gateway.

<a name="payment-option-offline"></a>
## Payment Option: Offline

Offline (Cash on Arrival) allows you to make a paid booking without online payment, such as booking premium/paid tickets without using a payment gateway.

* Organizers & Admins can book tickets for customers directly, without online payment.
* Payment can be collected via external sources or in cash.

---

>{success} Admins can disable the `Offline Payment Option` for `Customers` and `Organizers` from the `Admin Panel -> Settings -> Bookings` tab.

---

![bookings-offline-mode-on-off](/images/bookings-offline-mode-on-off.webp "bookings-offline-mode-on-off")

---

>{primary} You can customize any of these English words from the language file.

---

<a name="payment-option-online"></a>
## Payment Option: Online

Online Payment is available via integrated payment gateways. Eventmie Pro comes with built-in `PayPal` express checkout for secure online transactions.

---

>{success} Need another online payment gateway? We can integrate it for you. Email us at `info@classiebit.com`.

---

<a name="paid-unpaid-booking"></a>
## Paid or UnPaid Booking

A new and important `Booking Status` called `Is Paid` (`Yes` or `No`) shows whether the booking amount has been paid by the customer.

<br>

Depending on the payment option, the `Is Paid` status is set as follows:

1. **Free Checkout** – `Is Paid` status is always `Yes`.
2. **Online Payment** – `Is Paid` status is always `Yes`.
3. **Offline Payment** – `Is Paid` status is always `No`.

<br>

After receiving payment for an `Offline Payment`, Admin or Organizer can update the `Is Paid` status to `Yes`.

---

>{primary} If `Is Paid` is `No`, the customer will NOT be able to `Download Tickets` or `Access Online Event Secret Details`.

---

<a name="booking-process"></a>
## Booking Process (under the hood)

Eventmie Pro's booking and checkout process is designed for speed and reliability. Here's what happens behind the scenes:

The booking process is divided into two parts (micro-services):

### Pre-booking process

1. Initiate a progress loader to show checkout progress.
2. Validate the booking; if validation fails, stop the process and display an error.
3. If successful, process the payment.
4. On successful payment, complete the booking process (end pre-booking process).
5. Show a successful payment & booking notification and redirect to the `My Bookings Page`.

---

>{primary} There are separate `My Bookings` pages for Customers, Organizers, and Admins, showing all bookings. See the `Manage Bookings` section for more details.

---

### Post-booking process

1. On the bookings page, initiate a progress loader to show post-booking progress.
2. Generate Ticket PDF.
3. Send ticket emails & notifications to `Customer`, `Organizer`, and `Admin`.
4. Complete the post-booking process and show a notification alert.

### Benefits of the Booking Process

- Independent pre-booking & post-booking processes
- Faster checkout and reduced waiting time
- More reliable—if email sending fails, it won't affect other tasks
- Clear process tracking so users can contact support with specific issues

---

><iframe width="75%" height="500" src="https://www.youtube.com/embed/LahJYztSmnw?si=ZtvDmFsRWYwGhwni" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

---