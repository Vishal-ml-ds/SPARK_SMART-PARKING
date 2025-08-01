# SPARK: A Full-Stack IoT Smart Parking System

## 📖 Project Overview
This is a comprehensive IoT-based smart parking system developed for our final year BCA project at Don Bosco College, Panjim, affiliated with Goa University. The system integrates a full-stack web application with physical hardware to automate and manage the entire parking lifecycle, from vehicle entry to payment. The primary goal is to reduce traffic congestion and time spent searching for parking by providing real-time slot availability.

## ✨ My Role & Contributions
As the **Project Leader**, I was responsible for the overall direction and successful delivery of the project. My key contributions included:

* **Project Management & Leadership:** Managed the project timeline using Gantt charts, delegated tasks to team members, and ensured that all project milestones were met on schedule.
* **Hardware Design & Integration:** Led the design, assembly, and programming of the entire hardware layer. This included integrating the **Arduino Nano** with the **RFID reader** for authentication and the **IR sensors** for real-time slot detection.
* **System Testing & Validation:** Developed and executed the complete testing plan. I was personally responsible for creating all the **validation pages** to test the web application's functionality and ensure it met the project requirements.

## ⚙️ System Architecture
The system is composed of two main parts: a hardware layer for the physical parking lot and a software layer for user interaction and management.

1.  **Hardware Layer:**
    * **Entry/Exit:** An **RFID reader** verifies user identity for gate access, which is controlled by a **Servo Motor**.
    * **Slot Detection:** **IR sensors** are placed in each parking spot to detect the presence of a vehicle in real-time.
    * **Control Unit:** An **Arduino Nano** microcontroller processes data from the sensors and controls the hardware.

2.  **Software Layer (Web Application):**
    * A full-featured web application allows users to register, log in, view real-time parking availability, reserve slots, manage their vehicles, and process payments using the integrated **Stripe API**.

## 🛠️ Tech Stack

* **Software:**
    * **Frontend:** HTML, CSS, JavaScript
    * **Backend:** PHP
    * **Database:** MySQL
    * **Payment Gateway:** Stripe API
    * **Hardware Programming:** C++ for Arduino
* **Hardware:**
    * Arduino Nano
    * RFID Reader (RC522)
    * IR Sensors
    * Servo Motor
    * LCD 16x2 Display

## 📄 Project Documentation
A complete 80-page formal project report, including ER diagrams, Use-Case diagrams, and system test reports, is available in this repository:
**[`SPARK_ProjectReport.pdf`](SPARK_ProjectReport.pdf)**
