# Commission

Eventmie Pro is a flexible event hosting solution. You can use it as a Multi-organization (multi-vendor) or as a single organization website. 

<br>

In the case of the multi-vendor, you as a website owner can invite event organizers to signup and create events on your website. And that's where you'll also need a commission system, for sharing the profit.

<br>

So, here's a **semi-automatic** commission system in which you can set `commission percentage (%)` from `Admin panel -> Settings -> Commission` and then the commission on each booking will be calculated and recorded in the commission module.

<br>

At first, all ticket sales amounts will go into the website owner's account and then the owner will distribute the amount to each organizer manually and can update the `transfer` status on the commission module.

---

![Admin & Organizer Booking Commission](/images/11-commission.webp "Admin & Organizer Booking Commission")

---

> {primary} We're gonna add more functionality to this commission system in the next version.

---

> {success} You can also submit a feature request according to your needs.

---

- [Set Commission](#Set-Commission)
- [Commission Processing](#Commission-Processing)
- [Cancelled Booking <small>*(v1.3)*</small>](#Cancelled-Booking)


<a name="Set-Commission"></a>
## Set-Commission

---

![Set commision from admin panel](/images/13-commission-setting.webp "Set commision from admin panel")

---

<br>

1. Go to Admin Panel
2. Click on `Settings` on the sidebar and then click on the `Multi-vendor` tab.
3. Here, either `On` or `Off` the `multi-vendor` mode.
4. And if it's `On`, set the `Admin Commission` e.g `5`
  

<a name="Commission-Processing"></a>
## Commission Processing

---

![Commission processing](/images/12-commission-processing.webp "Commission processing")

---

After enabling the `Multi-vendor` mode and setting the `Admin Commission`. Eventmie will start recording commissions on each ticket sale. To view the commissions **organizer-wise**

1. Go to Admin Panel

2. Click on `Manage Bookings -> Commissions`.

3. Here, you'll see all the organizers `Net Bookings`, `Net Organizer Profit`, and your (admin) `Net Commission`.

4. Click on &nbsp;<larecipe-button type="warning" size="sm" rounded>View</larecipe-button> to view organizer bookings and net revenue in detail.

5. On the next page, you'll see Organizer's **Total Monthly** 
    * Net Bookings
    * Net Commission (admin commission from that booking)
    * Net Organiser Profit  
    * Month Year

6. At last, there's a checkbox `Transferred`, you can check it and click on &nbsp;<larecipe-button type="info" size="sm" rounded>Update</larecipe-button> to update the transfer status.


>{success} Doing the above, means, being a website owner, you'll be able to know to which organizer you've paid or not each month.


<a name="Cancelled-Booking"></a>
## Cancelled Booking <small>*(v1.3)*</small>

When a booking is canceled, the commission of that canceled booking get excluded automatically and won't be sum-up in the Organizer earnings.


>{primary} Make sure you turn the booking `status` to `Disabled` after making a refund.