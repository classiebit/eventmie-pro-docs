# What's New <small>changelog</small> v1.6.x

- [v1.6.0 (15-Mar-2021)](#v1.6.0)

---

>{danger} You must be on v1.5.x to upgrade to v1.6.x. Please DO NOT directly upgrade to v1.6.x older than v1.5.x.

---

<a name="v1.6.0"></a> 
## v1.6.0 <small>Released on 15-Mar-2021</small>

v1.6.0 is a major release. It includes a lot of new & most requested features, improvements, optimizations, and bug fixes.


### New Features

- Dynamic Date & Time Format, admin can change date & time format from Admin Panel -> Settings -> Regional Tab.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/settings#Regional](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/settings#Regional)

- Add Event to Google Calendar option, customers can add their booked events to Google Calendar.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/bookings/manage-bookings#google-calendar](https://eventmie-pro-docs.classiebit.com/docs/1.6/bookings/manage-bookings#google-calendar)

- Admin Panel New Event Tickets Statistics Table, admin can view overall Tickets sales stats for each event easily. <br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/dashboard#event-tickets-statistics](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/dashboard#event-tickets-statistics)

- New Tickets filter on Admin Panel -> Dashboard -> Sales Reports and added Sales Reports data sum (Grand Totals) in the **CSV** file export.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/dashboard#sales-report](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/dashboard#sales-report)

- New Organizer Dashboard, now Organisers can also see their Events tickets sales overview & reports easily from the new dashboard. <br>
[eventmie-pro-docs.classiebit.com/docs/1.6/bookings/manage-bookings#organizer-dashboard](https://eventmie-pro-docs.classiebit.com/docs/1.6/bookings/manage-bookings#organizer-dashboard)

- Enable/Disable Manually Approve Become Organiser process, Admin can now manually approve the Organiser profile.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/organiser-approval](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/organiser-approval)

- Added settings at Admin Panel -> Settings -> Bookings tab to Enable/Disable Booking Cancellation, Ticket Download & Google Calendar options for customers. <br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/settings#Booking](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/settings#Booking)

- Add/Remove Gallery images one-by-one.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/events/simple-events#Media](https://eventmie-pro-docs.classiebit.com/docs/1.6/events/simple-events#Media)

- Added Menu Builder on Admin Panel for additional header & footer menu items on front-end with new pages and external links.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/menu-builder](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/menu-builder)

- Option to Add custom URL Buttons on the Homepage Banner and control the Order of banners.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/admin/site-content#banners](https://eventmie-pro-docs.classiebit.com/docs/1.6/admin/site-content#banners)

- New Event excerpt (short-info) field for better SEO and understanding about events on the Event Listing page.<br>
[eventmie-pro-docs.classiebit.com/docs/1.6/events/simple-events#Details](https://eventmie-pro-docs.classiebit.com/docs/1.6/events/simple-events#Details)


### Improvements

- Added Categories menu in the header.
- Added Event gallery images opener/slideshow on the Event page.
- Language selector dropdown moved to Footer to free up header space.
- Spam prevention on Signup & Contact up form.
- On the Event Setup form, show **Unsaved Changes** alert only if there are any changes.
- On the Event Setup form, added required Tabs completion icons to know why the event is not publishing.
- On the Organiser's Manage Events page, added the Event Publish status column to show if the event is published or not.
- Signup option on Checkout popup for guests.
- Improved Front-end data tables mobile responsive design for all pages.
- Upgraded all Composer, Javascript & VueJs packages to the latest version. Update Laravel Mix to `v6.0` for better front-end performance.



### Bugs Resolved

- Show Organizer required alert on Event Setup form -> Details tab.
- Resolved date format issues & used one global date & time format.
- Don't include expired events in Explore Best Cities section.
- Show email verified notification.
- Free up tickets for other customers after booking cancellation.
- Hide Admin tax from Organiser Earnings page.
- Hide profile pic upload option except for Admin on Admin Panel.
- Removed colorful border from event categories images on the homepage for better color branding.
- Header logo resize issue on scrolling.
- On Event setup form -> Location tab, show Venue as required.
- On the Browse Events page, show only countries that have events in the Countries filter.