# 📡 CTIMS — Cell Tower Information Management System

**CTIMS** ialah sistem pengurusan maklumat menara telekomunikasi yang dibangunkan untuk membantu pencatat data menara, measurement, audit keselamatan dan laporan PDF secara teratur dan mudah digunakan.

> *CTIMS masih dalam fasa awal pembangunan (public, tanpa auth dahulu). Sistem akan ditambah login & roles pada versi akan datang.* :contentReference[oaicite:0]{index=0}

---

## 🧭 Table of Contents

- [📌 Project Overview](#-project-overview)  
- [🚀 Roadmap / Development Phases](#-roadmap--development-phases)  
- [🔧 Tech Stack](#-tech-stack)  
- [📦 Installation & Setup](#-installation--setup)  
- [▶️ Usage](#️-usage)  
- [✨ Features](#-features)  
- [🤝 Contributing](#-contributing)  
- [📄 License](#-license)

---

## 📌 Project Overview

CTIMS direka untuk memudahkan **input & pengurusan data menara**, **audit keselamatan**, serta menghasilkan **laporan PDF** untuk tujuan dokumentasi dan rujukan. Projek ini dibangunkan menggunakan Laravel & teknologi web moden.

README ini memberikan gambaran projek dan panduan awal untuk install, guna dan sumbang! :contentReference[oaicite:1]{index=1}

---

## 🚀 Roadmap / Development Phases

### 🔹 **Fasa 1 — Core System (Tanpa Login)**
Status: ✔ *In progress / Public*

Fungsi utama yang sedang dibangunkan dan tersedia secara umum:

✔ Tower CRUD  
✔ Measurements  
✔ Safety Audit  
✔ Image Uploads  
✔ PDF Report

📝 Fokus fasa ini adalah stabilkan core system & aliran kerja utama dulu. :contentReference[oaicite:2]{index=2}

---

### 🔹 **Fasa 2 — Authentication (Kemudian)**  
Status: 🔜 *Planned*

Selepas sistem stabil, akan ditambah:

- 🔑 Login  
- 🔓 Logout  
- 👥 Roles & Permissions  
  - **Admin** → semua akses  
  - **Inspector** → input + view sahaja  
- Authorization & access control middleware  
- Security improvements

Ini bertujuan pastikan keselamatan & kawalan akses lebih baik.

---

## 🔧 Tech Stack

- **Backend:** Laravel (PHP)  
- **Database:** MySQL / MariaDB  
- **Frontend:** Blade + Tailwind / Vite (config)  
- **Tools:** VS Code, Git & GitHub  
- **Testing:** Laravel Test Suite

---

## 📦 Installation & Setup

1. **Clone repo:**
   ```bash
   git clone https://github.com/padzley/ctims.git
   cd ctims
   
2 Install dependencies:
    composer install
    npm install
    npm run dev

3. Configure environment:
    cp .env.example .env

4. Generate app key:
    php artisan key:generate

5. Run migrations:
   php artisan migrate

6. Serve app:
   php artisan serve
---

▶️ Usage

Selepas install & serve:

👉 Buka dalam browser:
http://localhost:8000

Sistem tanpa login dahulu — semua fungsi core boleh dicuba & digunakan secara terbuka.

✨ Features
✔ Included (Fasa 1)

📍 Tower CRUD

📊 Measurements

🛡 Safety Audit

🖼 Image upload + preview

📄 Automated PDF report generation

🔒 Planned (Fasa 2)

Login & Logout

Role based access (Admin / Inspector)

Authorization middleware

✨ Roadmap boleh dikemaskini bila fungsi baru masuk!

🤝 Contributing

Terbuka untuk sesiapa yang nak bantu develop:

Fork repo ini

Buat branch baru (feat/my-feature)

Commit & push

Buat Pull Request

Sila keep code clean, ikut format Laravel standard, dan tulis commit yang jelas. 
GitHub

📄 License

MIT License © 2026
(Masukkan pautan LICENSE bila dah ada)


