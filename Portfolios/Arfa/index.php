<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arfa Zain | Professional Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* 1. NAVY & GOLD THEME */
        :root {
            --navy-deep: #050a18;
            --navy-card: #0d1528;
            --gold: #ffcc00;
            --gold-glow: rgba(255, 204, 0, 0.3);
            --text-light: #f8fafc;
            --text-dim: #94a3b8;
            --transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* 2. BASE STYLES */
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }

        body {
            background-color: var(--navy-deep);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-light);
            line-height: 1.6;
        }

        .container { max-width: 1200px; margin: auto; padding: 0 25px; }
        section { padding: 100px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
        .sec-title { text-align: center; font-size: 2.8rem; margin-bottom: 60px; font-family: 'Outfit'; color: var(--gold); }

        /* 3. HERO SECTION WITH MORPHING ANIMATION */
        .hero {
            min-height: 90vh;
            display: flex; align-items: center; justify-content: space-between;
            gap: 50px;
        }
        .hero-text h1 { font-size: 4.5rem; font-family: 'Outfit'; line-height: 1.1; margin-bottom: 20px; }
        .hero-text h1 span { color: var(--gold); text-shadow: 0 0 20px var(--gold-glow); }
        .hero-text p { font-size: 1.2rem; color: var(--text-dim); margin-bottom: 35px; max-width: 550px; }

        .btn-cv {
            display: inline-flex; align-items: center; gap: 10px;
            background: var(--gold); color: var(--navy-deep);
            padding: 15px 30px; border-radius: 12px; font-weight: 800;
            text-decoration: none; text-transform: uppercase; letter-spacing: 1px;
            transition: var(--transition); border: 2px solid var(--gold);
        }
        .btn-cv:hover { background: transparent; color: var(--gold); transform: translateY(-5px); box-shadow: 0 10px 20px var(--gold-glow); }

        .profile-img-box {
            position: relative; width: 380px; height: 380px;
        }
        .profile-img {
            width: 100%; height: 100%; object-fit: cover;
            border: 2px solid var(--gold);
            /* Morphing Animation Code */
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 8s linear infinite;
            transition: var(--transition);
        }
        @keyframes morph {
            0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%; }
            100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        }
        .profile-img-box:hover .profile-img { transform: scale(1.05); }

        /* 4. ABOUT SECTION */
        .about-content { max-width: 800px; margin: auto; text-align: center; font-size: 1.1rem; color: var(--text-dim); }

        /* 5. CARDS STYLE */
        .card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
        .card {
            background: var(--navy-card); padding: 35px; border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.03); transition: var(--transition);
            height: 100%;
        }
        .card:hover { transform: translateY(-12px); border-color: var(--gold); box-shadow: 0 20px 40px rgba(0,0,0,0.4); }
        .card i { font-size: 2.2rem; color: var(--gold); margin-bottom: 20px; display: block; }
        .card .badge { color: var(--gold); font-weight: 700; font-size: 0.8rem; display: block; margin-bottom: 5px; }

        /* 6. SKILLS BARS */
        .skills-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
        .skill-item { margin-bottom: 25px; }
        .skill-name { display: flex; justify-content: space-between; margin-bottom: 8px; font-weight: 600; }
        .progress-bar { width: 100%; height: 8px; background: #1e293b; border-radius: 10px; }
        .progress-fill { height: 100%; background: var(--gold); border-radius: 10px; box-shadow: 0 0 10px var(--gold-glow); }

        /* 7. CERTIFICATES GALLERY */
        .cert-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .cert-card { background: var(--navy-card); border-radius: 20px; overflow: hidden; border: 1px solid rgba(255,255,255,0.05); transition: var(--transition); }
        .cert-card:hover { border-color: var(--gold); transform: translateY(-5px); }
        .cert-img-box { width: 100%; height: 220px; overflow: hidden; }
        .cert-img-box img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
        .cert-card:hover img { transform: scale(1.1); }
        .cert-info { padding: 20px; text-align: center; }

        /* 8. CONTACT & FOOTER */
        .contact-box { background: var(--navy-card); border-radius: 30px; padding: 60px; max-width: 900px; margin: auto; }
        .form-control { width: 100%; background: var(--navy-deep); border: 1px solid rgba(255,255,255,0.1); padding: 18px; border-radius: 12px; color: white; margin-bottom: 20px; }
        .btn-submit { width: 100%; background: var(--gold); color: var(--navy-deep); border: none; padding: 20px; border-radius: 12px; font-weight: 800; cursor: pointer; text-transform: uppercase; }

        footer { text-align: center; padding: 50px 0; background: #02060f; }
        .socials a { color: var(--text-dim); font-size: 1.5rem; margin: 0 15px; transition: 0.3s; }
        .socials a:hover { color: var(--gold); }
    </style>
</head>
<body>

    <section id="home" class="container hero">
        <div class="hero-text">
            <h1>Arfa <span>Zain</span></h1>
            <p>Computer Science Student | Aspiring Cyber Security Professional | Social Media Associate at AICP</p>
            <a href="images/ARFA CV.docx" class="btn-cv" target="_blank">
                <i class="fas fa-file-download"></i> Download CV
            </a>
        </div>
        <div class="profile-img-box">
            <img src="images/Arfa pic.jpeg" alt="Arfa Zain" class="profile-img">
        </div>
    </section>

    <section id="about" class="container">
        <h2 class="sec-title">About Me</h2>
        <div class="about-content">
            <p>I am a passionate Computer Science student at Riphah International University. I specialize in building interactive applications and exploring the depths of Cybersecurity. With a background in leadership and community management, I strive to bridge the gap between technology and people.</p>
        </div>
    </section>

    <section id="skills" class="container">
        <h2 class="sec-title">Technical Expertise</h2>
        <div class="skills-grid">
            <div class="skill-item">
                <div class="skill-name"><span>Java & C++</span><span>90%</span></div>
                <div class="progress-bar"><div class="progress-fill" style="width: 90%;"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-name"><span>HTML / CSS</span><span>85%</span></div>
                <div class="progress-bar"><div class="progress-fill" style="width: 85%;"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-name"><span>PHP / MySQL</span><span>80%</span></div>
                <div class="progress-bar"><div class="progress-fill" style="width: 80%;"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-name"><span>DSA & OOP</span><span>88%</span></div>
                <div class="progress-bar"><div class="progress-fill" style="width: 88%;"></div></div>
            </div>
        </div>
    </section>

    <section id="education" class="container">
        <h2 class="sec-title">Education</h2>
        <div class="card-grid">
            <div class="card">
                <i class="fas fa-university"></i>
                <span class="badge">In Progress</span>
                <h3>BS Computer Science</h3>
                <p>Riphah International University, Islamabad</p>
            </div>
            <div class="card">
                <i class="fas fa-graduation-cap"></i>
                <span class="badge">Completed</span>
                <h3>ICS</h3>
                <p>Mulhal Science College, Chakwal</p>
            </div>
            <div class="card">
                <i class="fas fa-school"></i>
                <span class="badge">Completed</span>
                <h3>Matriculation</h3>
                <p>Blooming Scholars Academy, Chakwal</p>
            </div>
        </div>
    </section>

    <section id="experience" class="container">
        <h2 class="sec-title">Experience</h2>
        <div class="card-grid">
            <div class="card">
                <i class="fas fa-share-nodes"></i>
                <span class="badge">Society</span>
                <h3>Social Media Associate</h3>
                <p>Artificial Intelligence Community of Pakistan (AICP)</p>
            </div>
            <div class="card">
                <i class="fas fa-code"></i>
                <span class="badge">Internship</span>
                <h3>App Development Intern</h3>
                <p>Code Alpha (1 Month Online)</p>
            </div>
            <div class="card">
                <i class="fas fa-user-tie"></i>
                <span class="badge">Leadership</span>
                <h3>Sub-Head</h3>
                <p>Entrepreneurship Society</p>
            </div>
        </div>
    </section>

    <section id="projects" class="container">
        <h2 class="sec-title">Projects</h2>
        <div class="card-grid">
            <div class="card">
                <i class="fas fa-gamepad"></i>
                <h3>Card Battle Game</h3>
                <p>Strategic gameplay logic built with Data Structures to handle deck mechanics.</p>
            </div>
            <div class="card">
                <i class="fas fa-utensils"></i>
                <h3>Restaurant Website</h3>
                <p>Full-stack dynamic site using PHP and MySQL for seamless management.</p>
            </div>
            <div class="card">
                <i class="fas fa-car-side"></i>
                <h3>Vehicle Rental System</h3>
                <p>Java Swing application featuring full CRUD operations for fleet tracking.</p>
            </div>
        </div>
    </section>

    <section id="certificates" class="container">
        <h2 class="sec-title">Certifications</h2>
        <div class="cert-grid">
            <div class="cert-card">
                <div class="cert-img-box"><img src="images/certificate 1.jpeg" alt="Cert 1"></div>
                <div class="cert-info"><h4>The Perils of AI</h4><p>AICP Webinar</p></div>
            </div>
            <div class="cert-card">
                <div class="cert-img-box"><img src="images/certificate 2.jpeg" alt="Cert 2"></div>
                <div class="cert-info"><h4>LinkedIn Optimization</h4><p>The Passionate-Pak</p></div>
            </div>
            <div class="cert-card">
                <div class="cert-img-box"><img src="images/certificate 3.jpeg" alt="Cert 3"></div>
                <div class="cert-info"><h4>Digital Literacy</h4><p>Course Wrap Up Session</p></div>
            </div>
        </div>
    </section>

    <section id="contact" class="container">
        <h2 class="sec-title">Contact Me</h2>
        <div class="contact-box">
            <form>
                <input type="text" class="form-control" placeholder="Full Name">
                <input type="email" class="form-control" placeholder="Email Address">
                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="socials">
            <a href="https://github.com/Arfa-zain"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p style="margin-top:20px; color: var(--text-dim);">&copy; 2026 Arfa Zain | All Rights Reserved</p>
    </footer>

</body>
</html>