# Eventmie Pro & FullyLoaded Web + App v3.0.x – Changelog & What's New

- [v3.0.1 (16-Feb-2026)](#v3.0.1)
- [v3.0 (23-Sep-2025)](#v3.0)

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

