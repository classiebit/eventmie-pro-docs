# Cancellation & Refund

Customers, Organizers & Admin, all of them can manage cancellations from their respective `Bookings` pages. Customers can request for booking cancellation and then organizers or admin can proceed further with that cancellation request.

<br>

Admin or Organizer can decide whether to provide a refund to the customers and after that, they can update the cancellation status so that the customer can track the cancellation status from their `Bookings` page.

---

> {primary} Customer can submit cancellation request only before `Pre Cancellation Time` defined in `Admin Panel -> Settings -> Bookings` tab.

---

![manage-bookings-cancellation](/images/v2/EventmieProFullyLoadedV2.0/manage-bookings-cancellation.webp "manage-bookings-cancellation")

---

-   [Customer's: Cancellations](#customer-cancellations)
-   [Organizer's: Cancellations](#organizer-cancellations)
-   [Cancellation Status](#cancellation-status)

<a name="customer-Cancellations"></a>

## Customer's: Cancellations

To submit a cancellation request, customer from their `Bookings` page-

1. Click on &nbsp;<larecipe-button type="danger" size="sm" rounded>Cancel</larecipe-button> on a booking row.
2. Booking status will keep updating (`Pending` | `Approved` | `Refunded`) when the Organizer or Admin updates cancellation status.
3. Once the cancellation request submitted and cancellation status updated, it can never be re-submitted again.
4. Also, after `Check-In - Yes`, customer can't submit a cancellation request.
5. The `status` shows if the booking is `Enabled - Valid` or `Disabled - In-valid`.
6. After refunding booking amount, the booking `status` becomes `Disabled` and the customer won't be able to
    - Download Ticket
    - Access Online Event Secret Details
    - Check-in through ticket scanner

---

> {primary} On new cancellation request and cancellation status update, all related users notified via email.

---

<a name="organizer-cancellations"></a>

## Organizer's: Cancellations

From the `Bookings` page, the Organizer can manage and update cancellation requests-

1. Click on &nbsp;<larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button> on a booking row.
2. In the popup, the organizer can update-

    - Cancellation status to `No Cancellation` | `Pending` | `Approved` | `Refunded`
    - Booking status to `Enabled` | `Disabled`
    - Booking Is-Paid to `Yes` | `No`

3. After refunding the booking amount, update the booking `Status` to `Disabled`.
4. And then the Booking will become `In-valid` everywhere.

---

> {success} `Admin` can do the same things as the Organizer, from the `Admin Panel -> Bookings`.

---

<a name="cancellation-status"></a>

## Cancellation Status (explanation)

Cancellation Status is only for tracking purposes only, it doesn't have any functionality behind. While the `Booking Status` plays an important role and has functionality behind, that makes a booking `Enabled - Valid` or `Disabled - In Valid`.

<br>

Cancellation Status only gives info about the refund progress, like you can let your customers track the cancellation & refund progress in realtime.

<br>

After making a refund and updating cancellation status, you must change the `Booking Status` to `Disabled`, to disable a booking, or make it invalid. So that the customer cannot enter or access the event.

-   **No Cancellation** - the booking status is active and the ticket is valid.
-   **Pending** - the customer has applied for the cancellation, but still, the customer ticket is valid.
-   **Approved** - the cancellation request is approved and refund under process and the customer ticket has become invalid.
-   **Refunded** - the cancellation request is approved and the ticket amount is refunded to the customer and the ticket has become invalid.

---

> {primary} On updating `Cancellation Status` to `Approved` or `Refunded`, you must change the Booking Status to `Disabled` to discontinue booking.

---
