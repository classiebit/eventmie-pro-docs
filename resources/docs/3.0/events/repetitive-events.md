# Repetitive Events

With Eventmie Pro, you can easily create daily, weekly, and monthly recurring events and classes—perfect for yoga sessions, webinars, workshops, and more. Recurring event scheduling helps maximize attendance and automate your event management process.

---
<small>**Eventmie Pro Fullyloaded Event Page Preview**</small>
<img src="/images/v3/EPF-Repetitive-Event-Preview-Image-46.webp" alt="Simple event view" title="Simple event view" class="medium-zoom-image">

---

> {primary} This section covers the unique steps for creating a Repetitive Event. All other steps are the same as for a Simple Event.

---

-   [Create Repetitive Event](#create-repetitive-event)
-   [Timing](#timing)
-   [Repetitive Schedules](#repetitive-schedules)
-   [Repetitive Type: Daily](#repetitive-type-daily)
-   [Repetitive Type: Weekly](#repetitive-type-weekly)
-   [Repetitive Type: Monthly](#repetitive-type-monthly)
-   [Skip Schedule <small class="v">v1.7</small>](#skip-schedule)
-   [Seasonal Tickets <small class="v">v2.0</small>](#seasonal-tickets)
-   [Timeslots Availability](#timeslots-availability)

<a name="create-repetitive-event"></a>

## Create Repetitive Event

A repetitive event is any event or class with recurring schedules. Click on <larecipe-button type="primary" size="sm" rounded>Create Event</larecipe-button> to get started with your recurring event setup.

<a name="Timing"></a>

## Timing

To begin creating recurring schedules, first set the time range for your repetitive event.

<br>

**Form Fields**

-   Start date
-   Start time
-   End date
-   End time
-   Add Repetitive Schedules

---

> {success} Check the `Add Repetitive Schedules` box to enable recurring event schedules.

---

<a name="Repetitive-Schedule"></a>

## Repetitive Schedule <small class="v">v1.7</small>

Once you enable `Add Repetitive Schedules`, a new interface appears:

1. Schedule rows are auto-generated based on the `Total Months` between the start and end dates.
2. You can customize each schedule individually.
3. Customers must purchase a ticket for every `day` by default.

---

> {primary} If you want customers to pay monthly or weekly instead of daily, see the `Monthly/Weekly Payment` section below.

---

<br>

**Let's explore the Repetitive Types:**

<a name="repetitive-type-daily"></a>

## Repetitive Type: Daily

Create events that repeat every `day` within your selected date range.

<br>

**Form Fields**

-   **Repetitive Dates (Repeat Except)** – Set dates to exclude from the schedule.
-   **Start Time** – Set the start time for each month's schedule.
-   **End Time** – Set the end time for each month's schedule.

---

> {success} You can set different start and end times for each month's schedule.

---

> {primary} Real-time calculations show the total scheduled days and times.

---

**Example: Daily Repetitive Schedules**

---

![Daily Repetitive Schedules](/images/v3/Repetitive-events-preview-image-2.webp "Daily Repetitive Schedules")

---

**How it appears on the Event page:**

---

![Daily Repetitive Schedules View](/images/v3/Repetitive-Events-Get-tickets-Image-3.webp "Daily Repetitive Schedules View")

---

<a name="repetitive-type-weekly"></a>

## Repetitive Type: Weekly

Create events that repeat every `week` within your selected date range.

<br>

**Form Fields**

-   **Repetitive Days** – Select weekdays for the event to repeat.
-   **Start Time** – Set the start time for each month's schedule.
-   **End Time** – Set the end time for each month's schedule.

---

**Example: Weekly Repetitive Schedules**

---

![Weekly Repetitive Schedules](/images/v3/Weekly-repetitive-events-image4.webp "Weekly Repetitive Schedules")

---

**How it appears on the Event page:**

---

![Weekly Repetitive Schedules View](/images/v3/Weekly-repetitive-events-preview-image-5.webp "Weekly Repetitive Schedules View")

---

<a name="repetitive-type-monthly"></a>

## Repetitive Type: Monthly

Create events that repeat every `month` within your selected date range.

<br>

**Form Fields**

-   **Repetitive Dates (Repeat Every)** – Set dates for the event to repeat each month.
-   **Start Time** – Set the start time for each month's schedule.
-   **End Time** – Set the end time for each month's schedule.

---

**Example: Monthly Repetitive Schedules**

---

![Monthly Repetitive Schedules](/images/v3/Monthly-repetitive-events-preview-image-6.webp "Monthly Repetitive Schedules")

---

**How it appears on the Event page:**

---

![Monthly Repetitive Schedules View](/images/v3/Monthly-repetitive-events-image-7.webp "Monthly Repetitive Schedules View")

---

<a name="skip-schedule"></a>

## Skip Schedule <small class="v">v1.7</small>

To skip a month in your schedule, simply leave the specific **Schedule** input blank.

---

![Skip Repetitive Schedules](/images/v2/RepetitiveEventImages/SkipScheduleImage.webp "Skip Repetitive Schedules")

---

**How it appears on the Event page:**

---

![Skip Repetitive Schedules View](/images/v2/RepetitiveEventImages/SkipSchedulePreviewImage.webp "Skip Repetitive Schedules View")

---

<a name="seasonal-tickets"></a>

## Seasonal Tickets

---

> {primary} New in v2.0 🔥

---

For recurring schedules, you may want to accept payments on a `Monthly` or `Weekly` basis for all schedules within a month or week, instead of charging for each day separately.

Seasonal Tickets allow customers to purchase all tickets for a month or week at once, enabling them to attend every session with a single ticket.

<br>

This means customers pay a **Full Advance Payment** for a complete month or week schedule, making it easier to manage recurring event payments.

<br>

To enable this, check the `Seasonal Ticket` box (e.g., for `Repetitive Type: Monthly`). Then:

1. Set ticket prices for the entire month or week, not just a single session.
2. When a customer pays, you receive the full month's or week's payment upfront.

---

**Example: Monthly Repetitive Schedules with Seasonal Ticket enabled**

---

![Monthly Repetitive Schedules Monthly Payment](/images/v2/RepetitiveEventImages/Monthly-Repetitive-Schedule-Image.webp "Monthly Repetitive Schedules  Monthly Payment")

---

**How it appears on the Event page:**

---

![Monthly Repetitive Schedules  Monthly Payment View](/images/v2/RepetitiveEventImages/Monthly-Repetitive-Schedule-Preview.webp "Monthly Repetitive Schedules  Monthly Payment View")

---

<a name="timeslots-availability"></a>

## Timeslots Availability

Easily check available timeslots for recurring event schedules. See if a timeslot is fully booked before proceeding to checkout.

1. In the Event Schedules, if all tickets for a specific timeslot/date are booked, that timeslot will display as **Out Of Stock**.

---

![Live Timeslots Availability Check](/images/v2/RepetitiveEventImages/repetitive-events-availability.webp "Live Timeslots Availability Check")

---

2. On the Checkout Popup, **Vacant Seats** are shown for each ticket if the **Total Available Ticket Quantity** is less than the **Max Ticket Qty Limit Per Order** (Admin Panel -> Settings -> Booking Tab -> Max Ticket Qty Limit Per Order).

This ensures only limited ticket availability is displayed, protecting your inventory details.

---

![Live Timeslots Availability Vacant Seats Per Ticket](/images/v2/RepetitiveEventImages/repetitive-events-vacant.webp "Live Timeslots Availability Vacant Seats Per Ticket")

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/3HzWrXDe7TI?si=fYloyFZjTyRHbsBS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

---
