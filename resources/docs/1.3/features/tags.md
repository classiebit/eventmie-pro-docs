# Tags

In v1.2.0, Speakers & Sponsors are replaced by a more powerful and dynamic feature called Tags. Now you can add unlimited types of Tags (e.g speakers, sponsors, hosts, DJs, etc) and link them to an Event.

<br>

Multiple tags can belong to an event. And each tag belongs to an organizer 😴. Basically, Organizer can add tags, and link them to their events.  

<br>

```bash
                        -> Tag-1
                        -> Tag-2
Organizer-1 -> Event-1  -> Tag-3
                        -> Tag-4
                        -> Tag-5
```

<br>

Admin can manage all organizers tags from Admin Panel -> Tags. While Organizer can manage their tags from front-end.

<br>

1. On the header, hover over the account name and click on `Manage Tags`.
2. Click on &nbsp;<larecipe-button type="danger" size="sm" rounded>Add Tag</larecipe-button>
3. In the popup, fill in the details and click on &nbsp;<larecipe-button type="danger" size="sm" rounded>Save</larecipe-button>

---

![Add Tags](/images/add-tag.jpg "Add Tags")

---

|Field|Requirement|Description|
|:-|:-|
|Image|`required`|Tag image|
|Title|`required`|e.g John Doe|
|Type|`required`|e.g speaker|
|Sub-title|`optional`|e.g Entrepreneur|
|Website|`optional`|e.g example.com|
|Page|`optional`|select yes, if you want to show Tag's profile page.|

---

>{success} New tags can also be directly created and linked to an Event from the Event setup form.

---

![Link Tags](/images/link-tags.jpg "Link Tags")

---

>{danger} Organizer cannot link other organizer's tags to their events.

---

>{primary} These linked Tags can be seen on the event detail page. Just give it a try.

---

![View Tags](/images/view-tags.jpg "View Tags")

---