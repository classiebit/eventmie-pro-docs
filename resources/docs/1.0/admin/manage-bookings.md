# Manage Bookings

Here you can manage all the bookings related information.


---

- [Bookings](#Bookings)
- [Commissions](#Commissions)
- [Taxes](#Taxes)


<a name="Bookings"></a>
## Bookings

As an Admin you can see all the bookings from the customers on this page.

### Create New Booking

You can create new booking for a customer from the front-end only. We have tried to not to repeat the same functionality on the admin panel that is already available on the frontend. Instead, we just developed a strong roles and permisions system on the front-end. So that Admin, Organiser and customer can only do what they are supposed to do.

### Edit Booking

You can only update an existing booking cancellation status and booking status. 

- Cancellation status is for tracking the cancellation progress if it's `pending`, `approved` or the booking about has been `refunded` to the customer.
- Status is to force enable or disable the booking.





<a name="Commissions"></a>
## Commissions

You can manage your commission and organisers earnings from this page. 



<a name="Taxes"></a>
## Taxes

You can add taxes from this page and when adding tickets to an event, you can choose from these taxes.

**Fields**

- Tax Title - Name of the Taxe
- Rate Type
    - Percent - calculate the tax in percentage
    - Fixed - add a fixed amount
- Net Price 
    - Including - if the tax is inclusive in the ticket price
    - Excluding - if the tax is exclusive (ticket price + tax)
- Status
    - Enabled - show the tax in taxes options on the front-end
    - Disabled - hide the tax in taxes options on the front-end


>{info} Tax can be selected for each Ticket price seperately. And the selected tax will be applied on each ticket price at the time of `Checkout`.

---

>{warning} Only Admin can add & modify taxes from the Admin Panel. On the front-end, organisers can only select a Tax that is added by the admin, and cannot add or modify a tax.