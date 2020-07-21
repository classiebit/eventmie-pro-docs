# What's New <small>changelog</small> v1.4.x

- [v1.4.0 (01-Aug-2020)](#v1.4.0)

---

>{danger} You must be on v1.3.x to upgrade to v1.4.x. Please DO NOT directly upgrade to v1.4.x from v1.2.x.

---

<a name="v1.4.0"></a> 
## v1.4.0 <small>released on 01-Aug-2020</small>

v1.4.0 is a major release. It includes a lot of new & most requested features, improvements, optimizations, and bug fixes.


### New Features & Improvements

- Online Events with Zoom, Google Meet and all other group public/private online meeting and events.
- Multiple Taxes- Organizers will be able to apply multiple taxes on each ticket.
- Multiple Admin Taxes- Admin (site-owners) will be able to create and apply multiple default taxes on all tickets, like a fixed admin fee to the customers. 
- Private customers- Organizers will only be able to make a booking for a customer with email. The old Customers dropdown which shows all site customers is replaced by a new dropdown with search option.
- New design for Ticket PDF with QrCode and reduced data in QrCode for faster scanning.
- Location filters on Event listing page (Browse Events). You'll be able to filter by city, state and country.

- Multi-lingual Admin Panel. 
- Multi-lingual Calendars.
- Added Export Attendees button on Organizer Manage Events page.
- is_paid or not booking status. Offline payment- default is_paid = 0, Online payment- default is_paid = 1

- Alert when switching to tabs on event form
- Upgrade to Laravel 7.x and Voyager 1.4
- Disable past event in schedules on Event detail page
- Improved Customer & Organizer bookings page on Front-end


### Bugs Resolved

- Redirect user to event page after login
- Removed mili-seconds from Event setup form -> Timings tab
- Organizer manage bookings page, Date filter is not working correctly.
- resolve GDPR issue
