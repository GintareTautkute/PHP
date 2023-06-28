<?php
    require __DIR__ . '/../forma/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baigiamasis</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/baigiamasis.js" defer></script>
    <script>
        function myFunction() {
            var x = document.getElementById('mMenu');
            if(x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</head>
<body>
    <header class="site-header">
        <div class="container flex-container"> <!--pasiziureti sita funkcija -->
            <div class="logo">
                <a href="#top"><img src="../images/logotipas.png" alt="Logo"></a>
            </div>
            <nav class="main-nav"> <!-- pagrindine navigacija puslapio virsuje -->
                <ul class="flex-container">
                    <li><a href="<?php echo 'about.php'; ?>">Apie Mus</a></li>
                    <li><a href="#">Naujienos</a></li>
                    <li><a href="#">Darbo Laikas</a></li>
                    <li><a href="#">Kontaktai</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav"> <!-- pagrindine navigacija puslapio virsuje mobiliajai aplikacijai-->
                <ul id="mMenu" class="flex-container">
                    <li><a href="<?php echo 'about.php'; ?>">Apie Mus</a></li>
                    <li><a href="#">Naujienos</a></li>
                    <li><a href="#">Darbo Laikas</a></li>
                    <li><a href="#">Kontaktai</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="bi bi-list"></i>
                </a>
            </nav>
        </div>
	</header>
        <section class="dvaras">
            <div class="container"></div>
            <img src="../images/dvaras-titulinis.jpg" alt="Dvaras"></a>
		<section class="welcome">
			<div class="container">
				<h1>Laukiame jūsų atsinaujinusiame dvare!</h1>
				<p>Kviečiame į ekskursijas po atsinaujinusį dvarą bei pasivaikščiojimams po dvaro sodybos teritorijoje esantį parką – grafų Tiškevičių įkurtą, Eduardo Fransua Andre projektuotą, vieną gražiausių Lietuvoje peizažinio stiliaus parkų.</p>
			</div>
		</section>
    <section class="services">
        <div class="container">
		    <h2>Paslaugos</h2>
	    </div>
		<section class="slider">
			<div class="slider-container">
				<div><img src="../images/dvaras.jpg" alt="Renginių organizavimas"></div>
				<div><img src="../images/dvaras1.jpg" alt="Fotosesijos"></div>
				<div><img src="../images/dvaras2.jpg" alt="Ekskursijos"></div>
				<div><img src="../images/dvaras3.jpg" alt="Edukacija"></div>
			</div>
	</section>
        <div class="section-content flex-container">
			<div class="service">
                    <h3>Renginių organizavimas</h3>
                    <p>Vestuvių ceremonijos, puotos, konferencijos, paskaitos, seminarai, koncertai ir pan. Erdvios ir jaukios rūmų salės laukia jūsų.</p>
            </div>
            <div class="service">
                    <h3>Fotosesijos</h3>
                    <p>Neužmirštamos laimingiausios dienos kadrai dvaro rūmuose –kiekvienos nuotakos svajonė. Mados dizaineriai taip pat savo kūrinių fotosesijoms rūmuose randa puikių rakursų.</p>
            </div>
            <div class="service">
                    <h3>Ekskursijos</h3>
                    <p>Įdomias istorijas apie dvaro sodybą, rūmus, grafų Tiškevičių gyvenimą Trakų Vokėje išgirsite ekskursijų metu. Organizuojamos tik grupinės ekskursijos (nemažiau 10 žmonių). Ekskursijos kaina 1 žmogui 5 €.</p>
            </div>
            <div class="service">
                    <h3>Edukacija</h3>
                    <p>Edukacinės ekskursijos, orientaciniai žaidimai, edukacinės ir kūrybinės dirbtuvės įvairaus amžiaus vaikams, šeimoms ir suaugusiems.</p>
            </div>
		</div>
	</section>
        <?php
            include('../forma/views/content.php');   
            include('../forma/views/footer.php');
        ?>
</body>
</html>