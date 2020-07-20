# Manage Bookings

Manage all the Event's Bookings from `Admin Panel`

---

![Admin panel bookings](http://eventmie-pro-docs.test/images/admin-panel-bookings.jpg "Admin panel bookings")

---

- [Bookings](#Bookings)
- [Commissions](#Commissions)
- [Taxes](#Taxes)


<a name="Bookings"></a>
## Bookings

All the bookings can be managed from this page. When you disable a Booking from the Admin Panel, it's equal to force cancel the booking. Ticket scanner will also not allow disabled bookings for check-in.


### Create New Booking

Admin can create a new booking for a customer from the front-end only. We have tried not to repeat the same functionality on the admin panel that is already available on the frontend. Instead, we just developed a strong roles and permissions system on the front-end. So that Admin, Organizer, and Customer can only do what they are supposed to do.



<a name="Taxes"></a>
## Taxes

New Taxes can be added and managed from this page and when while adding tickets to an event, these taxes can be applied. When you disable a Tax, then that tax becomes invisible from everywhere on the front-end. And the disabled tax also becomes unselectable for new tickets and unapplicable for existing tickets while checkout.

---

![Admin panel taxes](http://eventmie-pro-docs.test/images/18-admin-taxes.jpg "Admin panel taxes")

---

**Form Fields**

- Tax Title - Name of the Tax

- Rate Type
    * Percent - calculate the tax in percentage
    * Fixed - add a fixed amount

- Net-Price 
    * Including - if the tax is inclusive in the ticket price
    * Excluding - if the tax is exclusive (ticket price + tax)

- Status
    * Enabled - show the tax in taxes options on the front-end
    * Disabled - hide the tax in taxes options on the front-end


>{info} Tax can be selected for each Ticket price separately. And the selected tax will be applied to each ticket price at the time of `Checkout`.

---

>{warning} Admin can add & modify taxes from the Admin Panel. While, on the front-end, Organizers can only select those Taxes, and cannot modify them.

---

>{primary} The disable (soft-delete) feature gives you more power to control different kinds of data on your site in different conditions.

---