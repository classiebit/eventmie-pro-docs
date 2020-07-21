# Taxes

Add & manage taxes that are going to be used by Organisers to apply them on their event's tickets, and Admin taxes, that are applicable by default on all tickets.

---

>{primary} Click on `Taxes` on `Admin Panel`

---

- [Add New Tax](#add-new-tax)
- [About Taxes](#about-taxes)
- [Admin Taxes <small class="v">*v1.4*</small>](#admin-taxes)


<a name="add-new-tax"></a>
## Add New Tax

Let's first start by adding a new Tax, so that you can know all the options you can set along with a tax.

---

>{primary} Click on <larecipe-button radius="half" type="success">Add New</larecipe-button>

---

![Add new tax](http://eventmie-pro-docs.test/images/admin-add-new-tax.jpg "Add new tax")

---

**About input fields**

- Tax Title - Name of the Tax

- Rate Type
    * Percent - apply tax on percentage basis.
    * Fixed - add a fixed amount of tax.

- Net-Price 
    * Excluding - Apply tax exclusively (ticket price + tax).
    * Including - Only calculate and **SHOW** the tax, and **DO NOT** apply on ticket price.

- Status
    * Enabled - Enable tax
    * Disabled - Disable tax

- Admin Tax <small class="v">*v1.4*</small>
    * No - Selectable by organisers on their event's tickets.
    * Yes - Non-selectable by organisers, while, aplicable on all tickets by default.


<a name="about-taxes"></a>
## About Taxes

1. Only Admin can add new taxes from Admin Panel.
2. Admin can disable/enable a tax, disabled tax won't be aplicable on the tickets during checkout nor it'll be selectable from Event setup form.
3. From the front-end, organisers can ONLY SELECT the taxes for tickets, created by Admin.
4. Organisers can select multiple taxes on each ticket. <small class="v">*v1.4*</small>


<a name="admin-taxes"></a>
## Admin Taxes <small class="v">*v1.4*</small>

When Admin set a tax as `Admin Tax`, it becomes `Admin Tax`. Let's see the powers of it.

1. Admin tax is invisible to organisers. 
3. Admin can create multiple Admin Taxes.
2. It's applied by default to all Events tickets.
4. Admin tax aplicable amount will go to Admin only, and won't be a part of Commission calculation & organiser earnings.
5. It's a seperate tax that's charged by Admin to the customers.

    ---

    >{primary} Admin (site-owners) can create multiple admin taxes that are applicable on all tickets by default, like a fixed admin fee to the customers. 

    ---