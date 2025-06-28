<!--
Meta Description: Learn how to set up POS, ticket scanner, and event manager roles in Eventmie Pro FullyLoaded. Step-by-step guide for creating sub-organizers, managing event access, ticket sales, and bookings in your Laravel event management platform.
Meta Keywords: POS, ticket scanner, event manager, sub-organizer, Eventmie Pro FullyLoaded, Laravel event access, ticket sales, booking management, event staff, event management, Classiebit
-->
> {success} This Feature only available in [Eventmie Pro FullyLoaded](https://classiebit.com/eventmie-pro-fullyloaded)

<br>

# POS, Ticket Scanner & Event Manager Roles in Eventmie Pro FullyLoaded

Create separate user groups with limited access—POS (Point of Sale), Scanner, and Manager (sub-organizers)—in your Eventmie Pro FullyLoaded Laravel event management platform. Empower your event team to manage bookings, check-ins, ticket sales, and event operations efficiently and securely.

POS, Scanner, and Manager are all sub-organizer roles with specific permissions. Organizers can create and assign sub-organizers to specific events, giving them access only to the events they manage. Each organizer can have their own sub-organizers for streamlined event operations.

The Manager role has more privileges than POS and Scanner. Managers can perform all organizer actions on assigned events.

---

![3-create-suborganizer](/images/v3/Pos-scanner-manager-image-25.webp "3-create-suborganizer")

---

-   [Create Sub-organizers](#Create-Sub-organizers)
-   [POS](#POS)
-   [Scanner](#Scanner)
-   [Manager](#Manager)

<a name="Create-Sub-organizers"></a>

## How to Create Sub-organizers (POS, Scanner, Manager)

**As Admin:**

1. Go to Admin Panel -> Events and click the More button.

    ***

    ![1-admin-manage-events](/images/v2/EventmieProFullyLoadedV2.0/19.1-admin-manage-events.webp "1-admin-manage-events")

    ***

2. Select the Organizer from the **Organizer Events** dropdown for whom you want to create sub-organizers.

    ***

    ![2-admin-create-suborganizer](/images/v3/Add-sub-organiser-image-26.webp "2-admin-create-suborganizer")

    ***

3. Click the **Create Sub-organizer** button.

    ***

    ![3-create-suborganizer](/images/v3/Pos-scanner-manager-image-25.webp "3-create-suborganizer")

    ***

4. In the popup:
    - Select a Role: POS, Scanner, or Manager
    - Enter name, email, password, and click Save
5. The new sub-organizer receives a registration email. Provide them the password, or they can reset it via Forgot Password.

<br>

**As Organizer:**

1. Go to Manage Events and click **Create Sub-Organizer**. Follow the same steps as above.

    ***

    ![4-organizer-manager-events](/images/v3/Add-sub-organiser-image-27.webp "4-organizer-manager-events")

    ***

2. Manage sub-organizers from the Manage Sub-Organizers page.

    ***

    ![10-manage-suborganizers](/images/v3/Create-sub-organiser-dashboard-image-28.webp "10-manage-suborganizers")

    ***

<a name="POS"></a>

## POS (Point of Sale) Role: Sell Tickets at the Event

POS users can make bookings and sell tickets on behalf of the Organizer at the event entrance. They can manage only the bookings they create, including changing payment status, enabling/disabling bookings, and processing cancellations or refunds.

---

![5-pos](/images/v3/Sub-organiser-details-image-29.webp "5-pos")

---

**Assigning POS to an Event:**

1. Create a Sub-Organizer with the POS role.
2. Click **Add Sub-organizers** on the event you want to assign them to.

    ***

    ![8-assign-suborganizer](/images/v3/Add-sub-organiser-image-27.webp "8-assign-suborganizer")

    ***

3. In the popup, select POS and click Save.

    ***

    ![9-assign-suborganizer](/images/v3/Add-sub-organiser-image-26.webp "9-assign-suborganizer")

    ***

You can assign multiple POS users to each event. POS can only book tickets for events they are assigned to.

**POS Booking Management:**

1. POS logs in with their email and password.
2. POS sees only the events they are assigned to.
3. POS can make bookings for customers by entering the customer's email.
4. POS can select the Offline payment method and collect payment offline or via other means.

    ***

    ![12-pos-make-booking](/images/v3/POS-booking-ticket-image-31.webp "12-pos-make-booking")

    ***

5. POS can manage all their bookings from the **POS Bookings** page.

    ***

    ![13-pos-manage-bookings](/images/v3/Pos-bookings-image-30.webp "13-pos-manage-bookings")

    ***

6. POS can also manage booking cancellations and refunds.

    ***

    ![14-pos-update-booking](/images/v3/POS-booking-status-image-31.webp "14-pos-update-booking")

    ***

<a name="Scanner"></a>

## Ticket Scanner Role: Scan & Validate Event Tickets

Scanners can scan tickets at the event entrance and view bookings for tickets they have scanned, helping manage event access and reporting.

---

![6-scanner](/images/v2/EventmieProFullyLoadedV2.0/6-scanner.webp "6-scanner")

---

**Assigning Scanner to an Event:**

1. Create a Sub-Organizer with the Scanner role.
2. Click **Add Sub-organizers** on the event you want to assign them to.
3. In the popup, select Scanner and click Save.

You can assign multiple Scanners to each event. Scanners can only scan tickets for events they are assigned to.

**Scanner Booking Management:**

1. Scanner logs in with their email and password.
2. Scanner can only scan tickets for assigned events.
3. Scanner can view all bookings they have scanned from the **Scanner Bookings** page.

---

![15-scanner-view-booknigs](/images/v3/Scanner-bookings-image-32.webp "15-scanner-view-booknigs")

---

<a name="Manager"></a>

## Event Manager Role: Full Access Sub-Organizer

Managers have full access to all organizer features for assigned events. This unlimited access account allows managers to handle every aspect of event management on behalf of the organizer.

---

![7-manager](/images/v2/EventmieProFullyLoadedV2.0/7-manager.webp "7-manager")

---

Organizers only need to create a Sub-Organizer with the Manager role—no need to assign them to specific events.

Managers can log in with their email and password and manage everything for the organizer.

---

![16-manager-manage-everything](/images/v3/POS-manager-events-image-34.webp "16-manager-manage-everything")

---
