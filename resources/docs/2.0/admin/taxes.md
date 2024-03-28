# Taxes

Add & manage taxes that are going to be used by Organisers to apply them on their event's tickets, and Admin taxes, that are applicable by default on all tickets.

---

>{primary} Click on `Taxes` on `Admin Panel`

---

- [Add New Tax](#add-new-tax)
- [About Taxes](#about-taxes)
- [Admin Taxes](#admin-taxes)


<a name="add-new-tax"></a>
## Add New Tax

Let's first start by adding a new Tax, so that you can know all the options you can set along with a tax.

---

>{primary} Click on <larecipe-button radius="half" type="success">Add New</larecipe-button>

---

![Add new tax](/images/admin-add-new-tax.webp "Add new tax")

---

**About input fields**

- Tax Title - Name of the Tax

- Rate Type
    * Percent - apply tax on a percentage basis.
    * Fixed - add a fixed amount of tax.

- Net-Price 
    * Excluding - Apply tax exclusively (ticket price + tax).
    * Including - Only calculate and **SHOW** the tax, and **DO NOT** apply on ticket price.

- Status
    * Enabled - Enable tax
    * Disabled - Disable tax

- Admin Tax
    * No - Selectable by organisers on their event's tickets.
    * Yes - Non-selectable by organizers, while, applicable on all tickets by default.


<a name="about-taxes"></a>
## About Taxes

1. Only Admin can add new taxes from Admin Panel.
2. Admin can disable/enable a tax, the disabled tax won't be applicable on the tickets during checkout nor it'll be selectable from Event setup form.
3. From the front-end, organizers can ONLY SELECT the taxes for tickets, created by Admin.
4. Organizers can select multiple taxes on each ticket.


<a name="admin-taxes"></a>
## Admin Taxes

When Admin sets a tax as `Admin Tax`, it becomes `Admin Tax`. Let's see the powers of it.

1. Admin tax is invisible to organizers. 
3. Admin can create multiple Admin Taxes.
2. It's applied by default to all Events tickets.
4. Admin tax applicable amount will go to Admin only, and won't be a part of Commission calculation & organizer earnings.
5. It's a separate tax that's charged by Admin to the customers.

    ---

    >{primary} Admin (site-owners) can create multiple admin taxes that are applicable on all tickets by default, like a fixed admin fee to the customers. 

    ---


 <iframe width="75%" height="500" src="https://www.youtube.com/embed/-5eLyMiIBVM?si=hVcB-fTOgQtHf80t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
 
  ---