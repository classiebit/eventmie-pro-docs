# Bookings

---

![new-checkout-ui-design](http://eventmie-pro-docs.test/images/new-checkout-ui-design.jpg "new-checkout-ui-design")

---


- [Booking Cancellation](#Booking-Cancellation)
- [Cancellation Status](#Cancellation-Status)


<a name="Make-Booking"></a>
## Make Booking

---

![Admin & Organizer checkout](http://eventmie-pro-docs.test/images/new-checkout-ui-design-admin-organizer.jpg "Admin & Organizer checkout")

---



### For Customer

---

![Customer checkout](http://eventmie-pro-docs.test/images/new-checkout-ui-design-customer.jpg "Customer checkout")

---


<a name="Booking-Cancellation"></a>
## Booking Cancellation

The customer can request for booking cancellation, and then the organizer or admin can proceed further with that cancellation request.

---

![Customer booking cancellation](http://eventmie-pro-docs.test/images/customer-manage-bookings.jpg "Customer booking cancellation")

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

>{primary} On updating `Cancellation Status` to `Approved` or `Refunded`, you must change the Booking Status to `Disabled`.

---


