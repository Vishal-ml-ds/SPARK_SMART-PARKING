# SPARK: A Full-Stack IoT Smart Parking System

## 📖 Project Overview
[cite_start]This is a comprehensive IoT-based smart parking system developed for our final year BCA project at Don Bosco College, Panjim, affiliated with Goa University[cite: 1, 3, 6, 22, 23]. The system integrates a full-stack web application with physical hardware to automate and manage the entire parking lifecycle, from vehicle entry to payment. [cite_start]The primary goal is to reduce traffic congestion and time spent searching for parking by providing real-time slot availability[cite: 59, 71, 73].

## ✨ My Role & Contributions
This was a collaborative team project. My specific responsibilities included:

*(This is the most important section for you to fill out. Be specific. For example:)*
* *Developing the backend logic using PHP for user authentication, session management, and database interactions.*
* *Designing and implementing the MySQL database schema, including tables for users, parking areas, and reservations.*
* *Building the front-end for the User Dashboard and Wallet features.*
* *Assisting with the integration of the hardware components and the web application.*

## ⚙️ System Architecture
The system is composed of two main parts: a hardware layer for the physical parking lot and a software layer for user interaction and management.

1.  **Hardware Layer:**
    * [cite_start]**Entry/Exit:** An **RFID reader** verifies user identity for gate access, which is controlled by a **Servo Motor**[cite: 113, 114, 122, 456, 460].
    * [cite_start]**Slot Detection:** **IR sensors** are placed in each parking spot to detect the presence of a vehicle in real-time[cite: 115, 123, 454].
    * [cite_start]**Control Unit:** An **Arduino Nano** microcontroller processes data from the sensors and controls the hardware[cite: 119, 451, 541].

2.  **Software Layer (Web Application):**
    * [cite_start]A full-featured web application allows users to register, log in, view real-time parking availability, reserve slots, manage their vehicles, and process payments[cite: 784, 874].

## 🛠️ Tech Stack

* **Software:**
    * [cite_start]**Frontend:** HTML, CSS, JavaScript [cite: 469]
    * [cite_start]**Backend:** PHP [cite: 470]
    * [cite_start]**Database:** MySQL [cite: 466]
    * [cite_start]**Hardware Programming:** C++ for Arduino [cite: 498]
* **Hardware:**
    * [cite_start]Arduino Nano [cite: 451]
    * [cite_start]RFID Reader (RC522) [cite: 347, 460]
    * [cite_start]IR Sensors [cite: 454]
    * [cite_start]Servo Motor [cite: 456]
    * [cite_start]LCD 16x2 Display [cite: 552]

## 📄 Project Documentation
A complete 80-page project report, including ER diagrams, Use-Case diagrams, and system test reports, is available in the repository: [`SPARK_ProjectReport.pdf`](link-to-your-pdf-in-the-repo).
