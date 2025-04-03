<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Arka Biswas - Full Stack Web Developer Portfolio. View my projects, skills, and contact information.">
  <meta name="keywords" content="Arka Biswas, Portfolio, Full Stack Web Developer, MERN Stack, Projects, Skills">
  <meta name="author" content="Arka Biswas">
  <title>Arka Biswas - Portfolio
  </title>
  <link rel="icon" type="image/x-icon" href="https://i.postimg.cc/Gt50vR96/arka123.jpg" class="img-fluid border rounded-circle">
  <link rel="shortcut icon" href="signature.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="task4.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>

@import url("https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

.navbar-toggler,
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
  outline: none;
  border: none;
  box-shadow: none;
}
.navbar {
  background-color:;
}
.navbar {
  position: relative; 
}

.navbar::before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%; 
  width: 0; 
  height: 4px;
  background-color:rgb(0, 0, 0);
  border-radius: 5px;
  transition: width 300ms ease-in-out, left 300ms ease-in-out;
}

.navbar:hover::before {
  width: 100%; 
  left: 0; 
}

.nav-link {
  font-size: 18px;
  position: relative;
  display: inline-block;
}

.nav-link::before {
  transition: 300ms;
  height: 3px;
  content: "";
  position: absolute;
  border-radius: 5px;
  background-color: rgb(0, 0, 0);
}

.nav-hover::before {
  width: 0%;
  bottom: 10px;
}

.nav-hover:hover::before {
  width: 70%;
}

body {
  background-image: url("background.jpg");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  overflow-x: hidden;
}
body::-webkit-scrollbar-track {
  border-radius: 10px;
}

body::-webkit-scrollbar {
  width: 10px;
  
}

body::-webkit-scrollbar-thumb {
  border-radius: 15px;
  background-color: rgb(17, 95, 147);
}

body {
  font-family: "Fira Sans", sans-serif;
}

#home {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
#home a {
  color: rgb(37, 35, 35);
}
#home p {
  font-size: 25px;
}
#home i {
  cursor: pointer;
  transition: 0.5s;
}
#home i:hover {
  color: rgb(146, 146, 0);
}
#scrollBtn {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
}
#skills i {
  height: 100px;
  width: 100px;
  background-color: whitesmoke;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}
#skills i:hover {
  cursor: pointer;
  transform: scale(1.03);
}
#projects .col-lg-4 {
  padding: 20px;
}
#projects .card {
  border: none;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  margin: 10px auto;
  cursor: pointer;
  position: relative;
  color: white;
}
#projects .card-body {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 5px;
  display: none;
}
#projects .card:hover .card-body {
  display: block;
  background-color: rgba(0, 0, 0, 0.8);
}

#education .education {
  cursor: pointer;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  background-color: rgba(46, 223, 193, 0.5);
}
#education .education:hover {
  transform: scale(1.02);
}

@media (max-width: 768px) {
  #home img {
    margin-bottom: 30px;
    width: 200px;
  }
  #home .col-md-8 {
    align-items: center;
    text-align: center;
    padding: 0px;
  }
  #home p {
    width: 100%;
    font-size: 18px;
  }
}
@media (max-width: 370px) {
  #home h1 {
    font-size: 25px;
  }
}

.card-img-top {
  width: 100%;
  max-width: 399.99px;
  height: auto;
  max-height: 266.39px;
  object-fit: cover;
}

.navbar-nav {
  display: flex;
  gap: 20px; 
}

.nav-link {
  font-weight: bold;
  font-size: 22px;
}
.nav-link {
  font-weight: bold; 
  margin-right: 20px; 
}

.nav-item {
  margin-right: 15px; 
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

</style>

</head>

<body>
  <header class="fixed-top" data-aos="fade-down">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">

          <img src=https://i.postimg.cc/fyjnpTQ1/signature.png alt="signature" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link nav-hover" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-hover" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="home">
      <div class="container row flex-wrap-reverse">
        <div class="col-md-8 d-flex flex-column justify-content-center" data-aos="fade-right">
          <h1 class="display-5 fw-bold mb-3">👋 Hello I am Arka Biswas </h1>
          <p class="px-2 flex">I am a <span id="typed-text"></span></p>
          <div class="d-flex gap-3 fs-3 px-2">
            <A href=https://www.linkedin.com/in/arka-biswas/" class="list-group-item"><i class="fa-brands fa-linkedin"></i></a>
            <A href="https://www.instagram.com/_arka_biswas/" class="list-group-item"><i class="fa-brands fa-instagram"></i></a>

            <a href=https://www.facebook.com/arka.biswas.566?mibextid=ZbWKwL/" class="list-group-item"><i class="fa-brands fa-facebook"></i></a>
            <A href="https://x.com/ArkaBiswas26175" class="list-group-item"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </div>
        <div class="col-md-4 text-center" data-aos="fade-left">
          <img src="https://i.postimg.cc/Gt50vR96/arka123.jpg" class="img-fluid border rounded-circle" alt="Arka Biswas profile" loading="lazy" width="500">
        </div>
      </div>
      <button class="btn btn-dark" id="scrollBtn">
        <i class="fa-solid fa-arrow-up"></i>
      </button>
    </section>
    <section id="about">
      <div class="container py-5 mb-5">

        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" data-aos="fade-up">About Me</h1>
        <p class="fs-5" data-aos="fade-up">I am a highly motivated Bachelor of Computer Applications (BCA) graduate from
          MAKAUT University in Kalyani, West Bengal. With a strong passion for software development, I have honed my
          skills in Java, Python, HTML, CSS, and JavaScript through various hands-on projects. My experience includes
          designing and developing a personal portfolio website and an eCommerce website, which showcase my ability to
          create responsive and dynamic web applications. I am proficient in user authentication, authorization, and
          advanced search and filtering options. Additionally, I hold certifications in Google Analytics and Data
          Studio. I am eager to contribute to a dynamic team, leveraging my strong communication, problem-solving, and
          creative skills to tackle challenging projects. Fluent in English, Hindi and Bengali, I am ready to bring my
          expertise to a collaborative and innovative work environment.
          Thank you for visiting my website. Feel free to contact me or connect with me on social media.</p>
        <div class="d-flex gap-2" data-aos="fade-up">
          <a href="https://drive.google.com/file/d/1-E5fr-ZYYIAa5tXJb8yoqmL6-RM0Spsi/view?usp=drive_link" class="list-group-item"><button type="button" class="btn btn-dark">My Resume</button>
            <a href="#contact" class="btn btn-outline-dark ">Contact Me</a>
        </div>

      </div>
    </section>
    <section id="education">
      <div class="container py-5" id="featured-3">
        <h2 class="pb-2 border-bottom border-dark" data-aos="fade-up">Education</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


          <div class="col p-3">
            <div class="education p-3 rounded" data-aos="flip-right">

              <i class="fa-solid fa-graduation-cap fs-2 mb-4"></i>

              <h3 class="fs-3">HIGHER SECONDERY (2022-2023)</h3>
              <p class="fs-5">KRISHNANAGAR HIGH SCHOOL (WEST BENGAL BOARD)</p>
              <p>Passed the examination in 2023.</p>
            </div>
          </div>
		  
		  
		  <div class="col p-3">
            <div class="education p-3 rounded" data-aos="flip-right">

              <i class="fa-solid fa-graduation-cap fs-2 mb-4"></i>

              <h3 class="fs-3">BCA (2023-2027)</h3>
			  <p class="fs-5">GLOBAL COLLEGE OF SCIENCE & TECHNOLOGY</p>
              <p class="fs-5">MAKAUT UNIVERSITY</p>
              <p>Pass the examination in 2027.</p>
            </div>
          </div>
		  
		  
        </div>
      </div>
	  
    </section>
    <section id="skills" class="py-5">
      <h2 class="text-center mb-5" data-aos="fade-up">My Skills</h2>
      <div class="container-fluid d-flex flex-wrap gap-3 align-items-center justify-content-center display-5">

        <i class="fa-brands fa-html5" data-aos="zoom-in"></i>
        <i class="fa-brands fa-css3" data-aos="zoom-in"></i>
        <i class="fa-brands fa-js" data-aos="zoom-in"></i>
        <i class="fa-brands fa-bootstrap" data-aos="zoom-in"></i>
        <i class="fa-brands fa-java" data-aos="zoom-in"></i>
        <i class="fa-brands fa-c" data-aos="zoom-in"></i>
        <i class="fa-brands fa-python" data-aos="zoom-in"></i>

      </div>
    </section>
    <section id="projects" class="py-5 my-5">
      <h2 class="text-center" data-aos="fade-up">My Projects</h2>
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <img src="https://images.unsplash.com/photo-1586281380117-5a60ae2050cc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHByb2plY3R8ZW58MHx8MHx8fDA%3D" alt="project" class="card-img-top">
              <div class="card-body">

                <h5 class="card-title">P1. WORKSURVAYFORM</h5>
                <p class="card-text">Workplace Satisfaction Survey This project contains the source code for a simple
                  yet elegant workplace satisfaction survey form. The form collects feedback from employees about their
                  workplace experiences and suggestions for improvements.!</p>
                <div class="d-flex gap-3 fs-4">
                  <a href="https://github.com/KOLADIYAYASH/WORKSURVAY-" class="list-group-item"><i class="fa-brands fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <img src="Weather Report.png" alt="project" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">P2. WEATHER REPORT </h5>
                <p class="card-text">Live weather report Web application USING HTML/CSS/JS</p>
                <div class="d-flex gap-3 fs-4">
                  <a href="https://github.com/arka-bot/Weather.git" class="list-group-item"><i class="fa-brands fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <img src="Simple Calculator.png" alt="project" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">P3. SIMPLE CALCULATER</h5>
                <p class="card-text">"A Simple Calculator that calculate the result of any simple calculation."</p>
                <div class="d-flex gap-3 fs-4">
                  <a href="https://github.com/arka-bot/Simple-Calculator.git" class="list-group-item"> <i class="fa-brands fa-github"></i></a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
  <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
    <img src="https://i.postimg.cc/vBvgTdR4/Screenshot-2025-03-20-115618.png" alt="project" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">P4. PORTFOLIO WEBSITE</h5>
      <p class="card-text">A modern Portfolio website, for About, Education, Contact, Projects and Skills.</p>
      <div class="d-flex gap-3 fs-4">
        <a href="https://github.com/arka-bot/Portfolio-Website.git" class="list-group-item">
          <i class="fa-brands fa-github"></i>
        </a>
      </div>
    </div>
  </div>
</div>

          <div class="col-lg-4 col-md-6">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <img src="https://images.unsplash.com/photo-1586281380117-5a60ae2050cc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHByb2plY3R8ZW58MHx8MHx8fDA%3D" alt="project" class="card-img-top">
              <div class="card-body">
                <!--<h5 class="card-title">P5. Flomic_Logistics_Website</h5>
                <p class="card-text">This project is a comprehensive and responsive website for Flomic Logistics. It
                  showcases the company's services, portfolio, and contact information in a user-friendly and visually
                  appealing format. Flomic Logistics Website This project is a comprehensive and responsive website for
                  Flomic Logistics. It showcases the company's services, portfolio, and contact information in a
                  user-friendly and visually appealing format.</p>
                <div class="d-flex gap-3 fs-4">
                  <a href="https://github.com/KOLADIYAYASH/Flomic_Logistics_Website" class="list-group-item"><i class="fa-brands fa-github"></i></a>
                </div>-->

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
              <img src="https://images.unsplash.com/photo-1586281380117-5a60ae2050cc?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHByb2plY3R8ZW58MHx8MHx8fDA%3D" alt="project" class="card-img-top">
              <div class="card-body">
                <!--<h5 class="card-title">P6. BASICSWEBPAGMAINPAG</h5>
                <p class="card-text">This project provides a foundational guide to HTML, CSS, and JavaScript. It
                  includes a responsive design, interactive sidebar, and utilizes Font Awesome icons. Ideal for
                  beginners, it was created as part of a freeCodeCamp project.</p>
                <div class="d-flex gap-3 fs-4">
                  <a href="https://github.com/KOLADIYAYASH/BASICSWEBPAGMAINPAG" class="list-group-item"><i class="fa-brands fa-github"></i></a>
                </div>-->

              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

   <!-- <div id="lightbox" class="lightbox">
        <span class="close">&times;</span>
        <img id="lightbox-img" class="lightbox-img">
    </div>-->


    <section id="contact" data-aos="fade-up">
      <div class="container">
        <div class="row my-5 py-5">
          <div class="col-md-6 d-flex flex-column align-items-start justify-content-center">
            <h1 class="display-5 fw-bold mb-3">Contact Me</h1>
            <p class="fs-5">Prefer email? Reach out to me at <i class="fa-solid envelope"></i> <a href="mailto:arkabiswas98203@gmail.com" target="_blank">arkabiswas98203@gmail.com</a></p>
            <p class="fs-5"><i class="fa-solid fa-phone"></i>+91 8972480046</p>
          </div>
          <div class="col-md-6">
            <p class="fs-5">Send me a message</p>
            <form action="other_page.php" method="POST">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                <label for="name">Your Name</label>
              </div>

              <div class="form-floating mb-3">

                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="email">Your Email</label>
              </div>

              <div class="form-floating mb-3">
                <textarea name="message" id="message" class="form-control" placeholder="Hello Ankit"></textarea>
                <label for="message">Your message</label>
                <label for="message">Your message</label>
              </div>

              <button class="w-100 btn btn-lg btn-success" type="submit" name="submit">Send <i class="fa-solid fa-paper-plane"></i></button>

            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="text-center">
  <p class="fs-5">Copyright © 2024 Arka Biswas. All Rights Reserved.</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/typeit/dist/typeit.min.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new TypeIt("#typed-text", {
          speed: 200,
          waitUntilVisible: true,
          loop: true
        })
        .type("web developer.")
        .pause(200)
        .delete(14)
		.type("Full Stack Developer.")
        .pause(200)
        .delete(18)
        .type("Freelancer.")
        .delete(10)
        .pause(200)
        .delete(10)
        .type("Student.")
        .go();
    });
  </script>
</body>

</html>

<script>

document.addEventListener("DOMContentLoaded", function () {
  const scrollBtn = document.getElementById("scrollBtn");

  function toggleScrollBtn() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  }

  function scrollToTop() {
    window.scrollTo({
      top: 0
    });
  }

  window.addEventListener("scroll", toggleScrollBtn);

  scrollBtn.addEventListener("click", scrollToTop);

  toggleScrollBtn();
});

document.addEventListener("DOMContentLoaded", function () {
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const closeBtn = document.querySelector(".close");

    document.querySelectorAll(".gallery-item img").forEach(img => {
        img.addEventListener("click", function () {
            lightbox.style.display = "flex";
            lightboxImg.src = this.src;
        });
    });

    closeBtn.addEventListener("click", function () {
        lightbox.style.display = "none";
    });

    // Close lightbox when clicking outside image
    lightbox.addEventListener("click", function (event) {
        if (event.target === lightbox) {
            lightbox.style.display = "none";
        }
    });
});

</script>

