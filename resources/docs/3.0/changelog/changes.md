# Eventmie Pro & FullyLoaded Web + App v3.0.x – Changelog & What's New

- [v3.0.2 (14-Oct-2026)](#v3.0.2)
- [v3.0.1 (16-Feb-2026)](#v3.0.1)
- [v3.0 (23-Sep-2025)](#v3.0)

<a name="v3.0.2"></a> 
## v3.0.2 <small>Security & Performance Update released on 14-Oct-2026</small>

---

> {primary} **v3.0.2 Security & Performance Update Released: 14-Oct-2026**  
> [Upgrade Now – See the Update Guide](../update.md)

---

## 🚀 Security & Performance Update: v3.0.2

v3.0.2 is our **most secure release ever**. We went through the whole platform, from login to checkout to the admin panel, and hardened it so you can sell tickets with complete peace of mind.

It also brings a faster, smarter AI event writer, a beautiful new homepage, sharper admin reports, and dozens of fixes requested by our customers. **Your events, your data and your revenue have never been better protected.**

---

### ✨ New Features

- **Smarter, Faster AI Event Writer (Powered by GPT-5 Mini) for Eventmie Pro & FullyLoaded:**  
  The AI event creator now runs on OpenAI's newer GPT-5 Mini model. Pick only the sections you want (description, FAQs, SEO title and more) and get polished, ready-to-publish content in seconds. Descriptions come out nicely formatted, FAQs come as a clean set of 6 questions and answers, and SEO titles fit search engine limits. If a reply is ever cut short, everything that was finished is kept, so no work is lost. **Write a complete event page in less time than it takes to make a coffee.**

- **Fair-Use AI Limits for Eventmie Pro & FullyLoaded:**  
  Each user can make up to 20 AI requests per hour (you can change this number), so your AI costs stay predictable and nobody can drain your OpenAI credits. Users get a friendly message telling them when they can try again.

- **Stunning New Homepage Sections for Eventmie Pro & FullyLoaded:**  
  The **Venues** and **Categories** sections on the homepage have been redesigned with modern cards that show how many events each venue or category has, the venue's city, and handy "Explore" and "View all" links. **A homepage that makes visitors want to start exploring.**

- **New "Get the App" Showcase for Eventmie Pro FullyLoaded:**  
  The mobile app section on the homepage now features a live ticket preview that shows one of your real upcoming events, plus highlights like *Instant tickets*, *Scan & enter* and *Secure checkout*. Store buttons open in a new tab. **Turn website visitors into app users.**

- **Powerful Event Insights for Admins for Eventmie Pro FullyLoaded:**  
  The admin **Events** page now opens with quick stat cards for Published, Draft, New (last 7 days) and Free events, so you can see the health of your marketplace at a glance.

- **Advanced Sales Reports for Eventmie Pro FullyLoaded:**  
  The admin dashboard's **Event Sales Reports** now let you:
  - View **all events together** or a single event
  - Filter by a **date range**
  - **Search instantly** by event, category, ticket, order number or customer name
  - Export exactly what you see to CSV, including all events at once
  - See check-in progress for each booking (e.g. *Yes (2/3)*)

  **Find any number you need in seconds.**

- **Built-in Security Health Check for Eventmie Pro FullyLoaded:**  
  A new one-click security scan checks your server for suspicious files, exposed secrets and other warning signs, and tells you exactly how to fix anything it finds. **Like an antivirus for your event website.**

---

### 🛡️ Security Enhancements

We've strengthened Eventmie with **enterprise-level security** across the whole platform:

- **Safer File Uploads for Eventmie Pro & FullyLoaded:**  
  Every uploaded file (event images, venue photos, avatars, seating charts, editor media and more) is now checked for what it really contains, not just its name. Only safe images, videos and PDFs are accepted. Modern **WebP** images are now supported too.

- **Protection Against Malicious Content for Eventmie Pro & FullyLoaded:**  
  Event descriptions, FAQs, blogs, pages, venue and tag descriptions are automatically cleaned of harmful code. Your formatting, tables, colours and YouTube/Vimeo videos are kept.

- **Brute-Force Login Protection for Eventmie Pro & FullyLoaded:**  
  Login, registration, password reset, contact form, admin login, OTP and app sign-in are now protected against bots and repeated guessing attempts. Each form has its own limit, so genuine users are never locked out of one form because of another.

- **Locked-Down Installer for Eventmie Pro & FullyLoaded:**  
  Once your website is installed, the installer and update screens are closed for good, so nobody can tamper with your setup. Fresh installations now get a **strong random admin password** instead of a default one.

- **Tighter Admin Panel for Eventmie Pro & FullyLoaded:**  
  Advanced developer tools in the admin panel are now hidden on live websites. Admins can still fully edit the **header and footer menus**.

- **Stricter Access Controls for Eventmie Pro FullyLoaded:**  
  Organisers can only see and manage **their own** data: their own sales reports, sub-organisers, tickets and complimentary bookings. Commissions and failed payment reports are now admin-only.

- **Secure Email Sending for Eventmie Pro & FullyLoaded:**  
  Emails are protected against tampering, and sensitive information such as passwords and keys is never written to error reports.

- **Hardened Server & Payment Files for Eventmie Pro FullyLoaded:**  
  Ready-made security rules for both Apache and Nginx servers are included, and sensitive payment gateway keys (BitPay) are moved to a private, protected location automatically.

- **Safer Sessions & Mobile App API for Eventmie Pro FullyLoaded:**  
  Session cookies are encrypted and secured by default, and the mobile app's login, sign-up and OTP endpoints now have their own protection limits.

---

### 🛠️ Improvements

- **Better Booking Control for Organisers & Admins for Eventmie Pro & FullyLoaded:**  
  Organisers and admins can now edit or cancel bookings at any time, even after the event or inside the cancellation cut-off window. Cancellation deadlines still apply to customers.

- **Clearer Event Timings in Booking Emails for Eventmie Pro & FullyLoaded:**  
  Booking confirmation emails now show the event's start and end time clearly, in your preferred 12-hour or 24-hour format. In FullyLoaded the times are shown in the attendee's timezone, with the timezone name.

- **Checkout Timer Next to the Checkout Button for Eventmie Pro FullyLoaded:**  
  The checkout countdown now also appears right above the Checkout button, which nudges buyers to complete their purchase. **More completed checkouts, fewer abandoned carts.**

- **Smoother Guest Checkout for Returning Customers for Eventmie Pro FullyLoaded:**  
  Returning guests who already have an account can now verify by OTP and continue checkout without getting stuck. Clear messages are shown when an email is already in use.

- **Perfect Dark Mode on Every Device for Eventmie Pro & FullyLoaded:**  
  Dark mode now looks great everywhere, including Windows, where dropdowns, scrollbars and date pickers now turn dark as well. Payment logos and the account-type selector on the sign-up page are easier to see.

- **Larger Payment Logos at Checkout for Eventmie Pro FullyLoaded:**  
  Payment gateway logos are slightly bigger and stay clearly visible in dark mode, which builds buyer trust at the moment that counts.

- **Wider Language Support for Eventmie Pro & FullyLoaded:**  
  Languages with regional or 3-letter codes (such as Brazilian Portuguese, Simplified Chinese and Filipino) now work perfectly when switching languages.

- **Venue Images Required in Admin for Eventmie Pro & FullyLoaded:**  
  Venues created from the admin panel now require images, just like the front-end, so every venue page looks complete.

- **Faster, Leaner Website for Eventmie Pro FullyLoaded:**  
  Stylesheets have been cleaned up and all core libraries updated to their latest stable versions for better speed, stability and PHP 8.4 compatibility.

---

### 🐞 Bug Fixes

- **Forgot / Reset Password for Eventmie Pro & FullyLoaded:**  
  Password reset now works reliably on all installations.

- **SMTP Email Password in Settings for Eventmie Pro & FullyLoaded:**  
  Fixed an issue where saving the email (SMTP) password from Admin → Settings stopped emails from being sent.

- **Login on Non-HTTPS Websites for Eventmie Pro & FullyLoaded:**  
  Fixed login issues on websites not yet running on HTTPS.

- **Redirect After Login & Registration for Eventmie Pro & FullyLoaded:**  
  Users are now taken to the right page after logging in or signing up, instead of a blank page.

- **Error & Access Pages for Eventmie Pro & FullyLoaded:**  
  The "Page not found" page now works correctly. A clear "You're not authorized to access this page!" message is shown when needed, and visitors are redirected to the homepage instead of a broken page.

- **Bookings Never Fail Because of Email Issues for Eventmie Pro & FullyLoaded:**  
  If a booking email can't be sent, the booking still completes successfully.

- **Ticket Download for Deleted Events for Eventmie Pro & FullyLoaded:**  
  Downloading a ticket for a deleted event now shows a proper message instead of an error.

- **Admin Media Manager for Eventmie Pro & FullyLoaded:**  
  Moving, renaming, cropping and deleting files now works smoothly, and uploads no longer fail on some servers.

- **Social Login & Organiser-Created Users for Eventmie Pro & FullyLoaded:**  
  Users who sign up with social login, or are created by an organiser, are now correctly marked as verified.

- **Customer Cancellation Window for Eventmie Pro & FullyLoaded:**  
  Fixed how the time left before the cancellation deadline is calculated for customers.

- **POS Access Messages for Eventmie Pro & FullyLoaded:**  
  Users without POS access are now redirected properly instead of seeing raw data.

- **Tickets Attached to Free Booking Emails for Eventmie Pro FullyLoaded:**  
  Free bookings now include the ticket and invoice PDFs in the confirmation email.

- **Logo in Emails for Eventmie Pro FullyLoaded:**  
  Your website logo now shows correctly in all emails, including when files are stored on Amazon S3.

- **Accurate Commission & Promo Code Totals for Eventmie Pro FullyLoaded:**  
  Organiser earnings and admin commission now always add up exactly to what the customer paid, and promo code discounts can never be more than the ticket price.

- **Coming Soon Event Page for Eventmie Pro FullyLoaded:**  
  Coming Soon events now show their full description, performers, location map and share buttons. Only the ticket section stays hidden until sales open.

- **Venue Address Order for Eventmie Pro FullyLoaded:**  
  Venue addresses on event pages now appear in the natural order: address, state, city, zip code, country.

- **Venue Pages Without Map Location for Eventmie Pro FullyLoaded:**  
  Venue pages without map coordinates now load without errors.

- **Mobile App Sign-Up for Eventmie Pro FullyLoaded:**  
  New users who sign up from the mobile app are now always created as customers.

- **Failed Bookings Search for Eventmie Pro FullyLoaded:**  
  The search box on the Failed Bookings page works again.

- **Password Field in Organiser's Create User Form for Eventmie Pro FullyLoaded:**  
  The password show/hide toggle now displays correctly.

- **Event Video Links, Promo Code List & Homepage Banners for Eventmie Pro FullyLoaded:**  
  Fixed errors when adding video links to events, when an organiser has no promo codes yet, and when a homepage banner has no image.

- **Organiser Profile Page on Mobile for Eventmie Pro FullyLoaded:**  
  The organisation name and social links now line up properly on mobile screens.

---

> {warning} **Good to know before you upgrade**  
> - The AI writer can be tuned from the `.env` file using `OPENAI_MODEL` and `OPENAI_MAX_REQUESTS_PER_HOUR`.  
> - Please follow the [Update Guide](../update.md) carefully, and take a full backup of your website and database first.

---

> {success} **Ready for the most secure Eventmie ever?**  
> [See the Update Guide](../update.md) or [Contact Support info@classiebit.com](mailto:info@classiebit.com) for a seamless upgrade.

---

<a name="v3.0.1"></a> 
## v3.0.1 <small>Enhanced Features released on 16-Feb-2026</small>

---

> {primary} **v3.0.1 Enhanced Features Released: 16-Feb-2026**  

---

## 🚀 Enhanced Features Release: v3.0.1

v3.0.1 is a minor patch release. It includes a few minor but important bug fixes reported by clients. 
Besides, there are also a few improvements & optimizations.

---

### ✨ New Features

- **Google Recaptcha for Eventmie Pro & FullyLoaded with latest version:**  
  Google Recaptcha is now updated to the latest version.

- **Enhanced Booking Cancellation Logic for Eventmie Pro & FullyLoaded:**  
  Improved cancellation policy enforcement to accurately use event start date and time for eligibility checks. This ensures precise calculation of remaining time before the cutoff deadline, enabling organisers to set stricter or more flexible cancellation windows based on event timing.

- **Conditional All-in-One Ticket PDF Attachment for Eventmie Pro FullyLoaded:**  
  The consolidated all-in-one ticket PDF is now intelligently attached only when a booking contains multiple tickets. Single-ticket bookings will receive individual ticket PDFs only, reducing email attachment size and improving user experience.

- **Smart Guest Checkout Auto-Fill for Eventmie Pro FullyLoaded:**  
  Guest checkout forms now feature intelligent auto-population. If attendee details are entered first, the guest checkout form automatically fills from this information. Conversely, if the guest checkout form is completed first, the attendee details auto-populate accordingly, eliminating duplicate data entry.

- **Check-in Timestamp Data for Complimentary Bookings for Eventmie Pro FullyLoaded:**  
  Complimentary ticket bookings now include check-in date and time data in CSV exports and analytics graphs, providing complete visibility into check-in patterns and attendance metrics for complimentary attendees.

- **Complimentary Ticket Check-in Analytics Graph for Eventmie Pro FullyLoaded:**  
  New dedicated analytics graph on the organiser dashboard tracks complimentary ticket check-ins separately from regular ticket check-ins, enabling organisers to analyze complimentary attendance patterns and make data-driven decisions.

- **Direct Organiser Signup in Multi-Vendor Mode for Eventmie Pro & FullyLoaded:**  
  Multi-vendor instances now support direct signup as an organiser during account creation. Users can register directly as event organisers without requiring separate admin approval, streamlining the onboarding process and accelerating vendor growth.

---

### Improvements

- **Event Update Email Notifications for Eventmie Pro & FullyLoaded:**  
  Event update notification emails are now sent only after an event is published and the organiser makes subsequent updates to event information. This prevents unnecessary notifications for unpublished events and ensures attendees only receive updates about live events.

- **Promo Code Application in Manage Bookings for Eventmie Pro & FullyLoaded:**  
  Organisers can now directly utilize and apply promo codes from the manage bookings section, streamlining the discount application process and improving booking management efficiency.

- **Password Hide/Show Toggle for Eventmie Pro & FullyLoaded:**  
  A password visibility toggle has been added across all password input fields throughout the platform, allowing users to securely toggle between hidden and visible password states for improved usability.

---

### Bug Fixes

- **Event Card Organiser Image for Eventmie Pro & FullyLoaded:**  
  Fixed incorrect profile avatar display; now correctly shows Organisation Logo.

- **Admin Navigation Text for Eventmie Pro FullyLoaded:**  
  Corrected "Return to Admin" text display for admin, organiser, customer, and other user roles during Impersonation.

- **Checkout Modal Display for Eventmie Pro & FullyLoaded:**  
  Fixed login/sign-up modal positioning on Details page checkout to open in center.

- **Offline Payment Email for Eventmie Pro & FullyLoaded:**  
  Resolved issue where tickets were sent via email even when offline payment status was unpaid.

 - **Dark/Light Mode Consistency for Eventmie Pro & FullyLoaded:**  
  Fixed dark and light mode display issues across multiple device types and screen sizes, ensuring consistent theme application and proper element visibility throughout the platform.



---

> {success} **v3.0 Stable Release: 23-Sep-2025**  
> [Upgrade Now – See the Update Guide](../update.md)

---

## 🚀 Major Release: v3.0

v3.0 is our biggest, most ambitious update ever—designed to empower event organizers, agencies, and businesses with next-generation tools, a modern user experience, and enterprise-grade scalability. This release brings powerful new features, a fresh look, and dozens of improvements based on your feedback.

---

### ✨ New Features

- **Create Events with AI (ChatGPT Integration) for Eventmie Pro & FullyLoaded:**  
  Effortlessly generate event details, descriptions, and marketing copy using built-in AI. [Learn more](../features/artificial-intelligence/ai-event-creation.md)

- **Upgraded to Laravel 11 & PHP 8.3 for Eventmie Pro & FullyLoaded:**  
  Enjoy the latest security, speed, and compatibility.

- **Apps are updated to React Native version 0.77:**  
  It's the latest stable version of React Native with new architecture. This speeds up the app performance and stability by 5x. 
  The App now supports iOS 18, Android 16 and above.

- **Modern UI/UX for Eventmie Pro & FullyLoaded Web + Apps:**  
  A completely redesigned, responsive theme for 2025 and beyond.

- **Coming Soon Event for FullyLoaded Web + Apps:**  
  Launch hype‑ready countdowns, waitlists, and pre‑sale alerts to capture demand and convert fans the moment tickets go live.  

- **Dark, Light & System Themes for Eventmie Pro FullyLoaded Web + Apps:**  
  Instantly switch between themes or use system default, with admin default options.

- **Hands-Free Ticket Scanner for Eventmie Pro FullyLoaded Web + Apps:**  
  Advanced QR & laser scanner support (Zebra, Honeywell, etc.), multi-day check-ins, and seasonal event support.    

- **User Impersonation for Eventmie Pro FullyLoaded:**  
  Admins can log in as any user for support and troubleshooting.

- **Minimal Ticket PDF Design for Eventmie Pro & FullyLoaded:**  
  New industry-standard ticket sizes for print and digital.

- **Stripe Connect Marketplace for Eventmie Pro FullyLoaded:**  
  Multi-currency, multi-method, and region-aware payments.

- **Venue Pages with Linked Events for Eventmie Pro FullyLoaded:**  
  Venues now showcase all related events.

- **MercadoPago Payment Gateway for Eventmie Pro FullyLoaded:**  
  Expanded payment options for Latin America.

- **Flutterwave Payment Gateway for Eventmie Pro FullyLoaded:**  
  Expanded payment options across Africa with local cards, bank transfers, and mobile money via Flutterwave.  

- **POS: Create New Attendees at Checkout for Eventmie Pro & FullyLoaded:**  
  Streamline on-site sales and attendee management.

- **POS & Scanner now available in Eventmie Pro**  
  POS & Scanner feature is now available in Eventmie Pro as well.

- **New Integrated Checkout Flow for Eventmie Pro & FullyLoaded:**  
  Checkout is now integrated into the event page, for a quick & smooth checkout experience.

- **Two-Way Organiser & Customer Emailing for Eventmie Pro FullyLoaded:**  
  Secure, direct communication for better engagement.

- **Ticket Resend for Eventmie Pro FullyLoaded:**  
  Admins and organisers can resend tickets instantly.

- **Organiser Promo Codes for Eventmie Pro FullyLoaded:**  
  Organisers can create and manage their own promo codes from their Dashboard.

- **Consolidated Ticket PDF for Eventmie Pro FullyLoaded:**  
  Multiple tickets in a single PDF for convenience.

- **Complimentary Tickets with Distributor Tag for Eventmie Pro FullyLoaded:**  
  Track and brand complimentary tickets.

- **Early Check-in for Eventmie Pro FullyLoaded:**  
  Organisers can allow attendees to check in before event start.

---

### 🛠️ Improvements

- **Rich Text Editor for Eventmie Pro & FullyLoaded:**  
  Event and venue descriptions now support image uploads.

- **Donation/Fundraiser Events for Eventmie Pro FullyLoaded:**  
  Set minimum ticket prices and suggest donation amounts.

- **Event Filters for Eventmie Pro & FullyLoaded Web + Apps:**  
  Enhanced filtering on the Browse Events page.

- **New Organiser Page URLs for Eventmie Pro FullyLoaded:**  
  Improved SEO and navigation.

---

### 🐞 Bug Fixes

- **Custom Page Builder for Eventmie Pro & FullyLoaded:**  
  Increased body size for more content flexibility.

- **Venue SEO for Eventmie Pro & FullyLoaded:**  
  Resolved SEO issues for better discoverability.

- **Guest Checkout for Eventmie Pro FullyLoaded:**  
  Phone number now optional for guest users.

---

> {success} **Ready to experience the new Eventmie Pro & FullyLoaded?**  
> [See the Update Guide](../update.md) or [Contact Support info@classiebit.com](mailto:info@classiebit.com) for a seamless upgrade.

