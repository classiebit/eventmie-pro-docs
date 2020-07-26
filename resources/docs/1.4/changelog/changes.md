# What's New <small>changelog</small> v1.4.x

- [v1.4.0 (01-Aug-2020)](#v1.4.0)

---

>{danger} You must be on v1.3.x to upgrade to v1.4.x. Please DO NOT directly upgrade to v1.4.x from v1.2.x.

---

<a name="v1.4.0"></a> 
## v1.4.0 <small>released on 01-Aug-2020</small>

v1.4.0 is a major release. It includes a lot of new & most requested features, improvements, optimizations, and bug fixes.


### New Features & Improvements

- Online Events with Zoom, Google Meet and all other public/private video conferencing or live streaming apps. <br>
[eventmie-pro-docs.classiebit.com/docs/1.4/events/online-events](https://eventmie-pro-docs.classiebit.com/docs/1.4/events/online-events)

- Multiple Taxes- Organizers can apply multiple taxes on each ticket.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/events/simple-events#Tickets](https://eventmie-pro-docs.classiebit.com/docs/1.4/events/simple-events#Tickets)

- Multiple Admin Taxes- Admin (site-owners) will be able to create and apply multiple default taxes on all tickets, like a fixed admin fee to the customers.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/admin/taxes#admin-taxes](https://eventmie-pro-docs.classiebit.com/docs/1.4/admin/taxes#admin-taxes)
 
- Private customers- Organizers will only be able to make a booking for a customer with email. The old Customers dropdown which shows all site customers, is replaced by a new dropdown with search option.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/bookings/booking-tickets#organizer-booking-tickets](https://eventmie-pro-docs.classiebit.com/docs/1.4/bookings/booking-tickets#organizer-booking-tickets)

- New design for Ticket PDF with QrCode and reduced data in QrCode for faster scanning.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/bookings/ticket-scanner](https://eventmie-pro-docs.classiebit.com/docs/1.4/bookings/ticket-scanner)

- Location filters on the Event listing page (Browse Events). You'll be able to filter by city, state, and country.
- Multi-lingual Calendars.<br>
[eventmie-pro.classiebit.com/events](https://eventmie-pro.classiebit.com/events)

- Multi-lingual Admin Panel. <br>
[eventmie-pro-docs.classiebit.com/docs/1.4/configuration#multiple-languages](https://eventmie-pro-docs.classiebit.com/docs/1.4/configuration#multiple-languages)


- Multi-lingual Notifications email i.e Booking emails, registration emails, etc.
- Improved email notification and email templates. Added more info in every email.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/bookings/email-notifications](https://eventmie-pro-docs.classiebit.com/docs/1.4/bookings/email-notifications)

- Added Export Attendees button on the Organizer Manage Events page.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/events/manage-events](https://eventmie-pro-docs.classiebit.com/docs/1.4/events/manage-events)

- Added `is_paid` or not booking status. Offline payment- default `is_paid = 0`, Online payment- default `is_paid = 1`.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/events/manage-events](https://eventmie-pro-docs.classiebit.com/docs/1.4/events/manage-events)

- Upgrade to Laravel 7.x and Voyager 1.4.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/installation](https://eventmie-pro-docs.classiebit.com/docs/1.4/installation)

- Improved Customer's `My Bookings` page.<br>
[eventmie-pro-docs.classiebit.com/docs/1.4/installation](https://eventmie-pro-docs.classiebit.com/docs/1.4/installation)


- Confirmation alert popup before switching to tabs on the event form.
- Disabled past events in schedules on the Event page.
- If the Booking is `Disabled` or Is Paid `No` then, the customer won't be able to Download the ticket, access online event secret details, or request cancellation.


### Bugs Resolved

- Redirect the user to the event page after login
- Removed millisecond from Event setup form -> Timings tab
- Resolve Date Filter issues on Organizer's `Manage Bookings` page.
- resolve GDPR issue
