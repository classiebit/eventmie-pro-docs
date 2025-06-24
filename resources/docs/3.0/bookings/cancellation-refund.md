# Cancellation & Refund

Eventmie Pro makes managing event ticket cancellations and refunds simple and transparent. Customers, Organizers, and Admins can handle cancellations directly from their respective `Bookings` pages. Customers can request booking cancellations, and Organizers or Admins can process and update the status of these requests for a seamless refund experience.

<br>

Admins or Organizers can decide whether to issue a refund to customers and update the cancellation status, allowing customers to track their request progress from their `Bookings` page.

---

> {primary} Customers can submit a cancellation request only before the `Pre Cancellation Time` defined in `Admin Panel -> Settings -> Bookings` tab.

---

![manage-bookings-cancellation](/images/v2/EventmieProFullyLoadedV2.0/manage-bookings-cancellation.webp "manage-bookings-cancellation")

---

-   [Customer's: Cancellations](#customer-cancellations)
-   [Organizer's: Cancellations](#organizer-cancellations)
-   [Cancellation Status](#cancellation-status)

<a name="customer-Cancellations"></a>

## Customer's: Cancellations

To submit a cancellation request, customers can go to their `Bookings` page and:

1. Click on &nbsp;<larecipe-button type="danger" size="sm" rounded>Cancel</larecipe-button> on the booking row.
2. The booking status will update (`Pending` | `Approved` | `Refunded`) as the Organizer or Admin processes the request.
3. Once submitted and updated, a cancellation request cannot be re-submitted.
4. After `Check-In - Yes`, customers cannot submit a cancellation request.
5. The `status` shows if the booking is `Enabled - Valid` or `Disabled - In-valid`.
6. After a refund, the booking `status` becomes `Disabled` and the customer will not be able to:
    - Download Ticket
    - Access Online Event Secret Details
    - Check-in through ticket scanner

---

> {primary} On new cancellation requests and status updates, all related users are notified via email.

---

<a name="organizer-cancellations"></a>

## Organizer's: Cancellations

From the `Bookings` page, Organizers can manage and update cancellation requests:

1. Click on &nbsp;<larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button> on the booking row.
2. In the popup, the Organizer can update:
    - Cancellation status to `No Cancellation` | `Pending` | `Approved` | `Refunded`
    - Booking status to `Enabled` | `Disabled`
    - Booking Is-Paid to `Yes` | `No`
3. After refunding the booking amount, update the booking `Status` to `Disabled`.
4. The booking will then become `In-valid` everywhere.

---

> {success} `Admin` can perform the same actions as the Organizer from the `Admin Panel -> Bookings`.

---

<a name="cancellation-status"></a>

## Cancellation Status (Explanation)

Cancellation Status is for tracking purposes only and does not affect booking functionality. The `Booking Status` determines whether a booking is `Enabled - Valid` or `Disabled - In Valid`.

<br>

Cancellation Status provides real-time updates on the refund process, allowing customers to track their cancellation and refund progress.

<br>

After processing a refund and updating the cancellation status, you must change the `Booking Status` to `Disabled` to invalidate the booking and prevent event access.

-   **No Cancellation** – Booking is active and the ticket is valid.
-   **Pending** – Cancellation requested, but the ticket is still valid.
-   **Approved** – Cancellation approved, refund in process, ticket is now invalid.
-   **Refunded** – Cancellation approved, refund issued, ticket is now invalid.

---

> {primary} When updating `Cancellation Status` to `Approved` or `Refunded`, always change the Booking Status to `Disabled` to discontinue the booking.

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/0iN5b0u0qp0?si=r7T-dEzpw9U7MJRj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

---