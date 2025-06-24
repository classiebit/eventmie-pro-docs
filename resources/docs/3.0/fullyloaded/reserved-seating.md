<!--
Meta Description: Learn how to set up reserved seating and interactive seat booking in Eventmie Pro FullyLoaded. Step-by-step guide for creating seat charts, real-time seat availability, and managing ticketed seating for stadiums, cinemas, and events in your Laravel event management platform.
Meta Keywords: reserved seating, seat booking, Eventmie Pro FullyLoaded, Laravel seat chart, stadium seating, cinema seating, real-time seat availability, ticketing, event management, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# Reserved Seating & Interactive Seat Booking in Eventmie Pro FullyLoaded

Set up any kind of reserved seating arrangement—stadiums, townhalls, cinemas, restaurants, lounges, and more—in your Eventmie Pro FullyLoaded Laravel event management platform. Offer attendees a seamless seat selection and booking experience with real-time seat availability and interactive seat charts.

In v2.0, you can:

1. Drag-and-drop to adjust seats on the seat chart image.
2. Enable a seat waiting list: if two users try to book the same seat, the system blocks the seat for the first user.
3. Real-time seat availability: blocked seats are instantly shown to other users, preventing double bookings.

---

![18-seat-booked](/images/v2/17-seat-booking.webp "18-seat-booked")

---

-   [Requirements](#Requirements)
-   [Add Reserved Seating](#Add-Reserved-Seating)
-   [Booking Seats](#Booking-Seats)

<a name="Requirements"></a>

## Requirements for Reserved Seating

Before creating reserved seating tickets, prepare two types of high-quality images:

1. A full image of the seating arrangement (e.g. stadium, cinema, etc.). Example:

---

![4-seating-arrangement](/images/fullyloaded/4-seating-arrangement.webp "4-seating-arrangement")

---

2. Cropped images for different ticket types (executive, VIP, etc.). Examples:

---

![8-royal-platinum](/images/fullyloaded/8-royal-platinum.webp "8-royal-platinum")

---

![7-royal](/images/fullyloaded/7-royal.webp "7-royal")

---

![6-club](/images/fullyloaded/6-club.webp "6-club")

---

![5-executive](/images/fullyloaded/5-executive.webp "5-executive")

---

<a name="Add-Reserved-Seating"></a>

## How to Add Reserved Seating to Your Event

Follow these steps to add reserved seating tickets:

1. Go to Event Edit Page -> **Tickets** Tab.
2. Create tickets for the event.
3. Click the **Seating Chart** button.

    ***

    ![1-add-seating-chart](/images/v2/EventmieProFullyLoadedV2.0/10-add-seating-chart.webp "1-add-seating-chart")

    ***

4. In the popup, upload the cropped seating image for the specific ticket type.

    ***

    ![2-add-seats-to-tickets](/images/v2/2-add-seats-to-tickets.webp "2-add-seats-to-tickets")

    ***

5. Click in the center of each seat block to add seats. **Drag** to reposition seats for perfect alignment.

    ***

    ![3-add-seats-to-tickets-1](/images/v2/3-add-seats-to-tickets-1.webp "3-add-seats-to-tickets-1")

    ***

6. Rename seats by **right-clicking** on the seat you added.

    ***

    ![9-seating-update-seat-name](/images/v2/9-seating-update-seat-name.webp "9-seating-update-seat-name")

    ***

7. Disable seats after adding them (for pre-reserved or unavailable seats). Disabled seats appear as unavailable on the checkout popup.

    ***

    ![10-seating-disable-seat](/images/v2/10-seating-disable-seat.webp "10-seating-disable-seat")

    ***

8. You can only add up to the maximum number of seats (total ticket quantity).
9. Repeat these steps to add reserved seating for other ticket types.

    ***

    ![11-seating-executive](/images/v2/11-seating-executive.webp "11-seating-executive")

    ***

    ![12-seating-club](/images/v3/reserved-seating-system-image-3.webp "12-seating-club")

    ***

10. For general seating (no reserved seats), simply do not add seats for that ticket.
11. Go to the **Media Tab** and upload the full seating arrangement image as the Seating Chart Image.

    ***

    ![15-seatingchart-image-upload](/images/v2/EventmieProFullyLoadedV2.0/11-seatingchart-image-upload.webp "15-seatingchart-image-upload")

    ***

<a name="Booking-Seats"></a>

## Booking Reserved Seats: Attendee Experience

Once reserved seating is set up, attendees can select and book seats interactively on the event page.

1. View the full seating arrangement image on the event page.

    ***

    ![16-seating-chart-event-page](/images/v3/resetved-seating-chart-image-4.webp "16-seating-chart-event-page")

    ***

2. On the checkout popup, view the reserved seating chart for each ticket type.
3. Select seats to book and proceed to checkout. The system blocks the seat for 5 minutes, giving the customer time to complete the booking. During this period, no one else can book the same seat.

    ***

    ![17-seat-booking](/images/v2/17-seat-booking.webp "17-seat-booking")

    ***

4. Legends show Reserved, Selected, Available, and Disabled seats for easy reference.

    ***

    ![18-seat-booked](/images/v3/resetved-seating-chart-image-4.webp "18-seat-booked")

    ***

5. If booking multiple seats, each attendee's name, phone, and address must be entered.
6. Organizer and Admin can view attendee details from the Booking Detail page.

    ***

    ![19-manage-booking-view-attendee](/images/v3/My-bookings-preview-image-51.webp "19-manage-booking-view-attendee")

    ***

    ![20-booking-attendee-detail](/images/v3/Booking-details-preview-image-53.webp "20-booking-attendee-detail")

    ***

---

<iframe width="75%" height="500" src="https://www.youtube.com/embed/07ux5omr4MM?si=ccy7siPJVbVYVweS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

---