# Taxes

Easily add and manage taxes in Eventmie Pro to ensure accurate ticket pricing and compliance. Organizers can apply these taxes to their event tickets, while Admin taxes are automatically applied to all tickets by default.

---

>{primary} To manage taxes, click on `Taxes` in the `Admin Panel`.

---

- [Add New Tax](#add-new-tax)
- [About Taxes](#about-taxes)
- [Admin Taxes](#admin-taxes)


<a name="add-new-tax"></a>
## Add New Tax

Start by adding a new tax to customize how taxes are applied to event tickets. This section explains all available options for configuring a tax.

---

>{primary} Click on <larecipe-button radius="half" type="success">Add New</larecipe-button> to create a new tax.

---

![Add new tax](/images/v3/How-to-create-tax-in-EPF-image-2.webp "Add new tax")

---

**Tax Input Fields Explained**

- **Tax Title** – The name of the tax (e.g., VAT, Service Fee).
- **Rate Type**
    * **Percent** – Apply tax as a percentage of the ticket price.
    * **Fixed** – Apply a fixed amount as tax per ticket.
- **Net-Price**
    * **Excluding** – Tax is added on top of the ticket price (ticket price + tax).
    * **Including** – Tax is only displayed for transparency, not added to the ticket price.
- **Status**
    * **Enabled** – Tax is active and can be applied.
    * **Disabled** – Tax is inactive and cannot be selected or applied.
- **Admin Tax**
    * **No** – Tax can be selected by organizers for their event tickets.
    * **Yes** – Tax is automatically applied to all tickets and cannot be selected by organizers.


<a name="about-taxes"></a>
## About Taxes

1. Only Admin can add new taxes from the Admin Panel.
2. Admin can enable or disable any tax. Disabled taxes are not available during checkout and cannot be selected in the event setup form.
3. On the front-end, organizers can only select taxes created by Admin for their tickets.
4. Organizers can apply multiple taxes to each ticket for flexible pricing and compliance.


<a name="admin-taxes"></a>
## Admin Taxes

When a tax is set as an `Admin Tax`, it becomes a default tax with special properties:

1. Admin taxes are invisible to organizers.
2. Admin can create multiple Admin Taxes for different purposes (e.g., service fees, platform charges).
3. Admin taxes are automatically applied to all event tickets by default.
4. The amount collected from Admin taxes goes directly to the Admin and is not included in commission calculations or organizer earnings.
5. Admin taxes are separate charges billed to customers by the Admin (site owner).

    ---

    >{primary} Admins (site owners) can create multiple admin taxes, such as fixed service fees, that are automatically applied to all tickets for consistent revenue and compliance.

    ---


 <iframe width="75%" height="500" src="https://www.youtube.com/embed/0BE4PUqxNQc?si=IRGCVhB--QGUDLt0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
 
  ---