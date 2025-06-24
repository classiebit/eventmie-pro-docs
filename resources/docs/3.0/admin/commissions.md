# Commissions

Eventmie Pro is a flexible event hosting solution that supports both Multi-organization (multi-vendor) and single organization event websites. With Eventmie Pro, you can easily manage commissions, payouts, and even offer 0% Commission on Ticket Sales for your organizers.

<br>

In multi-vendor mode, you as the website owner can invite event organizers to sign up and create events on your platform. This is where the commission system comes into play, allowing you to share profits to attract more organizers.

<br>

Eventmie Pro features a semi-automatic commission system. Set your `commission percentage (%)` from the Admin Panel, and commissions on each booking are calculated automatically.

<br>

Initially, all booking payments are credited to the website owner's (Admin) account. The Admin then manually distributes organizer payouts and can update the `Payout Transfer` status in the Admin Panel.

<br>

Eventmie Pro makes the payout transfer and commission management process seamless. Follow the guidelines below to master commission settings, including how to enable 0% Commission on Ticket Sales for your event platform.

-   [Set Commission](#set-commission)
-   [Commission Processing & Payouts](#commission-processing-payouts)
-   [Commission Calculations](#commission-calculations)
-   [Refunds Settlements](#refunds-settlements)
-   [Organiser Bank Details](#organiser-bank-details)
-   [Cancelled Booking](#cancelled-booking)
-   [Multi-Vendor On](#multi-vendor-on)
-   [Become Organiser](#become-organiser)
-   [Multi-Vendor Off](#multi-vendor-off)
-   [ZERO Commission](#zero-commission)

<a name="set-commission"></a>

## Set-Commission

---

![Set Commission from admin panel](/images/commissions-setting.webp "Set Commission from admin panel")

---

<br>

1. Go to `Admin Panel -> Settings -> Multi-vendor` tab.
2. Set the `Admin Commission` e.g. `5` (in percent)

---

> {primary} Commissions are recorded only if `Multi-vendor mode` is On & `Admin Commission` is set.

---

<a name="commission-processing-payouts"></a>

## Commission Processing & Payouts

After setting the `Admin Commission`, Eventmie Pro will automatically record commissions on each ticket sale, including when you offer 0% Commission on Ticket Sales.

1. Go to `Admin Panel -> Commissions`.
2. Click on &nbsp;<larecipe-button type="info" size="sm" rounded>View</larecipe-button>

    ***

    ![Admin & Organizer Booking Commission](/images/v3/How-to-check-commissions-image-3.webp "Admin & Organizer Booking Commission")

    ***

3. View each organizer's monthly `Total Bookings`, `Organizer earnings`, and `Admin Commission`.
4. After transferring an organizer's payout for a particular month, check the `Transferred` checkbox and click &nbsp;<larecipe-button type="info" size="sm" rounded>Update</larecipe-button> to update the transfer status.

    ***

    ![Commission processing](/images/v3/How-to-check-organiser-payouts-image-4.webp "Commission processing")

    ***

    > {success} This allows you to keep a record of all organizer payout transfers, even when operating with 0% Commission on Ticket Sales.

    ***

<a name="commission-calculations"></a>

## Commission Calculations

Here's how Admin Commission and Organizer earnings are calculated, including scenarios with 0% Commission on Ticket Sales.

<br>

| Payables              | Rates   | Calculations                | Total |
| :-------------------- | :------ | :-------------------------- | :---- |
| Ticket Price (TP)     | $100    | $100                        | $100  |
| Organizer Tax (OT)    | 5% + 5% | (5% of $100) + (5% of $100) | $10   |
| Admin Commission (AC) | 5%      | 5% of ($100 + $10)          | $5.5  |
| Admin Tax (AT)        | 3% + 3% | (3% of $100) + (3% of $100) | $6    |

---

> {primary} Admin Commission = 5% of (Ticket Price + Organizer Tax).

---

> {primary} Admin Tax is not included in Organizer earnings. It goes directly to the Admin account.

---

| Total Customer Paid         | Total Organizer Earning | Total Admin Commission |
| :-------------------------- | :---------------------- | :--------------------- |
| TP + OT + AC + AT           | (TP + OT) - AC          | AC + AT                |
| $100 + $10 + $6 + $5 = $121 | $110 - $5.5 = 104.5     | $5.5 + $6 = $11.5      |

---

1. For **Online Payment**, **Is Paid** is set to **Yes**. For Offline/Direct payment, Organizer or Admin must update **Is Paid** to **Yes**. Bookings appear in Commissions only after **Is Paid = Yes**.
2. If a booking is made after the Organizer Earning's **Transferred** status is set to **Yes**, the new booking for the same month appears as a new entry in Commission as **Un-Transferred** payout.
3. Once the **Un-Transferred** Organizer earning for the same month is set to **Transferred**, it merges into a single **Transferred** Payout for the month.
4. All commission records and calculations are shown with floating-point precision, including 0% Commission on Ticket Sales.

<a name="refunds-settlements"></a>

## Refunds Settlements

For booking cancellations and refunds after organizer payouts have been transferred, the refunded amount appears in **Refund Settlement** and must be claimed back from the organizer.

- Admin can mark a Refund Settlement status to **Yes** to indicate the refunded booking has been claimed back from the organizer payout.

---

![commissions-refunds](/images/v3/Organiser-payots-refunds-image-5.webp "commissions-refunds")

---

<a name="organiser-bank-details"></a>

## Organiser Bank Details

Organizers can add their bank account details from their profile page on the front-end for easy payout transfers.

---

![Organizer bank details](/images/v3/Organiser-bank-details-image-6.webp "Organizer bank details")

---

Admins can view Organizer Bank Details directly from the `Admin Panel -> Commissions` page to process payouts efficiently.

---

![Admin Panel bank details](/images/commissions-bank-details-button.webp "Admin Panel bank details")

---

<a name="cancelled-booking"></a>

## Cancelled Booking

When a booking is canceled, its commission is automatically excluded and will not be included in Organizer earnings.

---

> {primary} Always set the booking `status` to `Disabled` after processing a refund.

---

<a name="multi-vendor-on"></a>

## Multi Vendor On

Eventmie Pro supports both single organization and multi-organization (multi-vendor, SaaS-style) event platforms. Toggle between these modes from the `Admin Panel -> Settings -> Multi-vendor` tab.

<br>

With `multi-vendor` mode enabled, users can sign up as customers and then become organizers, benefiting from features like 0% Commission on Ticket Sales.

1. After signing up as a `customer`, go to `Profile`.
2. Click on &nbsp;<larecipe-button radius="half" type="black">Become Organizer</larecipe-button>
3. In the popup, enter your `Organization name/Brand name` and click &nbsp;<larecipe-button radius="half" type="info">Submit</larecipe-button>
4. After submission, the user's `Group` changes from `Customer` to `Organizer`.

<a name="become-organiser"></a>

## Become Organiser

There are specific rules for what an Organizer **CAN** and **CANNOT** do:

1. Organizer **CANNOT** revert to Customer. The process is irreversible.
2. Organizer **CAN** create and manage their own events, but **CANNOT** book their own events.
3. Organizer **CAN** book their own events for other customers (users) of the site.
4. Organizer **CAN** book events for a customer **ONLY IF** they know the customer's email.
5. Organizers **CAN** manage bookings for their own events only.

    ***

    > {success} Organizers can perform these actions from the front-end, including benefiting from 0% Commission on Ticket Sales if enabled.

    ***

    > {primary} Admins have full access and can perform any action without limitations.

    ***

<a name="multi-vendor-off"></a>

## Multi Vendor Off

When multi-vendor mode is `Off`, all options for `Become Organizer`, `Create Event`, or other multi-vendor features are hidden on the front-end. In this mode, Admin manages everything on behalf of organizers.

<br>

Admins can create a separate `User` from the admin panel and assign the `Organizer - Role`. Follow these steps:

1. Go to `Admin Panel -> Manage Users`.
2. Click on &nbsp;<larecipe-badge type="primary" rounded>Add New</larecipe-badge>
3. Enter the organizer's name, email, and password (you can use your own).
4. Set the `Default Role` to `Organizer`.

    ***

    > {primary} After creating an organizer, Admin can select the organizer wherever required.

    ***

<a name="zero-commission"></a>

## ZERO Commission

When you set the Admin Commission to ZERO, Eventmie Pro automatically calculates organizer payouts with 0% Commission on Ticket Sales. All payout details are displayed on the **Admin Panel -> Commissions** page.

- With 0% Commission on Ticket Sales, Admin can still set Admin Tax, and all payout details are shown on the Admin Commission & Organizer earnings page.
- If a booking is deleted, refunded, or disabled, the changes are reflected in both Admin Commission and Organizer Earnings.

<iframe width="75%" height="500" src="https://www.youtube.com/embed/0Pb277xuKzY?si=QnOtOo-idyQS3p4m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>