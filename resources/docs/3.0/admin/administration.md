# Data Administration

Efficiently manage all event bookings, users, tags, and contacts from the Eventmie Pro Admin Panel. This section covers essential data administration features to help you maintain control and streamline your event management operations.

---

>{primary} The following guide explains how to manage data from the Admin Panel. Front-end management will be covered later in the documentation.

---

- [Tags](#tags)
- [Events](#events)
- [Bookings](#bookings)
- [Users](#users)
- [Contacts](#contacts)


<a name="tags"></a>
## Tags

---

![Tags](/images/v3/How-to-edit-tags-image-7.webp "Tags")

---

Tags can represent sponsors, speakers, hosts, guests, VIPs, or any custom label you need. Create and manage unlimited tags to enhance event organization and searchability.

- Choose to display tags as dedicated pages or as thumbnails on event pages.
- Tags can be added and managed by Admins from the Admin Panel, and by Organizers from the front-end.
- Each tag is associated with an Organizer and can be linked to multiple events.
- Disabling a tag hides it from the front-end, improving content control.


<a name="events"></a>
## Events

---

![events](/images/v3/How-to-edit-events-in-EP-Image-8.webp "events")

---

Manage all organizers' events directly from the Admin Panel for complete oversight and quality control.

- Admins can create events on behalf of organizers.
- When creating an event, the Admin must select an Organizer.
- Once assigned, the Organizer for an event cannot be changed.
- Only Admins can disable or delete events.
- Disabled events are hidden from the front-end and return a 404 error if accessed directly.
- Organizers can only **Unpublish** their events; only Admins can delete them.




<a name="bookings"></a>
## Bookings

---

![bookings](/images/v3/How-to-check-bookings-event-image-9.webp "bookings")

---

![bookings-edit](/images/v3/How-to-edit-bookings-image-10.webp "bookings-edit")

---

Easily manage all event bookings from the Admin Panel for seamless ticketing and customer support.

- Admins can create bookings for customers directly, bypassing online payment if needed.
- Admins can disable bookings, and update payment or cancellation status.
- The ticket scanner will not allow check-in for disabled bookings, ensuring event security.


---

>{primary} Admins can create new bookings and events from the front-end only. 

To avoid redundant features, core booking and event creation functions are available on the front-end, supported by a robust roles and permissions system. This ensures Admins, Organizers, and Customers can only access features relevant to their roles.

---


<a name="users"></a>
## Users

---

![users](/images/v3/How-to-find-users-EP-image-11.webp "users")

---

Manage all user accounts from the Admin Panel. Admins can disable users, preventing them from logging in and maintaining platform security.

<br>

There are three predefined user groups:

1. Admin – The only user group with access to the Admin Panel.
2. Organizers – Can create and manage their events and bookings from the front-end.
3. Customers – Can book events and manage their bookings and cancellations from the front-end.

---

> {success} Admins can change a user's role to `Admin`, `Organizer`, or `Customer` as needed.

---


<a name="contacts"></a>
## Contacts

All contact form submissions from the front-end "Contact Us" page are accessible in the Admin Panel for easy follow-up and customer support.