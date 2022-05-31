<!DOCTYPE html>
<html lang="fr"> 
<head>
	<title>Alexis Juglair - Développeur Web</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Alexis Juglair">    
	<!-- <link rel="shortcut icon" href="#">  -->
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<script defer src="assets/fontawesome/js/all.min.js"></script>
	
	<link id="theme-style" rel="stylesheet" href="assets/css/devresume.css">
	<link rel="stylesheet" href="styles.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head> 

<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="0">
	<div class="main-wrapper">
		<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top fw-bold bg-custom py-0">
			<div class="container px-3 px-lg-5">
				<!-- <a class="navbar-brand text-primary" href="#">
					<i class="fas fa-home"></i>
				</a> -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavCollapse">
					<ul class="navbar-nav" id="navbarNav">
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="#accueil">Accueil</a>
						</li>
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="#curriculumVitæ">Curriculum Vitæ</a>
						</li>
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="#contact">Contact</a>
						</li>
					</ul>
					<ul class="navbar-nav ms-auto">
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="tel:0682289934" title="06 82 28 99 34"><i class="fas fa-phone-alt fa-lg me-1"></i></a>		
						</li>
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="#contact" title="alexis.juglair@gmail.com"><i class="fas fa-envelope fa-lg me-1"></i></a>
						</li>
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="https://github.com/AlexisJuglair" title="GitHub"><i class="fab fa-github fa-lg"></i></a>
						</li>
						<li class="nav-item p-1 nav-item-custom">
							<a class="nav-link text-primary" href="https://www.linkedin.com/in/alexis-juglair/" title="LinkedIn"><i class="fab fa-linkedin-in fa-lg"></i></a>
						</li>
					</ul>					
				</div>				
			</div>
		</nav>

		<div id="accueil" class="p-5 min-vh-100 d-flex flex-column justify-content-center align-items-center mb-5">
			<h1 id="main-title" class="display-4 text-white fw-bold"></h1>
			<p id="main-title-p" class="lead fw-bold text-white"></p>
			<a id="main-title-a" class="btn btn-primary" href="#curriculumVitæ" role="button"><i class="fas fa-arrow-circle-down me-1"></i>Voir plus</a>
		</div>

		<section id="curriculumVitæ" class="cta-section theme-bg-light py-5">
			<div class="container text-center single-col-max-width">
				<h2 class="heading mb-3">Curriculum Vitæ</h2>
				<a class="btn btn-primary" href="assets/CV-Alexis-Juglair-Développeur-Web.pdf" target="_blank"><i class="fas fa-file-pdf me-2"></i>Télécharger</a>				
			</div><!--//container-->
		</section>

		<div class="container px-3 px-lg-5 mb-5">
			<article class="resume-wrapper mx-auto theme-bg-light p-5 shadow-lg border border-primary rounded bg-white">				
				<div class="resume-header">
					<div class="row align-items-center">
						<div class="resume-title col-12 col-md-6 col-lg-8 col-xl-9">
							<h2 class="resume-name mb-0 text-uppercase">Alexis Juglair</h2>
							<div class="resume-tagline mb-3 mb-md-0">Développeur web</div>
						</div><!--//resume-title-->
						<div class="resume-contact col-12 col-md-6 col-lg-4 col-xl-3">
							<ul class="list-unstyled mb-0">
								<li class="mb-2"><i class="fas fa-birthday-cake fa-fw fa-lg me-2 "></i>25/09/1990 - 30 ans</li>
								<li class="mb-2"><i class="fas fa-phone fa-fw fa-lg me-2 "></i><a class="resume-link" href="tel:0682289934">06 82 28 99 34</a></li>
								<li class="mb-2"><i class="fas fa-envelope fa-fw fa-lg me-2"></i><a class="resume-link" href="#contact">alexis.juglair@gmail.com</a></li>
								<li class="mb-2"><i class="fas fa-globe fa-fw fa-lg me-2"></i><a class="resume-link" href="https://alexisj802.promo-73.codeur.online/">https://alexisj802.promo-73.codeur.online/</a></li>
								<li class="mb-0"><i class="fas fa-map-marker-alt fa-fw fa-lg me-2"></i>Bourg-en-Bresse</li>
							</ul>
						</div><!--//resume-contact-->
					</div><!--//row-->
					
				</div><!--//resume-header-->
				<hr>
				<div class="resume-intro py-3">
					<div class="row align-items-center">
						<div class="col-12 col-md-3 col-xl-2 text-center">
						    <img class="resume-profile-image mb-3 mb-md-0 me-md-5  ms-md-0 rounded mx-auto" src="assets/images/profile.png" alt="image">
						</div>				
						<div class="col text-start">
							<p class="mb-0">Passionné par le code et ayant fait un BTS dans ce domaine, je souhaiterais mettre mes compétences techniques au service de votre entreprise. J'ai décidé dernièrement de me spécialiser dans le web en effectuant une nouvelle formation. </p> 
						</div>
						<div class="col text-start">
							<p class="mb-0">Actuellement à la recherche d'un stage pour parfaire mon projet professionel, en vue de la certification de Développeur Web et Web Mobile.</p>
						</div><!--//col-->
					</div>
				</div><!--//resume-intro-->
				<hr>
				<div class="resume-body">
					<div class="row">					
						<div class="resume-main col-12 col-lg-8 col-xl-9 pe-0 pe-lg-5">
							<section class="work-section py-3">	
								<h3 class="text-uppercase resume-section-heading mb-4">Expériences Professionnelles</h3>						
								
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<div class="item mb-3 border-bottom">									
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="http://www.2bsystem.fr/" target="_blank">
													<img src="assets/images/company/2bsystem.png" alt="2bsystem">											
													<h4 class="py-2 px-2 mb-0">2BSystem</h4>
												</a>											
												<div class="text-muted mb-1">2020</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Développeur web</h5>																		
											</div>
											<div class="item-content">
												<p>Développement d'un portail web pour les clients des clients dans le domaine de l'agroalimentaire (J2EE, Bulma).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="http://www.acg-synergies.fr/" target="_blank">
													<img src="assets/images/company/acg-synergies.png" alt="acg-synergies">											
													<h4 class="py-2 px-2 mb-0">ACG Synergies</h4>
												</a>											
												<div class="text-muted mb-1">2018 - 2019</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Développeur</h5>																		
											</div>
											<div class="item-content">
												<p>Développement de projet et correction de bugs sur le progiciel de logement social Aravis (Plex, AS400, Scrum).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.sodipan01.fr/" target="_blank">
													<img src="assets/images/company/sodipan.png" alt="sodipan">											
													<h4 class="py-2 px-2 mb-0">Sodipan</h4>
												</a>											
												<div class="text-muted mb-1">2018</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Développeur web</h5>																		
											</div>
											<div class="item-content">
												<p>Développement des trois sites web de l'entreprise sous Wordpress, référencement, formation utilisateur, rédaction de la documentation, mise en ligne de produits.</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.reseau-canope.fr/academie-de-lyon/atelier-canope-01-bourg-en-bresse.html" target="_blank">
													<img src="assets/images/company/reseau-canope.png" alt="reseau-canope">											
													<h4 class="py-2 px-2 mb-0">Réseau Canopé</h4>
												</a>											
												<div class="text-muted mb-1">2016 - 2017</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Technicien/développeur informatique</h5>																		
											</div>
											<div class="item-content">
												<p>Gestion des postes/du matériel informatiques/tablettes iPad-Android, développement d'une application web degestion de storyboard (HTML, CSS, PHP, JavaScript, jQuery), réalisation de web documentaires (Klynt).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.ameli.fr/assure/adresses-et-contact/points-accueil/agence-de-macon/" target="_blank">
													<img src="assets/images/company/cpam.png" alt="cpam">											
													<h4 class="py-2 px-2 mb-0">CPAM</h4>
												</a>											
												<div class="text-muted mb-1">2014</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Technicien informatique</h5>																		
											</div>
											<div class="item-content">
												<p>Gestion de requête, mise en forme de tableaux de résultats et formation publipostage.</p>
											</div>
										</div><!--//item-->
										<div class="item mb-0">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.g-p-i.fr/" target="_blank">
													<img src="assets/images/company/gpi.png" alt="gpi">											
													<h4 class="py-2 px-2 mb-0">GPI</h4>
												</a>											
												<div class="text-muted mb-1">2014</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Développeur</h5>																		
											</div>
											<div class="item-content">
												<p>Maintenance et correction de bugs sur les programmes du progiciel de transport D'Artagnan (Progress).</p>
											</div>
										</div><!--//item-->
									</div>

									<div class="col-sm-12 col-md-6">
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.nexans.fr/fr/" target="_blank">
													<img src="assets/images/company/nexans.png" alt="nexans">											
													<h4 class="py-2 px-2 mb-0">Nexans</h4>
												</a>											
												<div class="text-muted mb-1">2013</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Développeur</h5>																		
											</div>
											<div class="item-content">
												<p>Suite et fin du développement d'une application de gestion de lignes de production (VB.net avec SGBD Access).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-5 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.nexans.fr/fr/" target="_blank">
													<img src="assets/images/company/nexans.png" alt="nexans">											
													<h4 class="py-2 px-2 mb-0">Nexans</h4>
												</a>											
												<div class="text-muted mb-1">2013</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Stagiaire développeur</h5>																		
											</div>
											<div class="item-content">
												<p>Développement de 2 applications de gestion de lignes de production (VBA et VB.net avec SGBD Access).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="http://erea71-claudebrosse.ac-dijon.fr/" target="_blank">
													<img src="assets/images/company/erea.png" alt="erea">											
													<h4 class="py-2 px-2 mb-0">EREA</h4>
												</a>											
												<div class="text-muted mb-1">2012</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Stagiaire développeur</h5>																		
											</div>
											<div class="item-content">
												<p>Développement d'une application de gestion des stocks (VB.net avec SGBD Access).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="http://www.ain.gouv.fr/" target="_blank">
													<img src="assets/images/company/prefecture-ain.png" alt="prefecture-ain">											
													<h4 class="py-2 px-2 mb-0">Préfecture de l'Ain</h4>
												</a>											
												<div class="text-muted mb-1">2011</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Stagiaire technicien informatique</h5>																		
											</div>
											<div class="item-content">
												<p>Développement d'un script de sauvegarde (AutoIt), remplacement de matériel, prise en main à distance (VMware).</p>
											</div>
										</div><!--//item-->
										<div class="item mb-3 border-bottom">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="https://www.ellipseinfo.com/" target="_blank">
													<img src="assets/images/company/ellipse.png" alt="prefecture-ain">											
													<h4 class="py-2 px-2 mb-0">Ellipse Informatique</h4>
												</a>											
												<div class="text-muted mb-1">2010</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Stagiaire technicien informatique</h5>																		
											</div>
											<div class="item-content">
												<p>Montage unité centrale, (ré)installation de système d'exploitation, changement de pièces défectueuses, transfert de données.</p>
											</div>
										</div><!--//item-->
										<div class="item mb-0">
											<div class="item-heading row align-items-center mb-2">
												<a class="text-decoration-none d-md-flex mb-1" href="#">
													<img src="assets/images/company/6cinfo.png" alt="6cinfo">											
													<h4 class="py-2 px-2 mb-0">6C Info</h4>
												</a>											
												<div class="text-muted mb-1">2010</div>
												<h5 class="item-title col-12 col-md-6 col-lg-8 mb-2 mb-md-0 text-primary">Stagiaire technicien informatique</h5>																		
											</div>
											<div class="item-content">
												<p>Installation de système d'exploitation, changement de pièces défectueuses, transfert de données, installation de CPL, installation de logiciels.</p>
											</div>
										</div><!--//item-->
									</div>
								</div>
								
							</section><!--//work-section-->	
						</div><!--//resume-main-->

						<aside class="resume-aside col-12 col-lg-4 col-xl-3 px-lg-4 pb-lg-4">
							<section class="skills-section py-3">
								<h3 class="text-uppercase resume-section-heading mb-4">Compétences</h3>
								<div class="item mb-5 text-center">
									<h4 class="item-title">Techniques</h4>
									<ul class="list-unstyled resume-skills-list">
										<li class="mb-3">
											<a href="https://html.spec.whatwg.org/multipage/" target="_blank" class="mx-2"><img src="assets/images/skills/html5.png" alt="html5" title="HTML5"></a>
											<a href="https://www.w3.org/Style/CSS/" target="_blank" class="mx-1"><img src="assets/images/skills/css3.png" alt="css3" title="CSS3"></a>
											<a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/" target="_blank" class="mx-2"><img src="assets/images/skills/javascript.png" alt="javascript" title="JavaScript"></a>
										</li>
										<li class="mb-3">
											<a href="https://www.php.net/" target="_blank" class="mx-1"><img src="assets/images/skills/php.png" alt="php" title="PHP"></a>
											<a href="https://git-scm.com/" target="_blank" class="mx-1"><img src="assets/images/skills/git.png" alt="git" title="Git"></a>
										</li>
										<li class="mb-3">
											<a href="https://www.mysql.com/" target="_blank" class="mx-1"><img src="assets/images/skills/mysql.png" alt="mysql" title="MySQL"></a>
											<a href="https://getbootstrap.com/" target="_blank" class="mx-1"><img src="assets/images/skills/bootstrap.png" alt="bootstrap" title="Bootstrap"></a>
										</li>
										<li class="mb-3">					
											<a href="https://fr.reactjs.org/" target="_blank" class="mx-1"><img src="assets/images/skills/react.png" alt="react" title="React"></a>
											<a href="https://symfony.com/" target="_blank" class="mx-1"><img src="assets/images/skills/symfony.png" alt="symfony" title="Symfony"></a>
											<a href="https://fr.wordpress.org/" target="_blank" class="mx-1"><img src="assets/images/skills/wordpress.png" alt="wordpress" title="WordPress"></a>										
										</li>
										<li class="mb-3">
											<a href="https://www.prestashop.com/fr/" target="_blank" class="mx-1"><img src="assets/images/skills/prestashop.png" alt="prestashop" title="PrestaShop"></a>											
											<a href="https://laragon.org/" target="_blank" class="mx-1"><img src="assets/images/skills/laragon.png" alt="laragon" title="Laragon"></a>
											<a href="https://code.visualstudio.com/" target="_blank" class="mx-1"><img src="assets/images/skills/vscode.png" alt="visualstudiocode" title="Visual Studio Code"></a>
										</li>
										<li>
											<a href="https://www.microsoft.com/fr-fr/windows/" target="_blank" class="mx-1"><img src="assets/images/skills/windows.png" alt="windows" title="Windows"></a>
											<a href="https://ubuntu.com/" target="_blank" class="mx-1"><img src="assets/images/skills/ubuntu.png" alt="ubuntu"title="Ubuntu"></a>
										</li>
									</ul>
								</div><!--//item-->
								<div class="item text-center">
									<h4 class="item-title">Savoir-être professionnel</h4>
									<ul class="list-unstyled resume-skills-list">
										<li class="mb-2">Autonomie</li>
										<li class="mb-2">Curiosité<li>
										<li class="mb-2">Force de proposition</li>
										<li>Rigueur</li>
									</ul>
								</div><!--//item-->
							</section><!--//skills-section-->
									<section class="education-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Formations</h3>
										<ul class="list-unstyled resume-education-list">
											<li class="mb-3">
												<div class="resume-degree font-weight-bold">Titre professionnel niveau 5 Développeur Web et Web Mobile </div>
												<div class="resume-degree-org text-muted">Onlineformapro</div>
												<div class="resume-degree-time text-muted">2021 - 2022</div>
											</li>
											<li class="mb-3">
												<div class="resume-degree font-weight-bold">BTS Systèmes Informatiques aux Organisations option Développement</div>
												<div class="resume-degree-org text-muted">Lycée Lamartine de Mâcon</div>
												<div class="resume-degree-time text-muted">2011 - 2013</div>
											</li>
											<li>
												<div class="resume-degree font-weight-bold">BAC professionnel Systèmes Electroniques Numériques</div>
												<div class="resume-degree-org text-muted">Lycée Saint Joseph de Bourg-en-Bresse</div>
												<div class="resume-degree-time text-muted">2008 - 2011</div>
											</li>
										</ul>
									</section><!--//education-section-->

									<section class="skills-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Langues</h3>
										<ul class="list-unstyled resume-lang-list">
											<li class="mb-2">Français <span class="text-muted">(Maternelle)</span></li>
											<li>Anglais <span class="text-muted">(Technique)</span></li>
										</ul>
									</section><!--//certificates-section-->
									<section class="skills-section py-3">
										<h3 class="text-uppercase resume-section-heading mb-4">Hobbies
										</h3>
										<ul class="list-unstyled resume-interests-list mb-0">
											<li class="mb-2">Footing</li>
											<li class="mb-2">Informatique et multimédia</li>
											<li>Lecture et écriture</li>
										</ul>
									</section><!--//certificates-section-->
									
								</aside><!--//resume-aside-->
							</div><!--//row-->
						</div><!--//resume-body-->
						<hr>
						<div class="resume-footer text-center">
							<ul class="resume-social-list list-inline mx-auto mb-0 d-inline-block text-muted">
								<li class="list-inline-item mb-lg-0 me-3"><a class="resume-link" href="https://github.com/AlexisJuglair" target="_blank"><i class="fab fa-github-square fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">github.com/AlexisJuglair</span></a></li>
								<li class="list-inline-item mb-lg-0 me-lg-3"><a class="resume-link" href="https://www.linkedin.com/in/alexis-juglair/" target="_blank"><i class="fab fa-linkedin fa-2x me-2" data-fa-transform="down-4"></i><span class="d-none d-lg-inline-block text-muted">linkedin.com/in/alexis-juglair</span></a></li>
							</ul>
						</div><!--//resume-footer-->
					</article>
					
		</div><!--//container-->

		<section id="portfolio" class="cta-section theme-bg-light py-5">
			<div class="container text-center single-col-max-width">
				<h2 class="heading mb-3">Portfolio</h2>
			</div><!--//container-->
		</section>

		<!-- portfolio -->
		<div class="container px-3 px-lg-5 mb-5">
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/sodipan01.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Sodipan 01</h5>
							<p class="card-text">Reprise du site Sodipan 01 sous Wordpress avec un nouveau thème.</p>
							<a href="https://www.sodipan01.fr/" target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/sodipan-fermetures.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Sodipan Fermetures</h5>
							<p class="card-text">Reprise du site Sodipan Fermetures sous Wordpress avec un nouveau thème.</p>
							<a href="https://www.sodipan-fermetures.fr/" target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/sodipan-equipement.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Sodipan Equipement</h5>
							<p class="card-text">Reprise du site Sodipan Equipement sous Wordpress (précédemment sous Prestashop) avec un nouveau thème.</p>
							<a href="https://www.sodipan-equipement.fr/" target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/casse-briques.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Casse-briques</h5>
							<p class="card-text">Réalisation d'un casse-briques en formation en HTML, CSS et JavaScript.</p>
							<a href="/casse-briques" target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/dsm.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Dance School Manager</h5>
							<p class="card-text">Réalisation d'une application d'école de danses en formation en HTML, CSS, JavaScript/, PHP et MySQL.</p>
							<a target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/logops.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Logo PlayStation</h5>
							<p class="card-text">Reproduction d'un logo PlayStation en HTML et CSS</p>
							<a href="/challenges/logo_ps"  target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/horloge.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Horloge</h5>
							<p class="card-text">Réalisation d'une horloge en HTML, CSS et JavaScript.</p>
							<a href="/challenges/horloge" target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100 shadow-lg text-center border border-primary">
						<img src="assets/images/portfolio/symshop.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title text-primary">Tutoriel site e-commerce SymShop</h5>
							<p class="card-text">Réalisation d'un tutoriel de site e-commerce avec Symfony et Bootstrap.</p>
							<a target="_blank" class="btn btn-primary">
								<i class="fas fa-eye"></i>
								Voir
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section id="contact" class="cta-section theme-bg-light py-5">
			<div class="container text-center single-col-max-width">
				<h2 class="heading mb-3">Contact</h2>
			</div><!--//container-->
		</section>

		<div class="container px-3 px-lg-5 mb-5">
			<form id="formContact" class="needs-validation" name="formContact" novalidate>	
				<div id="formGroup" class="form-group mx-auto"> 
					<div class="row">
						<div class="col form-floating mb-4">
							<input type="text" class="form-control shadow-lg" id="floatingLastName" placeholder="Nom" name="nom" required>
							<label for="floatingLastName">Nom</label>
							<div class="invalid-feedback">
								Veuillez entrer un nom.
							</div>
						</div>
						<div class="col form-floating mb-4">
							<input type="text" class="form-control shadow-lg" id="floatingFirstName" placeholder="Prénom" name="prenom" required>
							<label for="floatingFirstName p-5">Prénom</label>
							<div class="invalid-feedback">
								Veuillez entrer un prénom.
							</div>
						</div>
					</div>
					<div class="form-floating mb-4">
						<input type="email" class="form-control shadow-lg" id="floatingEmail" placeholder="E-mail" name="email" required>
						<label for="floatingEmail">E-mail</label>
						<div class="invalid-feedback">
							Veuillez entrer un e-mail valide.
						</div>
					</div>
					<div class="form-floating mb-4">
						<input type="text" class="form-control shadow-lg" id="floatingObject" placeholder="Sujet" name="sujet" required>
						<label for="floatingObject">Sujet</label>
						<div class="invalid-feedback">
							Veuillez entrer un sujet.
						</div>
					</div>
					<div class="form-floating mb-4">
						<textarea class="form-control shadow-lg" placeholder="Message" id="floatingTextarea" name="message" required></textarea>
						<label for="floatingTextarea">Message</label>
						<div class="invalid-feedback">
							Veuillez entrer un message.
						</div>
					</div>
					<div id="buttonContact" class="d-grid gap-2 d-md-flex justify-content-md-end">
						<button class="btn btn-primary me-md-2" type="reset">
							<i class="fas fa-eraser me-2"></i>
							Reset
						</button>
						<button class="btn btn-primary" type="submit">
							<i class="fas fa-paper-plane me-2"></i>
							Envoyer
						</button>
					</div>
				</div>
			</form>
		</div>

		<footer class="footer bg-primary py-2 text-center">
			<div class="container">
				<span>&copy;<?php echo date("Y"); ?> Alexis Juglair</span>
			</div>
		</footer>
							
	</div><!--//main-wrapper-->

	<script src="code.js"></script>
	<script>colorNavbar();</script>
	<script>displayTitle();</script>
</body>
</html> 

