# Bookings

To make a booking for an event is super simple. It's just a matter of two clicks. We've made a secure & simple checkout system. Hmmm.. ☝️ ✌️

<br>

**Admin**, **Organizer** & **Customer**, all can book an event from the front-end in similar ways.

<br>

1. **Admin** - Make a booking for a customer.

2. **Organizer** - Make booking only of their own events for a customer.

3. **Customer** - Make a booking for their own.



- [Make Booking](#Make-Booking)
- [Booking Cancellation](#Booking-Cancellation)
- [Cancellation Status](#Cancellation-Status)
- [Booking Process (v1.3)](#Booking-Process-behind-the-scenes)

---


<a name="Make-Booking"></a>
## Make Booking


### For Admin & Organizer

1. On the Event page, scroll down to `Get your tickets now` section. 
2. Click on &nbsp;<larecipe-button type="success" size="sm" rounded>Get Tickets</larecipe-button>
    <br>
    In case of repetitive event, click on an `Event Schedule`.
    <br>

3. `Select Customer` & `Ticket Quantity` and click &nbsp;<larecipe-button type="secondary" size="sm" rounded>Checkout</larecipe-button>

---

![Admin & Organizer checkout](https://eventmie-pro-docs.classiebit.com/images/8-booking-admin.jpg "Admin & Organizer checkout")

---



### For Customer

1. On the Event page, scroll down to `Get your tickets now` section. 
2. Click on &nbsp;<larecipe-button type="success" size="sm" rounded>Get Tickets</larecipe-button>
    In case of repetitive event, then click on any `Event Schedule`.
3. Choose `Ticket Quantity` and click &nbsp;<larecipe-button type="secondary" size="sm" rounded>Checkout</larecipe-button>

---

![Customer checkout](https://eventmie-pro-docs.classiebit.com/images/9-booking-customer.jpg "Customer checkout")

---

> {info} Free Tickets can be booked directly without going through Payment Gateway.

---

> {primary} We'll add `Pay at venue` option for cashless checkout in the next version.

---



<a name="Booking-Cancellation"></a>
## Booking Cancellation

The customer can request for booking cancellation, and then the organizer or admin can proceed further with that cancellation request.

---

![Customer booking cancellation](https://eventmie-pro-docs.classiebit.com/images/10-booking-cancellation.jpg "Customer booking cancellation")

---

<br>

1. **Admin** - Can manage and update cancellation request status from the `Admin panel -> Bookings` page.

2. **Organizer** - Can manage and update cancellation request status from the `Front-end -> Manage Bookings` page.

3. **Customer** - Can request for booking cancellation `Front-end -> My Bookings` page.


### For Customer

1. On the header, click on `My Bookings`.
2. Click on &nbsp;<larecipe-button type="danger" size="sm" rounded>Cancel</larecipe-button>
3. Once after requesting booking cancellation, booking status will keep updating (`Pending` | `Approved` | `Refunded`) and customers can track the booking status here on the same page. 
4. The `status` shows a particular booking is `Enabled - Valid` or `Disabled - In-valid`.  


### For Organizer

1. On the header, hover over the account name and click on `Manage Bookings`.
2. Click on &nbsp;<larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button>
3. In the popup, the organizer can update the Cancellation status to `No Cancellation` | `Pending` | `Approved` | `Refunded`.
4. After refunding the booking amount, booking can permanently be disabled by changing the `Status` to `Disable`.


### For Admin

1. Go to admin panel, and click on `Manage Bookings -> Bookings`.
2. Click on &nbsp;<larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button>
3. Admin can update the Cancellation status to `No Cancellation` | `Pending` | `Approved` | `Refunded`.
4. After refunding the booking amount, booking can permanently disabled by changing the `Status` to `Disable`.


<a name="Cancellation-Statuses"></a>
## Cancellation Status Explained

The `cancellation status` are only for tracking purpose. They have no major functionality. The main thing is **Booking Status**. Change `Status` - `Enabled - Valid Booking` or `Disabled - In-valid Booking`.

<br>

- **No Cancellation** - the booking status is normal and the customer ticket is valid.
- **Pending** - the customer has applied for the cancellation, but still, the customer ticket is valid.
- **Approved** - the cancellation request is approved and refund under process and the customer ticket has become invalid.
- **Refunded** - the cancellation request is approved and the ticket amount is refunded to the customer and the ticket has become invalid.

---

>{info} On updating `Cancellation Status` to `Approved` or `Refunded`, you must change the Booking Status to `Disabled`.

---


<a name="Booking-Process-behind-the-scenes"></a>
## Booking Process (behind the scenes) (v1.3)

**v1.3** introduced a new faster & smoother checkout process. The new checkout process is separated into a few micro-services. 
Before, on clicking the Checkout button, these are all the tasks happening concurrently behind the scenes-

<br>
- Payment Processing
- Ticket PDF generation
- Ticket email sending

<br>
These were the tasks that increase the checkout processing time. So we redesigned the whole process. And separated all these tasks into the pre & post-booking process.


### New Booking Process

On clicking the Checkout button

<br>
* Initiate a loader popup to show checkout progress (start pre-booking process).
* Validate the booking
* Process payment
* On successful payment, finish the booking process. (finish pre-booking process).
* On the bookings page, initiate a loader popup (start post-booking process)
* Start generating Ticket PDF
* Send Ticket emails
* Finally, show finish booking notification and close the loader popup. (finish post-booking process).

### New Checkout Process Benefits

* Independent pre-booking & post-booking process.
* Faster checkout, lesser waiting time.
* More reliable, e.g if email sending fails, it won't affect other belonging tasks.
* More clarity for each task, a user can track each process and can contact support about the exact issue.