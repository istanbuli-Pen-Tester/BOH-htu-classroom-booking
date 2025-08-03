# BOH Classroom Booking Website

**PHP/MySQL web app for HTU students to reserve classrooms for group study sessions—user auth, booking management, QA plan, design docs & final report.**

---

## Overview
BOH lets students:
- **Register & Login** via PHP sessions  
- **Book Classrooms** (room, date, time) with client- & server-side validation  
- **View & Manage Bookings** (edit/delete past reservations)  
- **Responsive UI** built with CSS Flexbox  

---

## File Structure
├── SignUp.php
├── SignIn.php
├── index.php
├── book.php
├── bookingHistory.php
├── logout.php
├── con.php
├── includes/
│ ├── db_connect.php
│ ├── header.php
│ └── footer.php
├── css/
│ └── styles.css
├── js/
│ └── validation.js
├── BOH.sql – Database schema & sample data
├── TestPlan.docx – QA test plan (25+ test cases)
├── AssignmentReport.docx – Detailed assignment report
├── DesignDocument.docx – Wireframes, sitemap & design rationale
└── README.md
## Getting Started
1. **Import** `BOH.sql` into your MySQL/MariaDB instance.  
2. **Update** credentials in `includes/con.php`.  
3. **Serve** these PHP files from your webserver root.  
4. **Browse** to `SignUp.php` to create your account.

---

## What I Learned
- Full-stack PHP & MySQL development  
- Client- & server-side form validation  
- Responsive design with Flexbox & media queries  
- QA planning & test-case execution  
- Translating design docs into a live application

---


