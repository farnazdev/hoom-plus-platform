# HoomPlus Building Management Platform

## Getting Started

HoomPlus is a smart residential building management platform that integrates billing, notifications, device monitoring, and support services. Connected with external platforms like Ghabzino and Bale, and dependent on Hoom smart devices, it offers a centralized dashboard for managing apartment units, sending charges, tracking bills, and requesting technical services.

Note: Access is secured via OTP-based login. Device features require active Hoom integration.
Note: With a mobile design because most users access this platform via mobile.

---

## Features

- 🏠 Register and manage apartment units
- 💳 View and track utility bills via Ghabzino
- 💬 Auto-send charge messages to Bale channels
- 🧾 Generate and manage unit-specific invoices
- 🔐 Secure OTP-based login (no password needed)
- 🔌 Sync with Hoom smart devices to view device & user info
- 🧰 Submit service forms (returns, installer requests - Hiva Co.)
- 📱 Seamless integration with the Hoom app (Bazaar & App Store)


---


## How It Works

1. User logs in with their mobile number and verifies via OTP
2. Admin registers units and assigns charges
3. Utility bills are fetched from Ghabzino and displayed
4. System sends formatted charge messages to Bale channel
5. Users with Hoom devices can see device info and authorized users
6. Support requests (like return or installer forms) are submitted to Hiwa


---


## Logs

System keeps track of:
- 📅 OTP login attempts
- 💸 Charge creation and message delivery
- 🧾 Invoice generation and updates
- 📤 Support form submissions
- 🔁 Device sync events with Hoom API


---


## Requirements

Frontend: HTML, CSS (Bootstrap 5), JavaScript (Vanilla or jQuery)
Backend: PHP 7.x+ or Node.js

Services:
Ghabzino API access
Bale bot token + channel ID
OTP provider (e.g. SMS gateway)
Hoom device API
Database: MySQL


---


## Testing

- Use a test phone number to simulate OTP login
- Register dummy apartment units
- Assign charges and verify Bale message delivery
- Connect to mock Hoom device to test sync
- Submit test support forms (e.g., request return)


---


## Demo

Address

📎 [View on my personal site](http://farnazboroumand.ir/hoomPlus)

📎 [View on Hiva Company site](https://hoshiserver.ir/hoomPlus)

Login with phone and OTP system
Note: The device information does not belong to you and it is for display purposes only.


📎 [Execute](https://drive.google.com/file/d/1T2V1Db3a_LuKWZw0_7plCQ56kvqM79tH/view?usp=sharing)


---


## Documents


[Review](https://docs.google.com/document/d/1-R0Kp-lWL_k-2z7N5YXe99F7Tg6VHmIu3iwWe059TkI/edit?usp=sharing)




---



## Hoom App


📎 [Download from bazzar](https://cafebazaar.ir/app/com.hoom)


---
