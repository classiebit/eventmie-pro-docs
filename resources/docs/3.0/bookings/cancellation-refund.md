# Event Cancellation & Refund Management System

Eventmie Pro makes managing event ticket cancellations and refunds simple and transparent. Customers, Organizers, and Admins can handle cancellations directly from their respective `Bookings` pages. Customers can request booking cancellations, and Organizers or Admins can process and update the status of these requests for a seamless refund experience.

<br>

Admins or Organizers can decide whether to issue a refund to customers and update the cancellation status, allowing customers to track their request progress from their `Bookings` page.

---

> {primary} **Pro Tip:** Set appropriate pre-cancellation time limits in `Admin Panel -> Settings -> Bookings` to balance customer flexibility with operational efficiency.

---

## Cancellation Workflow Overview

Eventmie Pro's cancellation system operates through a structured workflow that ensures proper handling, communication, and compliance:

<br>

#### Customer Initiated Cancellations

1. **Self-Service Portal:** Customers can request cancellations through their booking dashboard
2. **Time-Based Restrictions:** Cancellations only allowed before the configured pre-cancellation time
3. **Status Tracking:** Real-time updates on cancellation request progress

<br>

#### Administrative Processing

1. **Role-Based Access:** Organizers handle their events, admins handle all events
2. **Status Management:** Comprehensive status tracking and updates
3. **Refund Processing:** Integrated refund handling with payment processors (require additional customization)

---

![manage-bookings-cancellation](/images/v2/EventmieProFullyLoadedV2.0/manage-bookings-cancellation.webp "manage-bookings-cancellation")

---

- [Customer Cancellation Process](#customer-cancellations)
- [Organizer Cancellation Management](#organizer-cancellations)
- [Cancellation Status Management](#cancellation-status)

<a name="customer-cancellations"></a>
## Customer Cancellation Process

Customers can initiate cancellation requests through an intuitive, self-service interface that provides transparency and control over their bookings.

<br>

#### When Customers Can Cancel

- **Pre-Event Cancellation:** Before the configured pre-cancellation time limit
- **Valid Bookings:** Only active, paid bookings are eligible for cancellation
- **Pre-Check-in Status:** Cancellations not allowed after check-in completion
- **Policy Compliance:** Must comply with event-specific cancellation policies

<br>

#### Step-by-Step Cancellation Process

1. **Access Booking Dashboard:** Navigate to the `My Bookings` page from the header menu
2. **Identify Eligible Booking:** Locate the booking that meets cancellation criteria
3. **Initiate Cancellation:** Click the <larecipe-button type="danger" size="sm" rounded>Cancel</larecipe-button> button on the booking row
4. **Confirmation:** Review cancellation terms and confirm the request
5. **Status Tracking:** Monitor cancellation status updates in real-time
6. **Refund Processing:** Receive refund according to the event's refund policy

<br>

#### Customer Experience Features

- **Real-Time Status Updates:** Live updates on cancellation request progress
- **Email Notifications:** Automated notifications at each stage of the process
- **Policy Transparency:** Clear display of cancellation terms and refund policies
- **Self-Service Access:** 24/7 access to cancellation requests and status
- **Communication History:** Complete record of all cancellation-related communications

---

> {primary} **Important:** Once a cancellation request is submitted and processed, it cannot be re-submitted. Ensure all details are correct before confirming.

---

> {success} **Notification System:** All cancellation requests and status updates trigger automated email notifications to all relevant parties.

---

<a name="organizer-cancellations"></a>
## Organizer Cancellation Management

Organizers have comprehensive control over cancellation requests for their events, enabling professional customer service and proper business management.

<br>

#### Organizer Capabilities & Responsibilities

- **Request Processing:** Review and approve/deny cancellation requests
- **Status Management:** Update cancellation and booking statuses
- **Refund Coordination:** Process refunds and update payment status
- **Customer Communication:** Maintain professional customer relationships
- **Policy Enforcement:** Apply event-specific cancellation policies

<br>

#### Administrative Workflow

1. **Access Booking Management:** Navigate to the `Bookings` page from the organizer dashboard
2. **Review Cancellation Requests:** Identify pending cancellation requests
3. **Evaluate Request:** Assess cancellation reason and policy compliance
4. **Update Status:** Use <larecipe-button type="primary" size="sm" rounded>Edit</larecipe-button> to modify cancellation status
5. **Process Refund:** Handle refund according to payment method and policy
6. **Update Booking Status:** Set booking status to `Disabled` after refund. Only after you `Disable` the booking, the customer will not be able to use the booking. And the ticket will be available for resale to other customers.

<br>

#### Status Management Options

- **No Cancellation:** Booking remains active and valid
- **Pending:** Cancellation requested, under review
- **Approved:** Cancellation approved, refund in process
- **Refunded:** Cancellation completed, refund issued

<br>

#### Booking Status Management

- **Enabled:** Booking is active and valid for event access
- **Disabled:** Booking is invalidated and cannot be used

<br>

#### Payment Status Control
- **Is Paid - Yes:** Payment confirmed, full access granted
- **Is Paid - No:** Payment pending, limited access


---

> {success} **Admin Capabilities:** Administrators can perform the same cancellation management actions as organizers from the `Admin Panel -> Bookings` section.

---

<a name="cancellation-status"></a>
## Cancellation Status Management

Eventmie Pro's intelligent status management system provides clear visibility into cancellation progress and ensures proper workflow control.

<br>

#### Status Hierarchy & Workflow

The cancellation system operates through a structured status hierarchy that ensures proper processing and compliance:

| Cancellation Status | Booking Status | Description | Business Impact | Next Actions |
|--------|-------------|-----------------|--------------|
| **No Cancellation** | Enabled | Booking is active and valid | Full event access granted | Monitor for changes |
| **Pending** | Enabled | Cancellation requested, under review | Ticket remains valid during review | Process request decision |
| **Approved** | Disabled | Cancellation approved, refund in process | Ticket access suspended | Complete refund process |
| **Refunded** | Disabled | Cancellation completed, refund issued | Ticket permanently invalidated | Tickets are available for resale |

<br>

#### Status Management Best Practices

<br>

##### For Organizers & Admins

1. **Timely Processing:** Review and process cancellation requests promptly
2. **Status Synchronization:** Always update both cancellation and booking statuses
3. **Refund Coordination:** Ensure refund processing aligns with status updates

<br>

##### For Customers

1. **Status Monitoring:** Regularly check cancellation request status
2. **Policy Understanding:** Familiarize yourself with event cancellation policies
3. **Timely Requests:** Submit cancellation requests before deadlines

<br>

#### Technical Implementation

- **Real-Time Updates:** Status changes reflect immediately across all interfaces
- **Audit Trail:** Complete logging of all status changes and timestamps
- **Notification System:** Automated alerts for all status updates
- **Reporting Capabilities:** Comprehensive reporting on cancellation patterns

---

> {primary} **Critical Workflow:** When updating `Cancellation Status` to `Approved` or `Refunded`, always change the `Booking Status` to `Disabled` to properly invalidate the booking.

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/0iN5b0u0qp0?si=r7T-dEzpw9U7MJRj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

---
