# What's New <small>changelog</small> v1.5.x

- [v1.5.0 (4-Nov-2020)](#v1.5.0)

---

>{danger} You must be on v1.4.x to upgrade to v1.5.x. Please DO NOT directly upgrade to v1.5.x older than v1.4.x.

---

<a name="v1.5.0"></a> 
## v1.5.0 <small>Released on 4-Nov-2020</small>

v1.5.0 is a major release. It includes a lot of new & most requested features, improvements, optimizations, and bug fixes.


### New Features & Improvements

1. Major Integration: New Live Available & Non-Available Timeslots for Event Schedules.<br>
[eventmie-pro-docs.classiebit.com/docs/1.5/events/repetitive-events#timeslots-availability](https://eventmie-pro-docs.classiebit.com/docs/1.5/events/repetitive-events#timeslots-availability)

2. On the Checkout Popup, it'll show Vacant seats in case the Total Available Ticket Quantity is less than Max Ticket Qty Limit Per Order (Admin Panel -> Settings -> Booking Tab -> Max Ticket Qty Limit Per Order). <br>
[eventmie-pro-docs.classiebit.com/docs/1.5/events/repetitive-events#timeslots-availability](https://eventmie-pro-docs.classiebit.com/docs/1.5/events/repetitive-events#timeslots-availability)

3. Major improvements on Admin's Commissions & Organiser's Earnings page. <br>
[eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#commission-calculations](https://eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#commission-calculations)

4. Added a new Refunds Reports on the Admin Panel -> Commissions page, which will show the Refunded Booking's Organizer Earning amounts that need to be claimed back from the Organizer.<br>
[eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#refunds-settlements](https://eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#refunds-settlements)

5. ZERO Commission - in case you set Admin Commission = 0, then it'll still calculate the Organizer payouts with ZERO commission, and show those payouts on the Admin Commission & Organizer earning page.<br>
[eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#zero-commission](https://eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#zero-commission)

6. Added Organizer Bank Details button on Admin Panel -> Commission page, which will show Organizer Bank Details.<br>
[eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#organiser-bank-details](https://eventmie-pro-docs.classiebit.com/docs/1.5/admin/commissions#organiser-bank-details)

7. Added Search Event Bar on the Home page.<br>

8. Added Top Cities that have the highest number of Events, on the Home page.<br>

9. Multi-ticket scans, if in case, a ticket has 3 Attendees (3 Qty), then you can scan the ticket up to 3 times (Max Scan = Qty)<br>
[eventmie-pro-docs.classiebit.com/docs/1.5/bookings/ticket-scanner#scan-check-in](https://eventmie-pro-docs.classiebit.com/docs/1.5/bookings/ticket-scanner#scan-check-in)

10. New Improved & Minimalist Ticket PDF design.<br>
[eventmie-pro-docs.classiebit.com/docs/1.5/bookings/ticket-scanner#ticket-pdf](https://eventmie-pro-docs.classiebit.com/docs/1.5/bookings/ticket-scanner#ticket-pdf)

11. PayPal payment gateway upgraded to PayPal v2 API. <br>

12. Translated Event Schedules and added Multi-lingual everywhere i.e Calendars, Event dates & time, repetitive schedules, ticket PDF, email, and more. <br>

13. Improved translation on all pages.

14. Added Export Attendees on Admin Panel -> Events page.

15. Added missing data like Checked-in, Cancellations, Booking status, etc columns in Export Attendees CSV file.

16. Removed Daily, Weekly & Monthly Repetitive schedules limitations like minimum tomorrow or future dates. 

17. Replaced Admin Panel -> Settings -> Regional -> Currency Dropdown by Input field, so that you can add any currency Shortcode.

18. Upgrade to Laravel 8.x. Now, Eventmie Pro is compatible with Laravel 6.x, 7.x & 8.x.<br>

19. Blogs improved. <br>


### Bugs Resolved

1. On Event Setup Form -> Powered By Tab -> Tag dropdown was not showing fewer tags, Resolved.
2. Added padding (spacing) in between Gallery images on the Event Detail page.
3. OAuth error, Facebook & Google login error that was arising due to Laravel Trustproxies, Resolved.
4. Set Email Verified = True, in case, registered via Facebook or Google.
5. Event Setup Form -> Detail tab update button was showing a Red Cross alert, Resolved.
6. Event was expiring one day before due to different timezones, Resolved. Now, the event will appear as "Expired" after one day of Event End Date.
7. Translated page breadcrumbs (navigations).

