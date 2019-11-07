# Multi-Vendor

Eventmie Pro supports a single organization and multi-organization (multi-vendor, like a SaaS platform). You can toggle between these two modes with a click of a button. 

1. If you're a single organization & want to host only your events, then you can turn `Off` the `Multi-vendor` mode.

2. If you're planning to invite other organizers to sell their events on your website and you want to earn commission on each ticket, then you can turn `On` the `Multi-vendor` mode.


- [Multi-Vendor On](#Multi-Vendor-On)
- [Organizer Guidelines](#Organizer-Guidelines)
- [Multi-Vendor Off](#Multi-Vendor-Off)

---


<a name="Multi-Vendor-On"></a>
## Multi Vendor On

In the case of `multi-vendor` mode, from the front-end, after `Signup`, a user can `Become Organizer`. Let's see how!


1. After signup, on the header, hover over the account name and click on `Profile`.

2. On the profile page, click on &nbsp;<larecipe-badge type="black" rounded>Become Organizer</larecipe-badge>

3. In the popup, fill in your `Organization name/Brand name` and click on &nbsp;<larecipe-badge type="primary" rounded>Submit</larecipe-badge>

4. After submission, your `Group` will be changed from `Customer` to `Organizer`, and you can &nbsp;<larecipe-badge type="secondary" rounded>Create Event</larecipe-badge>

---


<a name="Organizer-Guidelines"></a>
## Organizer Guidelines

There are some guidelines about what an Organizer **CAN** and **CANNOT** do.


1. Organizer **CANNOT** become Customer again. The process is `irreversible`

2. Organizer **CAN** create and manage their **own** events, but **CANNOT** book any event for their **own**.

3. Organizer **CAN** book only their **own** events for any other Customer (users) of the site.

4. Organizers **CAN** manage bookings of their **own** events only.


>{success} The above actions can be performed by the Organizer from the front-end.

---

>{primary} While Admin can do anything, without any limitations.

---

<a name="Multi-Vendor-Off"></a>
## Multi Vendor Off

When the multi-vendor mode is `Off`, then on the front-end, all the options for `Become Organizer`, `Create Event` or anything else related to `multi-vendor` functionality, get hides. In that case, Admin manages everything on behalf of the Organizer.

<br>

Admin can create a separate `User` from the admin panel and assign the `User` the `Organizer - Role`. Follow these steps to do so.

1. Go to `Admin Panel -> Manage Users`.

2. Click on &nbsp;<larecipe-badge type="primary" rounded>Add New</larecipe-badge>

3. Fill in the Organizer's name, email, and password (you can fill your own).

4. Select the `Default Role` to `Organizer`.


>{info} After creating an organizer, Admin can use the organizer everywhere, whenever it asks to `Select Organizer`.