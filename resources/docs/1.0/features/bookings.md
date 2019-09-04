# Bookings

To book an event is super simple and smooth. We've made a two clicks checkout system. In just two clicks you can book an event.

<br>
Admin, organiser and customer, all of them can book an event from the front-end in similar ways.

<br>
1. **Admin** - Make booking for a customer using `Direct Payment` (without making any online payment).

2. **Organiser** - Make booking for a customer using `Online Payment`.

3. **Customer** - Make booking for their own using `Online Payment`.



- [Make booking](#Make-Booking)
- [Cancel booking](#Cancel-Booking)
- [Cancellation Statuses](#Cancellation-Statuses)

---


<a name="Make-Booking"></a>
## How To Make Booking For An Event


### For Admin & Organiser

1. Click on &nbsp;<larecipe-button type="secondary" size="sm" rounded>Browse Events</larecipe-button>
2. Click on an event you want to book.
3. Then on the event page, scroll down to `Get your tickets now` section. 
4. Click on &nbsp;<larecipe-button type="success" size="sm" rounded>Get Tickets</larecipe-button>
5. If it's a repetitive event, then click on an `Event Schedule Date`.
6. Then on the Checkout Popup, `Select a customer`.
7. Select each ticket quantity. You can select single or multiple tickets.
8. At the bottom of the popup, you'll see the order total.
9. Finally click on &nbsp;<larecipe-button type="secondary" size="sm" rounded>Checkout</larecipe-button>
10. If you're Admin, you'll be redirected to `Admin panel -> Bookings` page.
11. If you're Organiser, you'll first need to make an online payment, and then you'll be redirected to `Organiser Manage Bookings` page.


### For Customer

1. Click on &nbsp;<larecipe-button type="secondary" size="sm" rounded>Browse Events</larecipe-button>
2. Click on an event you want to book.
3. Then on the event page, scroll down to `Get your tickets now` section. 
4. Click on &nbsp;<larecipe-button type="success" size="sm" rounded>Get Tickets</larecipe-button>
5. If it's a repetitive event, then click on an `Event Schedule Date`.
6. Select each ticket quantity. You can select single or multiple tickets.
8. At the bottom of the popup, you'll see the order total.
9. Finally click on &nbsp;<larecipe-button type="secondary" size="sm" rounded>Checkout</larecipe-button>
10. You'll be redirected to payment gateway for making online payment.
11. After successful payment, you'll redirected back to `Customer Manage Bookings` page.



> {info} If the tickets are free, then you don't have to go through Payment gateway to finish checkout.

---

> {primary} We're gonna add `Pay at venue` option for cashless checkout in the next upcoming version.

---



<a name="Cancel-Booking"></a>
## How To Cancel Booking

Booking cancellation is also a simple. First customer request for a booking cancellation, and then organiser or admin can proceed further with that cancellation request.

<br>
1. **Admin** - Can manage and update cancellation request status from the `Admin panel -> Bookings` page.

2. **Organiser** - Can manage and update cancellation request status from the `Front-end -> Manage Bookings` page.

3. **Customer** - Can request for booking cancellation `Front-end -> My Bookings` page.


### For Customer

1. On the header, click on `My Bookings`.
2. You'll see all your bookings. Click on &nbsp;<larecipe-button type="danger" size="sm" rounded>Cancel</larecipe-button>
3. Once you request for cancellation, you can track your booking status (`Pending` | `Approved` | `Refunded`) here on the same page. 
4. The `status` will show you if your ticket is `Enabled - valid` or `Disabled - invalid`.  


### For Organiser

1. On the header, hover over your account name and click on `Manage Bookings`.
2. You'll see all your bookings. Click on &nbsp;<larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button>
3. A popup will open, in the popup, you can update the Cancellation status to `No Cancellation` | `Pending` | `Approved` | `Refunded`.
4. Once you approved the cancellation request and refund the booking amount to the customer, you can permanently `Disable` the booking.
5. If you want to see booking details like customer info, payment info, etc. Then you can click on &nbsp;<larecipe-button type="success" size="sm" rounded>View</larecipe-button>


### For Admin

1. Go to admin panel, and then go to `Manage Bookings -> Bookings`.
2. You'll see all the bookings. Click on &nbsp;<larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button>
3. Then on the next page, you can update the Cancellation status to `No Cancellation` | `Pending` | `Approved` | `Refunded`.
4. Once the cancellation approved and amount refunded to the customer, you can permanently `Disable` the booking.
5. If you want to see booking details like customer info, payment info, etc. Then you can click on &nbsp;<larecipe-button type="success" size="sm" rounded>View</larecipe-button>


<a name="Cancellation-Statuses"></a>
## Cancellation Statuses Explained

All the cancellation statuses are only for tracking purpose. They have to functionality behind. The only thing that have functionality behind is the `Status` - `Enabled - booking is valid` or `Disabled - booking is invalid`.

<br>
- **No Cancellation** - means the booking status is normal and customer ticket is valid.
- **Pending** - means the customer has applied for the cancellation, but still the customer ticket is valid.
- **Approved** - means the cancellation request is approved and refund under process and the customer ticket has become in-valid.
- **Refunded** - means the cancellation request is approved and ticket amount is refunded to the customer and the ticket has become in-valid.


>{info} Once after you make Cancellation Status to `Approved` or `Refunded`, you should turn the Booking Status to `Disabled`.


