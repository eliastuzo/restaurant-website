# Restaurant Website – Espresso Central ☕️

A modern, mobile-friendly website built for Espresso Central to serve as a digital introduction letter to both new and returning customers. Designed with responsiveness, interactivity, and elegance in mind, this project aims to provide a professional and engaging web presence that reflects the passion and personality of the restaurant.

🌐 **Live Site:** [www.espressocentral.mx](https://www.espressocentral.mx)

---

## ✨ Features

- **Responsive Design:** Optimized for mobile devices and tablets.
- **Interactive UI:** CSS transitions with `hover`, `transform`, and animations to improve user experience.
- **Customer Feedback System:**
  - Feedback form linked to ticket numbers.
  - Submissions are handled via PHP and stored in a MySQL database.
  - Allows for performance tracking and service improvement.
- **Coffee Blog:**
  - Built with PHP and MySQL.
  - Displays articles about coffee culture and barista craft.
  - Articles are fetched dynamically from the database.
- **Video Display Section:**
  - Simulates a smartphone screen playing embedded video.
  - Enhances the visual storytelling of the site.
- **Future Updates:** Content and photography will be refreshed every 2 months.

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (with embedded HTML)
- **Database:** MySQL
- **Deployment:** [selisar.com](https://www.selisar.com)

---

## 📁 Folder Structure

```
/espresso/
├── css/ # Styling files
├── img/ # Images (not uploaded due to GitHub file limits)
├── capturas/ # Screenshots
├── articulo.php # Blog article view
├── blog.php # Blog post retrieval
├── post.php # Blog post submission
├── envhelper.php # Handles .env credentials (for DB access)
├── index.html # Homepage
├── index.js # JS interactions
├── menu.html # Dynamic menu
├── reviews.html # Feedback form
├── masquecafe.html # "More than coffee" storytelling page
├── topdetops.html # Gallery
├── locaciones.html # Contact & locations
└── .gitignore # Excludes .env and media folders
```

---

## 🚀 Installation (Local Setup)

> If you'd like to run the site locally:

1. Clone this repo:
   ```bash
   git clone https://github.com/eliastuzo/restaurant-website.git
   cd restaurant-website
3. Serve with php locally:
   ```bash
   php -S localhost:8000
4. Visit:
   ```bash
   http://localhost:8000/index.html

---

## 🧩 Known Limitations

- Image folder (img/) was not uploaded due to GitHub size restrictions.
- Blog and feedback forms require a valid database connection with credentials stored in .env.

---

## 🙋‍♂️ About the Author

Built with love and coffee by Elias Perez Cruz, a biomedical engineer passionate about backend development, IoT, and digital automation.
If you're a recruiter or collaborator, feel free to reach out!

## 🪪 License

This project is part of a personal portfolio and is released under the MIT License.

## 🎨 Design Credits

The visual design and assets (including photography and layout mockups) were provided by a professional designer. All HTML, CSS, JavaScript, and PHP development was implemented and customized by [Elias Perez Cruz](https://github.com/eliastuzo).
