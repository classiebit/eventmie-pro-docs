# Commissions

Eventmie Pro is a flexible event hosting solution. You can use it as a Multi-organization (multi-vendor) or as a single organization website. 

<br>

In the case of the multi-vendor, you as a website owner can invite event organizers to signup and create events on your website. And that's where you'll also need a commission system, for sharing the profit.

<br>

So, here's a **semi-automatic** commission system in which you can set `commission percentage (%)` from Admin Panel, and then commissions on each booking will be calculated automatically.

<br>

At first, all bookings credit goes to the website owner's (Admin) bank account and then the owner distributes the organizer's payout manually and can update the `Payout Transfer` status on the Admin Panel.

<br>

Eventmie Pro makes the payout transfer system as smooth as cheese 🧀. Follow the below guidelines, and you'll become master in it, in no time. 


- [Set Commission](#set-commission)
- [Commission Processing & Payouts](#commission-processing-payouts)
- [Commission Calculations](#commission-calculations)
- [Organiser Bank Details](#organiser-bank-details)
- [Cancelled Booking](#cancelled-booking)
- [Multi-Vendor On](#multi-vendor-on)
- [Become Organiser](#become-organiser)
- [Multi-Vendor Off](#multi-vendor-off)





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


<a name="commission-calculations"></a>
## Commission Calculations

This is how, the Admin Commission and Organizer earnings are calculated behind the scenes. Let us explain from an example.

<br>

|Payables|Rates|Calculations|Total|
|:-|:-|:-|:-|
|Ticket Price (TP)|$100|$100|$100|
|Organizer Tax (OT)|5% + 5%|(5% of $100) + (5% of $100)|$10|
|Admin Commission (AC)|5%|5% of ($100 + $10)|$5.5|
|Admin Tax (AT)|3% + 3%|(3% of $100) + (3% of $100)|$6|

---

>{primary} Admin Commission = 5% of (Ticket Price + Organizer Tax)

---

>{primary} Admin Tax won't be a part of Organizer earning. It'll completely go to Admin account.

---

|Total Customer Paid|Total Organizer Earning|Total Admin Commission|
|:-|:-|:-|
|TP + OT + AC + AT|(TP + OT) - AC|AC + AT|
|$100 + $10 + $6 + $5 = $121|$110 - $5.5 = 104.5|$5.5 + $6 = $11.5|



<a name="organiser-bank-details"></a>
## Organiser Bank Details

The organizer can add their bank account details from their profile page on the front-end.

---

![Organizer bank details](http://eventmie-pro-docs.test/images/commissions-organizer-bank-details.jpg "Organizer bank details")

---

Admin can find these details on `Admin Panel -> Users -> View`, for transferring the payouts to the organizer's bank account.

---

![Admin Panel bank details](http://eventmie-pro-docs.test/images/commissions-bank-details.jpg "Admin Panel bank details")

---

<a name="cancelled-booking"></a>
## Cancelled Booking

When a booking is canceled, the commission of that canceled booking get excluded automatically and won't be sum-up in the Organizer earnings.

---

>{primary} Make sure you turn the booking `status` to `Disabled` after making a refund.

---



<a name="multi-vendor-on"></a>
## Multi Vendor On

Eventmie Pro supports a single organization and multi-organization (multi-vendor, like a SaaS platform). You can toggle between these two modes with a click of a button from the `Admin Panel -> Settings -> Multi-vendor` tab.

<br>

In the case of `multi-vendor` mode `on`. A user, after `Signup` as a customer, can `Become Organizer`.

1. After signup as `customer`, go to `Profile`.

2. Click on &nbsp;<larecipe-button radius="half" type="black">Become Organizer</larecipe-button>

3. In the popup, fill in your `Organization name/Brand name` and click on &nbsp;<larecipe-button radius="half" type="info">Submit</larecipe-button>

4. After submission, the user's `Group` will be changed from `Customer` to `Organizer`.


<a name="become-organiser"></a>
## Become Organiser

There are some set of rules about what an Organizer **CAN** and **CANNOT** do.

1. Organizer **CANNOT** become Customer again. The process is `irreversible`.

2. Organizer **CAN** create and manage their **own** events, but **CANNOT** book any event for their **own**.

3. Organizer **CAN** book only their **own** events for any other Customer (users) of the site.

4. Organizer **CAN** book event for a customer **ONLY IF**, the organizer knows the customer email.

4. Organizers **CAN** manage bookings of their **own** events only.

    ---

    >{success} The above actions can be performed by the Organizer from the front-end.

    ---

    >{primary} While Admin can do anything, without any limitations.

    ---


<a name="multi-vendor-off"></a>
## Multi Vendor Off

When the multi-vendor mode is `Off`, then on the front-end, all the options for `Become Organizer`, `Create Event` or anything else related to `multi-vendor` functionality, get invisible. In that case, Admin manages everything on behalf of an Organizer.

<br>

Admin can create a separate `User` from the admin panel and assign the `User` the `Organizer - Role`. Follow these steps to do so.

1. Go to `Admin Panel -> Manage Users`.

2. Click on &nbsp;<larecipe-badge type="primary" rounded>Add New</larecipe-badge>

3. Fill in the Organizer's name, email, and password (you can fill your own).

4. Select the `Default Role` to `Organizer`.

    ---

    >{primary} After creating an organizer, Admin can use the organizer everywhere, whenever it asks to `Select Organizer`.

    ---