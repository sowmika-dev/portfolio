<?php
$success = isset($_GET['success']);
$error   = isset($_GET['error']);
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.104.2">
	<title>Sowmika protfolio</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.b-example-divider {
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden;
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch;
		}
	</style>


	<!-- Custom styles -->
	<link href="style.css" rel="stylesheet">
</head>

<body class="text-center text-bg-dark">

	<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<?php if ($success): ?>
			<div class="alert alert-success mt-5 alert-dismissible fade show text-center " style="margin-top:150px;">
				Message sent successfully! I’ll get back to you soon 😊
				<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
		<?php endif; ?>

		<?php if ($error): ?>
			<div class="alert alert-warning mt-5 text-center">
				Something went wrong. Please try again.
			</div>
		<?php endif; ?>
		<header class="mb-auto">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
				<div class="container">

					<!-- Brand -->
					<a class="navbar-brand brand-name fw-bold" href="#">
						Sowmika
					</a>

					<!-- Hamburger button -->
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
						aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- Nav links -->
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link fw-bold py-1 active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold py-1" href="#about">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold py-1" href="#education">Education</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold py-1" href="#skills">Skills</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold py-1" href="#projects">Projects</a>
							</li>
							<li class="nav-item">
								<a class="nav-link fw-bold py-1" href="#contact">Contact</a>
							</li>
						</ul>
					</div>

				</div>
			</nav>

		</header>

		<main id="home" class="hero d-flex flex-column justify-content-center align-items-center text-center">
			<h1>Hi,I'm Sowmika!</h1>
			<div class="typewriter mt-3">
				<span class="typewriter-text">Web Developer</span>
			</div>

			<p class="lead mt-4 mb-4">
				I build clean, functional web applications with real backend logic using PHP and MySQL.
			</p>
			<a href="#projects" class="animated-btn mb-4"><span class="box">Explore Projects</span></a>
			<a href="assets/resume/Sowmika_V_Resume.pdf" class="btn btn-accent btn-lg" download="Sowmika_V_Resume.pdf">Download Resume</a>
			<small class="text-muted d-block mt-3">
				Find me on
			</small>

			<div class="hero-socials mt-4">
				<a href="https://www.linkedin.com/in/sowmika-v-157778293" target="_blank" aria-label="LinkedIn">
					<i class="bi bi-linkedin"></i>
				</a>

				<a href="https://github.com/sowmika-dev" target="_blank" aria-label="GitHub">
					<i class="bi bi-github"></i>
				</a>

				<a href="https://git.selfmade.ninja/Sowmika" target="_blank" aria-label="GitLab">
					<i class="bi bi-gitlab"></i>
				</a>
			</div>


		</main>

		<section id="about" class="py-5">
			<div class="container">
				<div class="row g-5 align-items-center">
					<h2 class="fw-bold mb-4">About Me</h2>
					<div class="col-lg-5 mb-4 mb-lg-0 text-center">
						<img src="assets/images/sowmika.jpg" alt="Sowmika - Web Developer" loading="lazy"
							class="img-fluid w-75 rounded shadow-sm">
					</div>
					<div class="col-lg-7 row align-items-center">
						<p class="mt-5">
							I am a motivated and adaptable Web Developer with a strong foundation in both frontend and backend development. I have hands-on experience building dynamic and responsive web applications using HTML, CSS, JavaScript, PHP, and MongoDB. I enjoy developing complete web solutions — from designing intuitive user interfaces to implementing backend logic and database integration.
						</p>
						<p>
							Currently, I am expanding my skill set by learning Python, Django, and jQuery to strengthen my full-stack development capabilities. I am passionate about writing clean, efficient code and continuously improving my technical and problem-solving skills.
						</p>

						<ul class="list-unstyled mt-4">
							<li class="mb-2"> B.Sc Computer Science</li>
							<li class="mb-2"> Frontend-focused, backend-capable</li>
							<li class="mb-2"> Actively building real-world projects</li>
						</ul>
					</div>

				</div>
			</div>
		</section>

		<section id="education" class="py-5">
			<div class="container">
				<h2 class="fw-bold text-center mb-5">Education</h2>

				<div class="row g-4 justify-content-center">

					<!-- College -->
					<div class="col-md-6 col-lg-4">
						<div class="education-card h-100 shadow-sm text-center">
							<i class="bi bi-mortarboard-fill edu-icon"></i>
							<h5 class="card-title fw-bold mt-3">B.Sc Computer Science</h5>
							<p class="mb-1">LRG Govt Arts College For Women</p>
							<span class="edu-year">2022 – 2025</span>
							<span class="edu-cgpa">CGPA: 8.72</span>
						</div>
					</div>

					<!-- Higher Secondary -->
					<div class="col-md-6 col-lg-4">
						<div class="education-card h-100 shadow-sm text-center">
							<div class="card-body">
								<i class="bi bi-building edu-icon"></i>
								<h5 class="fw-bold mt-3">Higher Secondary</h5>
								<p class="mb-1">Jaivabai Municipal Girls Higher Secondary School</p>
								<span class="edu-year">2021 – 2022</span>
								<span class="edu-score">Score: 87%</span>
							</div>
						</div>
					</div>

					<!-- Secondary School -->
					<div class="col-md-6 col-lg-4">
						<div class="education-card h-100 shadow-sm text-center">
							<div class="card-body">
								<i class="bi bi-book edu-icon"></i>
								<h5 class="fw-bold mt-3">Secondary School</h5>
								<p class="mb-1">Jaivabai Municipal Girls Higher Secondary School</p>
								<span class="edu-year">2019 – 2020</span>
								<span class="edu-score">Score: 87.8%</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>


		<section id="skills">
			<section id="skills" class="py-5">
				<div class="container">
					<h2 class="fw-bold text-center mb-5">Skills</h2>

					<div class="row g-4">
						<div class="col-md-6 col-lg-4">
							<div class="skill-card">
								<span class="skill-card__title">Frontend</span>

								<ul class="skill-card__list">
									<li>HTML</li>
									<li>CSS</li>
									<li>JavaScript</li>
									<li>jQuery</li>
									<li>Bootstrap</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="skill-card">
								<span class="skill-card__title">Backend</span>

								<ul class="skill-card__list">
									<li>PHP</li>
									<li>Python</li>
									<li>MySQL</li>
									<li>MongoDB</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-4">
							<div class="skill-card">
								<span class="skill-card__title">Tools</span>

								<ul class="skill-card__list">
									<li>Github</li>
									<li>Gitlab</li>
									<li>VS code</li>
									<li>Adminer</li>
									<li>MySQL Workbench</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</section>

		</section>

		<section id="projects" class="py-5">
			<div class="container">
				<h2 class="fw-bold text-center mb-5">Projects</h2>

				<div class="row g-4">
					<div class="col-md-6 col-lg-4">
						<div class="project-card card h-100 shadow-sm">
							<img src="assets/images/doubtdoc.png" class="card-img-top" alt="Doubtdoc">

							<div class="card-body d-flex flex-column">
								<h5 class="card-title fw-bold">Doubtdoc</h5>

								<p class="card-text">
									A web-based Q&A platform for posting and answering question.Implemented user authentication, session management, and CRUD functionality and role-based access.
								</p>

								<p class="small text-muted mb-3">
									HTML • CSS • JavaScript • PHP • MongoDB
								</p>

								<div class="mt-auto">
									<a href="https://doubtdoc.selfmade.solutions" class="btn btn-sm btn-accent me-2">Live
										Demo</a>
									<a href="https://git.selfmade.ninja/Sowmika/docdoubt" class="btn btn-sm btn-outline-accent">Source Code</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="project-card card h-100 shadow-sm">
							<img src="assets/images/todo.png" class="card-img-top" alt="Todo App">

							<div class="card-body d-flex flex-column">
								<h5 class="card-title fw-bold">Todo App</h5>

								<p class="card-text">
									A full CRUD todo application demonstrating backend logic, database integration, and responsive UI using PHP and MySQL
								</p>

								<p class="small text-muted mb-3">
									HTML • CSS • JavaScript • PHP • MySQL
								</p>

								<div class="mt-auto">
									<a href="https://task.selfmade.buzz" class="btn btn-sm btn-accent me-2">Live
										Demo</a>
									<a href="https://github.com/sowmika-dev/Todo_list" class="btn btn-sm btn-outline-accent">Source Code</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-4">
						<div class="project-card card h-100 shadow-sm">
							<img src="assets/images/website blocker(py).png" class="card-img-top"
								alt="DNS Website Blocker">

							<div class="card-body d-flex flex-column">
								<h5 class="card-title fw-bold">DNS Website Blocker</h5>

								<p class="card-text">
									A system-level project that blocks selected websites by modifying DNS/hosts configuration using Python automation.
								</p>

								<p class="small text-muted mb-3">
									DNS • Networking • Python
								</p>

								<div class="mt-auto">
									<a href="https://github.com/sowmika-dev/Website-blocker" class="btn btn-sm btn-outline-accent" target="_blank">
										Source Code
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="https://github.com/sowmika-dev" class="btn btn-accent btn-lg text-white mt-4" target="_blank">Find more projects on my GitHub</a>
			</div>
		</section>

		<section id="contact" class="py-5 bg-dark text-white">
			<div class="container">
				<h2 class="fw-bold text-center mb-5">Contact</h2>

				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6">

						<form action="contact.php" method="post">

							<!-- Name -->
							<div class="mb-3">
								<label for="name" class="form-label">Name</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Your name"
									required>
							</div>

							<!-- Email -->
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" id="email" name="email" class="form-control"
									placeholder="your@email.com" required>
							</div>

							<!-- Message -->
							<div class="mb-4">
								<label for="message" class="form-label">Message</label>
								<textarea id="message" name="message" rows="4" class="form-control"
									placeholder="Your message" required></textarea>
							</div>

							<!-- Submit -->
							<div class="d-grid">
								<button type="submit" class="btn btn-accent btn-lg">
									Send Message
								</button>
							</div>

						</form>

					</div>
				</div>
			</div>

		</section>

		<footer class="site-footer bg-dark text-light py-4">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
						<span class="footer-brand">Sowmika</span>
						<p class="mb-0 small text-muted">
							© <span id="year"></span> All rights reserved.
						</p>
					</div>
					<div class="col-md-6 text-center text-md-end">
						<a href="#home" class="footer-link">Home</a>
						<a href="#about" class="footer-link">About</a>
						<a href="#education" class="footer-link">Education</a>
						<a href="#skills" class="footer-link">Skills</a>
						<a href="#projects" class="footer-link">Projects</a>
						<a href="#contact" class="footer-link">Contact</a>
					</div>

				</div>
			</div>
		</footer>

	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		document.querySelectorAll('.navbar-collapse .nav-link')
			.forEach(link => {
				link.addEventListener('click', () => {
					const navbar = document.querySelector('.navbar-collapse');
					const bsCollapse = bootstrap.Collapse.getInstance(navbar);

					if (bsCollapse) {
						bsCollapse.hide();
					}
				});
			});
	</script>

</body>

</html>