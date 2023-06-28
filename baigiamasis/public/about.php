<?php
    require __DIR__ . '/../forma/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apie Mus</title>
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Baigiamasis</title>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
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
        <div class="container flex-container">
            <div class="logo">
                <a href="<?php echo 'index.php'; ?>"><img src="../images/logotipas.png" alt="Logo"></a>
            </div>
            <nav class="main-nav"> <!-- pagrindine navigacija puslapio virsuje -->
                <ul class="flex-container">
                    <li><a href="#top">Apie Mus</a></li>
                    <li><a href="#">Naujienos</a></li>
                    <li><a href="#">Darbo Laikas</a></li>
                    <li><a href="#">Kontaktai</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav"> <!-- pagrindine navigacija puslapio virsuje mobiliajai aplikacijai-->
                <ul id="mMenu" class="flex-container">
                    <li><a href="#">Apie Mus</a></li>
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
        <section class="about">
			<div class="container">
				<h5>Dvaro istorija</h5>
            </div>
		</section>
            <section class="istorija-pirmas">
			    <div class="container flex-container">
                    <img src="../images/dvaras.about.jpg" alt="Davro istorija"></a>
				    <p>Trakų Vokės dvaro sodyba formavosi XIX a. pirmoje pusėje, kai iš tuometinių savininkų Dombrovskių dvarvietę įsigijo grafas Juozapas Tiškevičius (1805-1844). Jau XIX a. pabaigoje dvaro valdos siekė apie 800 hektarų. Iš pradžių tai buvo Tiškevičių vasaros rezidencija, tačiau vėliau, grafams nusprendus čia apsigyventi nuolat, buvo pastatyti dvaro rūmai. Tiškevičių giminė Vokę valdė beveik 100 metų. </p>
			    </div>
		    </section>
            <div class="container">
                <h6>Statybos</h6>
            </div>
            <section class="istorija">
		        <div class="container flex-container">
                    <img src="../images/dvaras.about.statybos.jpg" alt="Statybos"></a>
				    <p>Po grafo Juozapo Tiškevičiaus mirties dvarą paveldėjo jo sūnus Jonas Vytautas Tiškevičius (1831-1892) kartu su žmona Izabele (1835-1907). Jie pasamdė  italų kilmės architektą iš Varšuvos Leandrą Liudviką Markonį (1834-1919), kuris, šeimininkams pageidaujant, puošnius dvaro rūmus suprojektavo pagal Varšuvos karališkų rūmų ant vandens Lazienkose pavyzdį. Dviejų aukštų rūmus puošė aštuonios skulptūros, įėjimą – skydas su Tiškevičių giminės Lelivos herbu. Rūmų vidus tviskėjo prabanga – ant sienų kabėjo vertingi paveikslai, gobelenai, pagal užsakymą Paryžiuje pagaminti baldai, kambarius šildė marmuro židiniai, o šviesą skleidė krištolo sietynai.</p>
			        </div>
		    </section>
            <div class="container">
                <h6>Aplinkos tvarkymas</h6>
            </div>
            <section class="istorija">
			    <div class="container flex-container">
                    <img src="../images/dvaras.about.tiskeviciai.jpg" alt="Aplinkos tvarkymas"></a>
                    <p>Po grafo Jono Vytauto Tiškevičiaus mirties 1892 m. Vokės dvarą paveldėjo jo jaunesnysis sūnus Jonas Juozapas (1867-1903). Jis į dvarą pakvietė garsų kraštovaizdžio architektą iš Prancūzijos Eduardą Fransua Andre (1840-1911) ir 1900 metais parkas buvo atidarytas  po dvejus metus trukusios rekonstrukcijos. Parke harmoningai sukomponuoti šiam kūrėjui būdingi kraštovaizdžio elementai: dirbtinės grotos ir uolos, sudarančios kalnų įspūdį, išradingai priderinti natūralūs vandens telkiniai, padailinti dirbtiniais elementais. Pertvarkius parką, atsirado net damoms ir džentelmenams skirtos akmeninės vonios, įtaisytos šlaito kaskadose. Tačiau dažnai jomis šeimininkai nesimėgavo. Varšuvoje išsirinkęs žmoną, Elžbietą Mariją (1871-1906), Jonas Juozapas dvare tapo retu svečiu. Žmona buvo silpnos sveikatos ir nuo kankinančios džiovos išsigelbėjimo ieškojo šiltesniuose kraštuose. </p>
			    </div>
		    </section>
            <div class="container">
                <h6>Jonas Mykolas Tiškevičius</h6>
            </div>
            <section class="istorija">
			    <div class="container flex-container">
                    <img src="../images/dvaras.about.mykolas.jpg" alt="Aplinkos tvarkymas"></a>
                    <p>Jonui Juozapui mirus, dvaras atiteko vyriausiajam jo sūnui Jonui Mykolui Tiškevičiui (1896-1939). Jis Trakų Vokėje gyveno su žmona Ona Janina Marija (1907-1983) iš Radvilų. Per savo 43-ąjį gimtadienį 1939 m. iš Palenkės skubėjęs namo pas šeimą, įsiprašė į privatų pusbrolio grafo Stanislovo Zamoiskio lėktuvą. Deja, kelionės tikslo nepasiekė. Žuvus vyrui, po kelių mėnesių žmona su trimis mažamečiais vaikais, Izabele, Zigmantu Jonu ir Ona Marija, baimindamiesi okupantų susidorojimo su bajorais, pasitraukė į vakarus. Paskutiniųjų Vokės grafų Jono Mykolo ir Onos Radvilaitės Tiškevičių vaikai kelis kartus lankėsi Lietuvoje, prie savo giminės kapų. 2014 metais savo motinai jie paskyrė atminimo lentą, kuri yra pakabinta Trakų Vokės dvaro sodybos koplyčioje.</p>
		    </section>
            <div class="container">
                <h6>Dvaro likimas</h6>
            </div>
            <section class="istorija">
			    <div class="container flex-container">
                    <img src="../images/dvaras.about.likimas.jpg" alt="Aplinkos tvarkymas"></a>
                    <p>Pirmojo pasaulinio karo metais nukentėjo ir rūmai, ir parkas: vokiečių armija sales pavertė ligonine, į rūmus leisdavo sau įjoti su arkliais, per didelius šalčius degino baldus, kirto medžius. Tarpukariu rūmuose gyventa taupiai ir kukliai. O be šeimininkų likęs dvaras visai nunyko. Karo metais jame apsigyveno vokiečių atkelti kolonistai iš Olandijos. Rūmų paveikslai, baldai, svečius žavėję krištolo sietynai, kiti vertingi daiktai buvo išgrobstyti, puošyba sunaikinta. Po karo 1945 m. dvaras  tapo Ministrų Tarybos vila, vėliau – Dotnuvos žemdirbystės instituto Vokės filialas. 2002 m. dvaras perleistas Lietuvos bajorų karališkajai sąjungai. Nuo 2014 m. čia veikia Vilniaus miesto savivaldybės įsteigta viešoji įstaiga „Trakų Vokės dvaro sodyba“. Šiuo metu vyksta restauravimo ir tvarkybos darbai, dvaras atviras visuomenei, čia vedamos ekskursijos, edukacinės programos, vyksta parodos, koncertai, spektakliai ir kt. renginiai. Dvaras vertinamas ir kino kūrėjų – jame filmuojami istoriniai kino filmai, serialai.</p>
			    </div>
		    </section>
        <?php
            include('../forma/views/content.php');   
            include('../forma/views/footer.php');   
        ?>
</body>
</html>