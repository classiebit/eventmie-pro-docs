# Data Administration

Manage all the Event's Bookings from the `Admin Panel`.

---

>{primary} Below guide is about how to manage things on Admin Panel. We'll cover the front-end guide as well, later in the docs.

---

- [Tags](#tags)
- [Events](#events)
- [Bookings](#bookings)
- [Users](#users)
- [Contacts](#contacts)


<a name="tags"></a>
## Tags

---

![Tags](/images/administration-tags.webp "Tags")

---

Tags can be Sponsors, speakers, hosts, guests, VIPs, or anything you want. You can create any number and type of them. 

- You can choose whether to choose tag as a page or just as a thumbnail on the event page.
- Tags can be added/managed from Admin Panel by Admin, as well as from front-end by Organisers.
- Every tag belongs to an Organiser and can be attached to multiple events of the Organiser.
- Disabling a tag makes it invisible from the front-end.


<a name="events"></a>
## Events

---

![events](/images/administration-events.webp "events")

---

All the Organiser's Events can be managed from the Admin Panel. 

- Admin can create an Event for an Organiser.
- Admin needs to select an Organiser while creating an Event.
- Once an event is linked to an organizer, you can't change the Organizer of the event.
- Only Admin can disable an Event.
- The disabled event gets invisible from the front-end and shows 404 if visited directly via event URL.
- Organizer can only **Unpublish** their events, while, only admin can delete events.




<a name="bookings"></a>
## Bookings

---

![bookings](/images/administration-bookings.webp "bookings")

---

![bookings-edit](/images/administration-bookings-edit.webp "bookings-edit")

---

All the Event's bookings can be managed from the Admin Panel. 

- Admin can create Booking for a customer directly, without making any online payment.
- Admin can disable a booking, and change its payment and cancellation status.
- Ticket scanner not allows disabled bookings for check-in.


---

>{primary} Admin can create a new booking and events from the front-end only. 

We tried not to repeat the same functionality on the admin panel that is already available on the frontend. 

Instead, we just developed a strong roles and permissions system on the front-end. 

So that Admin, Organizer, and Customer can only do what they are supposed to do.

---


<a name="users"></a>
## Users

---

![users](/images/administration-users.webp "users")

---

All types of users can be managed from the Admin Panel. Admin can disable any user. The disabled user won't be able to log in.

<br>

There are three prefined user groups -

1. Admin - only user group that is allowed to visit the admin panel

2. Organizers - can create and manage their events and bookings from the front-end only.

3. Customers - can book events and manage their bookings and cancellations from the front-end.

---

> {success} Admin can change the role of a user to `Admin` `Organizer` or `Customer`

---


<a name="contacts"></a>
## Contacts


All the contacts that are submitted from the front-end contact us page, can be seen on the Admin Panel.