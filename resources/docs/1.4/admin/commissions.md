# Commissions

Eventmie Pro is a flexible event hosting solution. You can use it as a Multi-organization (multi-vendor) or as a single organization website. 

<br>

In the case of the multi-vendor, you as a website owner can invite event organizers to signup and create events on your website. And that's where you'll also need a commission system, for sharing the profit.

<br>

So, here's a **semi-automatic** commission system in which you can set `commission percentage (%)` from `Admin panel -> Settings -> Commission` and then the commission on each booking will be calculated and recorded on `Admin Panel -> Commissions` page.

<br>

At first, all ticket sales amounts will go into the website owner's account and then the owner will distribute the amount to each organizer manually and can update the `transfer` status on the `Admin Panel -> Commissions -> View`.

<br>

#### Watch out the below steps from setting commission to transferring organizer payout.


- [Set Commission](#set-commission)
- [Commission Processing & Payouts](#commission-processing-payouts)
- [Cancelled Booking](#cancelled-booking)


<a name="set-commission"></a>
## Set-Commission

---

![Set commision from admin panel](http://eventmie-pro-docs.test/images/commissions-setting.jpg "Set commision from admin panel")

---

<br>

1. Go to `Admin Panel -> Settings -> Multi-vendor` tab.
2. Set the `Admin Commission` e.g `5` (in percent).

---

>{primary} Commissions are recorded only if, the `Multi-vendor mode On` & `Admin Commission Set`.

---
  

<a name="commission-processing-payouts"></a>
## Commission Processing & Payouts

After setting the `Admin Commission`. Eventmie Pro will start recording commissions on each ticket sale. 

1. Go to `Admin Panel -> Commissions`.
2. Click on &nbsp;<larecipe-button type="info" size="sm" rounded>View</larecipe-button>

    ---

    ![Admin & Organizer Booking Commission](http://eventmie-pro-docs.test/images/commissions.jpg "Admin & Organizer Booking Commission")

    ---

3. You can see the Organizer's every Event monthly `Total Bookings`, `Organizer earnings`, and `Admin Commission`.

4. Suppose, you've transferred an Organiser's payout for a particular month.

5. Check `Transferred` checkbox on that particular row, and click on &nbsp;<larecipe-button type="info" size="sm" rounded>Update</larecipe-button> to update the transfer status.

    ---

    ![Commission processing](http://eventmie-pro-docs.test/images/commissions-manage.jpg "Commission processing")

    ---

    >{success} Doing the above, means, being a website owner, you can keep a record of the organizer's payouts transfers.

    ---


<a name="cancelled-booking"></a>
## Cancelled Booking

When a booking is canceled, the commission of that canceled booking get excluded automatically and won't be sum-up in the Organizer earnings.

---

>{primary} Make sure you turn the booking `status` to `Disabled` after making a refund.

---