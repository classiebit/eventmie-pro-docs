# Commissions & Payouts Management

A flexible, transparent commission and payout system is essential for building trust, attracting organizers, and scaling your event platform. Eventmie Pro & FullyLoaded offers industry-leading commission management—supporting both single-organization and multi-vendor (marketplace) business models, with options for 0% commission, custom admin fees, and seamless payout tracking.

---

> {primary} **Why It Matters:** Leading event platforms (Eventbrite, Universe, Ticketmaster) use robust commission and payout systems to incentivize organizers, maximize platform revenue, and ensure regulatory compliance.

---

- [How Commissions Work](#how-commissions-work)
- [Commission Setup](#commission-setup)
- [Commission Processing & Payouts](#commission-processing-payouts)
- [Commission Calculations & Scenarios](#commission-calculations--scenarios)
- [Refunds & Settlements](#refunds--settlements)
- [Organizer Bank Details](#organizer-bank-details)
- [Cancelled Bookings](#cancelled-bookings)
- [Multi-Vendor & Single-Org Modes](#multi-vendor--single-org-modes)
- [Become Organiser](#become-organiser)
- [Zero Commission Use Cases](#zero-commission-use-cases)


<a name="how-commissions-work"></a>
## How Commissions Work

- **Multi-Vendor Model:** Invite organizers to sell events on your platform. Set a commission percentage to share profits and attract more organizers.
- **Single-Organization Model:** Run your own events and keep 100% of ticket sales, or set custom admin fees for internal accounting.
- **Flexible Admin Fees:** Offer 0% commission to attract new organizers, or set custom rates for premium support, marketing, or platform maintenance.
- **Semi-Automatic System:** All payments are credited to the Admin account. Admins manually process payouts and update transfer statuses for full control and compliance.

<a name="commission-setup"></a>
## Commission Setup

Set your commission percentage in just a few clicks:

1. Go to `Admin Panel → Settings → Multi-vendor` tab.
2. Set the `Admin Commission` (e.g., 5 for 5%).

---

![Set Commission from admin panel](/images/commissions-setting.webp "Set Commission from admin panel")

---

> {primary} Commissions are only recorded if Multi-vendor mode is ON and Admin Commission is set.

---

<a name="commission-processing-payouts"></a>
## Commission Processing & Payouts

Eventmie Pro will automatically record commissions on every ticket sale, including when you offer 0% Commission on Ticket Sales.

1. Go to `Admin Panel -> Commissions`.
2. Click on &nbsp;<larecipe-button type="info" size="sm" rounded>View</larecipe-button>

    ***

    ![Admin & Organizer Booking Commission](/images/v3/How-to-check-commissions-image-3.webp "Admin & Organizer Booking Commission")

    ***

3. View each organizer's monthly `Total Bookings`, `Organizer earnings`, and `Admin Commission`.
4. After transferring an organizer's payout for a particular month, check the `Transferred` checkbox and click &nbsp;<larecipe-button type="info" size="sm" rounded>Update</larecipe-button> to update the transfer status. - Mark payouts as transferred and keep a full audit trail for compliance and transparency.

    ***

    ![Commission processing](/images/v3/How-to-check-organiser-payouts-image-4.webp "Commission processing")

    ***

    > {success} This allows you to keep a record of all organizer payout transfers, even when operating with 0% Commission on Ticket Sales.

    ***

---

> {success} **Best Practice:** Keep detailed payout records for every organizer to build trust and simplify accounting.

---

> {primary} Tip: Offer 0% commission to select organizers or for special campaigns.

---

<a name="commission-calculations--scenarios"></a>
## Commission Calculations & Scenarios

Eventmie Pro supports a wide range of commission and payout models:

| Payables              | Rates   | Calculations                | Total |
| :-------------------- | :------ | :-------------------------- | :---- |
| Ticket Price (TP)     | $100    | $100                        | $100  |
| Organizer Tax (OT)    | 5% + 5% | (5% of $100) + (5% of $100) | $10   |
| Admin Commission (AC) | 5%      | 5% of ($100 + $10)          | $5.5  |
| Admin Tax (AT)        | 3% + 3% | (3% of $100) + (3% of $100) | $6    |

---

> {primary} **Formula:** Admin Commission = % of (Ticket Price + Organizer Tax). Admin Tax is not included in organizer earnings.

---

> {primary} Admin Tax is not included in Organizer earnings. It goes directly to the Admin account.

---

| Total Customer Paid         | Total Organizer Earning | Total Admin Commission |
| :-------------------------- | :---------------------- | :--------------------- |
| TP + OT + AC + AT           | (TP + OT) - AC          | AC + AT                |
| $100 + $10 + $6 + $5 = $121 | $110 - $5.5 = 104.5     | $5.5 + $6 = $11.5      |

- **Online Payments:** Marked as paid automatically. Offline/Direct payments must be marked as paid by Admin/Organizer.
- **Un-Transferred Payouts:** New bookings after a payout is marked transferred appear as new entries for the same month.
- **Floating-Point Precision:** All calculations are accurate, even for 0% commission scenarios.

---

<a name="refunds--settlements"></a>
## Refunds & Settlements

Handle refunds and cancellations with full transparency:
- Refunded bookings after payout are tracked in **Refund Settlement** and must be claimed back from the organizer.
- Mark refund settlements as claimed for accurate financial records.

---

![commissions-refunds](/images/v3/Organiser-payots-refunds-image-5.webp "commissions-refunds")

---

<a name="organizer-bank-details"></a>
## Organizer Bank Details

Streamline payouts by collecting organizer bank details directly from their profile page. Admins can view these details in the Commissions panel for fast, secure transfers.

---

![Organizer bank details](/images/v3/Organiser-bank-details-image-6.webp "Organizer bank details")

---

![Admin Panel bank details](/images/commissions-bank-details-button.webp "Admin Panel bank details")

---

<a name="cancelled-bookings"></a>
## Cancelled Bookings

Cancelled bookings are automatically excluded from organizer earnings and commission calculations.

---

> {primary} Always set the booking status to Disabled after processing a refund to ensure accurate records.

---

<a name="multi-vendor--single-org-modes"></a>
## Multi-Vendor & Single-Org Modes

Eventmie Pro supports both single organization and multi-organization (multi-vendor, SaaS-style) event platforms. Toggle between these modes from the `Admin Panel -> Settings -> Multi-vendor` tab.

- **Multi-Vendor On (Marketplace):**
  - Organizers can sign up, create events, and receive payouts.
  - Admin sets commission rates and manages all payouts.
  - Organizers can never revert to customer status for security and audit purposes.
  - Organizers can book events for others but not for themselves.

- **Multi-Vendor Off (Single-Organization):**
  - Admin manages all events and bookings.
  - Organizers are created and managed by Admin only.
  - All multi-vendor features are hidden from the front-end.

---

> {success} **Use Case:** Use multi-vendor mode to build a marketplace like Eventbrite. Use single-org mode for in-house event management or private ticketing platforms.

---

#### With `multi-vendor` mode enabled, users can sign up as customers and then become organizers, benefiting from features like 0% Commission on Ticket Sales.

1. After signing up as a `customer`, go to `Profile`.
2. Click on &nbsp;<larecipe-button radius="half" type="black">Become Organizer</larecipe-button>
3. In the popup, enter your `Organization name/Brand name` and click &nbsp;<larecipe-button radius="half" type="info">Submit</larecipe-button>
4. After submission, the user's `Group` changes from `Customer` to `Organizer`.

<br>

#### When multi-vendor mode is `Off`, all options for `Become Organizer`, `Create Event`, or other multi-vendor features are hidden on the front-end. In this mode, Admin manages everything on behalf of organizers.

<br>

Admins can create a separate `User` from the admin panel and assign the `Organizer - Role`. Follow these steps:

1. Go to `Admin Panel -> Manage Users`.
2. Click on &nbsp;<larecipe-badge type="primary" rounded>Add New</larecipe-badge>
3. Enter the organizer's name, email, and password (you can use your own).
4. Set the `Default Role` to `Organizer`.

    ***

    > {primary} After creating an organizer, Admin can select the organizer wherever required.

    ***

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

<a name="zero-commission-use-cases"></a>
## Zero Commission Use Cases

- **Attract New Organizers:** Offer 0% commission to onboard new organizers and grow your platform.
- **Promotional Campaigns:** Temporarily set commission to zero for special events or marketing pushes.
- **Non-Profit & Community Events:** Support charity or community events by waiving platform fees.
- **Hybrid Models:** Combine 0% commission with admin taxes or service fees for flexible revenue strategies.

All payout details, including 0% commission scenarios, are visible in the Admin Panel for full transparency.

---

> {primary} **Pro Tip:** Regularly review your commission and payout settings to stay competitive, compliant, and attractive to top organizers—just like the industry leaders.

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/0Pb277xuKzY?si=QnOtOo-idyQS3p4m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>