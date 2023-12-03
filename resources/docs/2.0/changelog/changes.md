# What's New <small>changelog</small> v2.0.x

- [v2.0 (29-Nov-2023)](#v2.0)

<a name="v2.0"></a> 
## v2.0 <small>Released on 29-Nov-2023</small>

v2.0 is a major release. It includes a lot of new & most requested features, improvements, optimizations, and bug fixes.

### New Features

---

> {primary} New in v2.0 🔥

---

- **A VERY BIG Update**, Eventmie Pro FullyLoaded 2.0 Android & iOS Apps available now. <br>
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/apps/introduction](https://eventmie-pro-docs.classiebit.com/docs/2.0/apps/introduction)

- **New Improved** in Reserved seating feature-
    - now you can Drag-n-Drop to adjust the seats on the seatchart image.
    - Seat waiting list in case two users are booking the same seat, then system will block the seat for first user. 
    - Realtime seat availability check, in conjunction with above addition, this will show the blocked seat to the other users, so that they can't book the same seat. <br><br>

    👉 [eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/reserved-seating](https://eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/reserved-seating)

- **Added time-bound checkout**. A checkout timer of 5 minutes will run during the checkout, in that period, system will block selected tickets for the attendee so that they book tickets easily before ticket being go out-of-stock in case of high sales.<br>
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/bookings/booking-tickets](https://eventmie-pro-docs.classiebit.com/docs/2.0/bookings/booking-tickets)

- **New Seasonal Ticket** feature, in which, you can create Seasonal ticket for events, and on a purchase of single seasonal ticket, attendee can attend the event for whole season (month/week) by scanning the same ticket at the Check-in window on Event venue.<br>
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/events/repetitive-events#seasonal-tickets](https://eventmie-pro-docs.classiebit.com/docs/2.0/events/repetitive-events#seasonal-tickets)

- **New Stripe webhook** integration with which, even if the customer accidently closes the payment tab on Stripe checkout page, or due to any network issue, the customer fails to get back on the website after payment, then the system will not miss a successful booking and with the help of Stripe webhook, the system will make a booking for the customer as soon as customer makes the payment on Stripe.<br>
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/stripe#Webhook](https://eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/stripe#Webhook)

- **New Failed Bookings** page for Admin & Organizer so that they can check how many were failed attempts for booking event tickets.
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/failed-bookings](https://eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/failed-bookings)

- **A complete new stunning** user-interface designed with latest Bootstrap 5 for a perfect web & mobile experience.

- **Added skeleton loading** for a nice loading animation until the events loads up.

- **Designed a whole new Ticket** PDF Design<br>
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/bookings/ticket-scanner#ticket-pdf](https://eventmie-pro-docs.classiebit.com/docs/2.0/bookings/ticket-scanner#ticket-pdf)

- **Added a .webp image converter** for converting all the events, venues, tags and other media files to .webp format for fast image loading and better SEO ranking.

- **New improved Guest checkout**, now within the Checkout popup, user can Login, Register or checkout as Guest can do all within the same popup window and it won't redirect the user anywhere. This will improve the Ticket purchasing for Guests.
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/guest-checkout](https://eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/guest-checkout)

- **New & Redesigned Data rich** Dashboard for Organizer, POS & Scanner users.<br>
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/events/organiser-dashboard](https://eventmie-pro-docs.classiebit.com/docs/2.0/events/organiser-dashboard)

- **Added Checked-in time** when attendee check-in and displayed the check-in time on Organizer Bookings page where they can verify the Attendee check-in time.
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/complimentary-bookings](https://eventmie-pro-docs.classiebit.com/docs/2.0/bookings/ticket-scanner#scan-check-in)

- **Now with Complimentary Bookings** Admin can the multiple complimentary tickets within a single ZIP file.
👉 [eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/complimentary-bookings](https://eventmie-pro-docs.classiebit.com/docs/2.0/fullyloaded/complimentary-bookings)

- **Added Venues Management** on Admin panel for Admin.

- **Added Currencies Management** on Admin panel for Admin.

- **Specific Currency option** now shows a Currency Dropdown to select within the Managed currencies.

- **New Sitemap generator** which will generate the Sitemp automatically and it'll update the Sitemap on daily basis with cron job.

- **New Ticket Order Feature** with which, you can set specific order to a ticket to show Tickets in the same Order on Checkout popup.

- **New Sales Report EXPORT** button for Organiser with which they can download their Event sales report with all information like Tax & commission charged.

- **Replaced Explore best cities** by Explore Best Venues on Homepage.



### Improvements

- Optimize Database queries for large datasets and increase scalability.
- Add State & City dropdown on Homepage
- Disable refunds for checked-in tickets
- Generate single consolidated invoice for multiple bookings
- Add Download Invoice button on Admin Panel -> Bookings page
- Show promocode discounted amount on Bookings pages
- Open Google Map when clicking Get Directions in Event page 
- Correct timezone placement on Browse Events page
- Update Stripe API with latest version to fix 3D authentication issue
- Improve SMS notification
- Add public URL do download ticket directly booking SMS
- Add option whether convert timezone or not
- Remove Attendee dropdown from Ticket Scan page
- Browse Events- Add Filter Toggle Hide (default hidden)
- Redirect user back to Checkout popup after registering in case of login or signup
- Don't show SMTP error when no SMTP credentials or incorrect SMTP creds.
- Show progress bar when creating Tags
- Send email on Manually Approve Organizer updates
- Venues Listing page add Filter Toogle button
- Add Reset Filter button on MyBookings page for Organizer
- Improve RTL compatibility
- Update Google Analytics Tag Manage code
- Private Password Protected Event, enter event password without login 
- Add Organizer Info on Event page
- Set Promocode discount on ticket price only instead of Ticket Price with Tax
- Event Listing Order By start_date
- Hide Past Months & disable past dates in Repetitive Schedule on Event page


### Bugs Resolved

- If after Promocode is applied, the Net total becomes 0 then don't take customer to payment gateway and directly checkout to download tickets.
- Manage Bookings & Earnings & Commissions incorrect Calculations due to offline un-paid bookings
- Email verification issue
- Login with Google & Facebook
- Custom child menu item design in header
- Timezone issue
- POS login error
- Error when no tax on Event edit -> Tickets tab
- Clone event Duplicate entry issue
- Promocode missing translation
- Repetitive event error in case of emply date for a month
- Event Edit -> Details tab Checkbox keep showing checked
- Error when booking in Arabic lang
- Event Rate & Review error
- Date filter error on Browse Events page
- Resolve Event Ended issue on same date
- Fix Mobile menu
- Show Event currency everywhere in case of Event specific currency
- Event ShortURL issue
- Pagination issue on Organizer Dashboard
- Max Ticket quantity per customer limit issue
- Not showing all Venues in Event Edit -> Venues tab when selecting venue fixed
- Homepage Banner responsive issue
- Browse Venues page Country Filter issue
- Venue image file permission issue when creating new venue
- Sale Start date end date Arabic error
- Add Attendee button not working
- Google API loading multiple times error
- Meta Data not showing for Custom Pages (Terms, Privacy, About us) 
