<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maryam Uzair Portfolio</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="portfolio.css">
</head>

<body>


<!-- ✅ HERO SECTION (KEEP ONLY THIS ONE) -->
<section class="hero container" id="home">
      <div class="row align-items-center">

    <!-- LEFT TEXT -->
    <div class="col-md-7 hero-text">
      <h1 class="title">
        Hi There,<br>
        I'm <span class="highlight">Maryam Uzair</span>
      </h1>

      <p class="typing">
        I Am Into <span id="type"></span>
      </p>

      <p class="desc">
        Passionate Web Developer focused on building clean, responsive, and user friendly websites.
      </p>

      <!-- BUTTON (scroll to about) -->
      <a href="#about" class="btn btn-main mt-3">Hire me</a>
       <!-- ✅ DOWNLOAD CV BUTTON (FIXED) -->
      <a href="images/resume.pdf" download="maryam uzair RESUMEV.pdf" class="btn btn-main mt-3">
        <i class="bi bi-download"></i> Download CV
      </a>

      <!-- SOCIAL ICONS -->
      <div class="social-icons mt-4">
        <a href="#"><i class="bi bi-linkedin"></i></a>
        <a href="#"><i class="bi bi-github"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
      </div>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="col-md-5 text-center">
      <div class="hero-img">
        <img src="images/profile pic.webp" alt="avatar">
      </div>
    </div>

  </div>
</section>

<!-- ✅ ABOUT ME (IMPROVED) -->
<section class="about" id="about">
  <div class="container">
    <div class="row align-items-center">

      <!-- IMAGE -->
      <div class="col-md-5 text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/921/921347.png" class="img-fluid about-img">
      </div>

      <!-- TEXT -->
      <div class="col-md-7">
        <h2>About Me</h2>

        <p>
          I am a passionate and dedicated web developer with strong skills in HTML, CSS, and JavaScript.
          I enjoy creating modern, responsive, and user-friendly websites that deliver a smooth experience.
        </p>

        <p>
          I also have programming experience in C++ and Java, which helps me build logical and efficient solutions.
          I am always eager to learn new technologies and improve my development skills.
        </p>

        <!-- EXTRA HIGHLIGHTS -->
        <ul class="about-list">
          <li>✔ Responsive Web Design</li>
          <li>✔ Clean & Modern UI</li>
          <li>✔ Problem Solving Skills</li>
          <li>✔ Continuous Learning</li>
        </ul>

      </div>
    </div>
  </div>
</section>

<!-- ✅ STATS -->
<section class="stats py-5">
  <div class="container">
    <div class="row text-center g-4">

      <div class="col-md-3">
        <div class="stat-box">
          <h3>03+</h3>
          <p>Semester Projects (C++, Java, OOP, HTML, My SQL)</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="stat-box">
          <h3>15+</h3>
          <p>Courses Completed
            from  1 to 4 semesters
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="stat-box">
          <h3>03+</h3>
          <p>Certifications
            from different webinar and Competetion
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="stat-box">
          <h3>04+</h3>
          <p>Technical Skills
            to improve my degree
          </p>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- SERVICES -->
<section class="services" id="services">
      <h2>My Services</h2>

    <div class="service-container">

        <div class="service">
            <div class="icon">💻</div>
            <h3>Web Development</h3>
            <p>Modern, responsive websites using latest technologies.</p>
        </div>

        <div class="service">
            <div class="icon">🎨</div>
            <h3>UI/UX Design</h3>
            <p>Clean and user-friendly designs.</p>
        </div>

        <div class="service">
            <div class="icon">💼</div>
            <h3>Freelancer</h3>
            <p>Providing professional services to clients worldwide.</p>
        </div>

    </div>
</section>
<!-- skills-->
<section class="skills-section" id="skills">
    <h2>My Skills</h2>

  <div class="skills-container">

    <!-- Skill 1 -->
    <div class="skill">
      <div class="circle" data-percent="85">
        <span>85%</span>
      </div>
      <p>HTML / CSS</p>
    </div>

    <!-- Skill 2 -->
    <div class="skill">
      <div class="circle" data-percent="80">
        <span>80%</span>
      </div>
      <p>JavaScript</p>
    </div>

    <!-- Skill 3 -->
    <div class="skill">
      <div class="circle" data-percent="95">
        <span>95%</span>
      </div>
      <p>C++ / Java</p>
    </div>
    <!-- Skill 3 -->
    <div class="skill">
      <div class="circle" data-percent="90">
        <span>90%</span>
      </div>
      <p>MS Word & Excel</p>
    </div>
        <!-- Skill 4 -->
<div class="skill">
      <div class="circle" data-percent="75">
        <span>75%</span>
      </div>
      <p>MY SQL workbench</p>
    </div>
  </div>
</section>


<!-- EDUCATION -->
<section class="education py-5" id="education">
    <div class="container">
    <h2 class="text-center mb-5">My Education</h2>

    <div class="timeline">

      <div class="timeline-item">
        <h5>Bachelor in Computer Science</h5>
        <span>2022 - Present</span>
        <p>Learning web development, OOP, and software engineering.</p>
      </div>

      <div class="timeline-item">
        <h5>Intermediate (ICS)</h5>
        <span>2020 - 2022</span>
        <p>Focused on Mathematics and Computer Science.</p>
      </div>

    </div>
  </div>
</section>


<!-- ACADEMIC PROJECTS -->
<!-- ACADEMIC PROJECTS -->
<section class="experience py-5">
  <div class="container">
    <h2 class="text-center mb-5">Academic Projects</h2>

    <div class="exp-card">
      <h5>Employee Managment System (Java - OOP)</h5>
      <ol>
        <li>Used object-oriented programming concepts</li>
        <li>Managed employee, Update results, Add employee, Display employee list, Delete employee</li>
      </ol>
    </div>

    <div class="exp-card">
      <h5>Library Management System (C++)</h5>
      <ol>
        <li>Using basic concepts of Programming Fundamental (C++)</li>
        <li>Add book, Display all books, Search book (by ID), Issue book, Return book</li>
      </ol>
    </div>

    <div class="exp-card">
      <h5>UNO Card Game (C++)</h5>
      <ol>
        <li>Developed a console-based UNO game using C++ and object-oriented programming</li>
        <li>Implemented turn-based logic, card handling, and basic game rules</li>
      </ol>
    </div>

  </div>
</section>


<!-- CERTIFICATES -->
<section class="certificates py-5" id="certificates">
    <div class="container">
    <h2 class="text-center mb-5">Certifications</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="cert-card">
          <img src="images/WhatsApp Image 2026-05-05 at 8.57.02 PM (1).jpeg">
          <h5>Online Intership</h5>
          <p>C++ Programming intership & traning program</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="cert-card">
          <img src="images/WhatsApp Image 2026-05-05 at 8.57.03 PM.jpeg">
          <h5>Online Quiz Competetion</h5>
          <p>Outstanding performance in CyberSphere programming quiz</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="cert-card">
          <img src="images/WhatsApp Image 2026-05-05 at 8.57.02 PM.jpeg">
          <h5>Participation Certificate</h5>
          <p>Webinar related to AI tools for Smart Researches</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- PROJECT SHOWCASE -
<section class="projects py-5" id="projects">
  <div class="container">
    <h2 class="text-center mb-5">My Projects</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="project-card">
          <img src="images/employee.jpg">
          <div class="overlay">Employee Management System</div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="project-card">
            <img src="images/download.jpg">
         
          <div class="overlay">UNO Card Game</div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="project-card">
          <img src="images/library-interior.jpg">
          <div class="overlay">Libaray Management System</div>
        </div>
      </div>

    </div>
  </div>
</section>-->
<section class="projects-section">
  <h2 class="section-title">My Projects</h2>

  <div class="projects-container">

    <!-- Project 1 -->
    <div class="project-card">
      <img src="images/employee.jpg" alt="Employee System">

      <div class="project-overlay">
        <h3>Employee Management System</h3>
        <p>Java Swing Desktop App with File Handling</p>

        <div class="project-tags">
          <span>Java</span>
          <span>Swing</span>
          <span>File Handling</span>
        </div>

         <div class="buttons">
  <a href="https://github.com/Arfa-zain/WAD-Resturant-website-" target="_blank">
    View Code
  </a>

  <a href="https://github.com/Arfa-zain/WAD-Resturant-website-" target="_blank">
    Demo
  </a>
</div>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-card">
      <img src="images/uno.jpg" alt="UNO Game">

      <div class="project-overlay">
        <h3>UNO Game</h3>
        <p>Interactive Card Game UI Design</p>

        <div class="project-tags">
          <span>HTML</span>
          <span>CSS</span>
          <span>JS</span>
        </div>

         <div class="buttons">
  <a href="https://github.com/Arfa-zain/WAD-Resturant-website-" target="_blank">
    View Code
  </a>

  <a href="https://github.com/Arfa-zain/WAD-Resturant-website-" target="_blank">
    Demo
  </a>
</div>
      </div>
    </div>

    <!-- Project 3 -->
    <div class="project-card">
      <img src="images/library-interior.jpg" alt="Library System">

      <div class="project-overlay">
        <h3>Library Management System</h3>
        <p>Database-based Book Management System</p>

        <div class="project-tags">
          <span>HTML</span>
          <span>CSS</span>
          <span>MySQL</span>
        </div>

        <div class="buttons">
  <a href="https://github.com/Arfa-zain/WAD-Resturant-website-" target="_blank">
    View Code
  </a>

  <a href="https://github.com/Arfa-zain/WAD-Resturant-website-" target="_blank">
    Demo
  </a>
</div>
      </div>
    </div>

  </div>
</section>
<!-- ================= CONTACT SECTION ================= -->

<section class="contact py-5" id="contact">

  <div class="container">

    <h2 class="text-center mb-5">Contact Me</h2>

    <div class="row align-items-center">

      <!-- LEFT SIDE -->
      <div class="col-md-5 mb-4">

        <div class="contact-info">

          <h3>Let's Work Together</h3>

          <p>
            Feel free to contact me for web development,
            UI/UX design, or collaboration opportunities.
          </p>

          <div class="contact-item">
            <i class="bi bi-envelope-fill"></i>
            <span>maryam@example.com</span>
          </div>

          <div class="contact-item">
            <i class="bi bi-telephone-fill"></i>
            <span>+92 300 1234567</span>
          </div>

          <div class="contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <span>Pakistan</span>
          </div>

          <!-- SOCIAL ICONS -->
          <div class="contact-social mt-4">

            <a href="#"><i class="bi bi-linkedin"></i></a>

            <a href="#"><i class="bi bi-github"></i></a>

            <a href="#"><i class="bi bi-instagram"></i></a>

            <a href="#"><i class="bi bi-twitter"></i></a>

          </div>

        </div>

      </div>

      <!-- RIGHT SIDE -->
      <div class="col-md-7">

        <form class="contact-form">

          <div class="row">

            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>

            <div class="col-md-6 mb-3">
              <input type="email" class="form-control" placeholder="Your Email">
            </div>

          </div>

          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Subject">
          </div>

          <div class="mb-3">
            <textarea rows="5" class="form-control" placeholder="Your Message"></textarea>
          </div>

          <button type="submit" class="btn btn-main">
            Send Message
          </button>

        </form>

      </div>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-center py-3">
  <p>© 2026 Maryam Uzair</p>
</footer>
<!--js code-->
<script>


 const words = ["Web Developer", "UI Designer", "Freelancer"]; 
 let i = 0;                 // index for words array
 let j = 0;                 // index for letters
 let currentWord = "";      // current word being typed
 let isDeleting = false;    // check if we are deleting text


 // function to create typing animation
 function typeEffect() {

   currentWord = words[i];

   if (isDeleting) {
     j--;
   } 
   else {
     j++;
   }


   document.getElementById("type").textContent =
   currentWord.substring(0, j);

   // if word fully typed
   if (!isDeleting && j === currentWord.length) {
     isDeleting = true;          // start deleting
     setTimeout(typeEffect, 1000); // pause before deleting
     return;
   }

   // if word fully deleted
   if (isDeleting && j === 0) {
     isDeleting = false;        // switch to typing
     i = (i + 1) % words.length; // move to next word
   }

   // speed control (faster deleting, slower typing)
   setTimeout(typeEffect, isDeleting ? 50 : 100);
 }

 // start typing effect
 typeEffect();


 // ================= SCROLL ANIMATION =================

 const observer = new IntersectionObserver(entries => {

   entries.forEach(entry => {

     // if element is visible on screen
     if (entry.isIntersecting) {
       entry.target.classList.add('show'); // add animation class
     }

   });

 });


 // ================= CIRCLE PROGRESS =================

 document.querySelectorAll('.circle').forEach(circle => {

   let percent = circle.getAttribute('data-percent');
   circle.style.setProperty('--percent', percent);

 });


 // ================= SECTION FADE IN =================

 document.querySelectorAll('section').forEach(sec => {

   // hide sections initially
   sec.classList.add('hidden');

   observer.observe(sec);

 });

</script>

</body>
</html>