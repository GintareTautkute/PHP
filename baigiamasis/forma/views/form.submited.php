<?php
            //Jei mygtukas nepaspaustas arba jei duomenys neįvesti, rodome formą.
            if(!isset($_POST['submit']) || empty($_POST['vardas']) || empty($_POST['pavarde']) || empty($_POST['message'])){
        ?>
        
        <form method="post" action="<?php $_PHP_SELF; ?>">
            <p>Įrašykite savo vardą ir pavardę.</p>
            <p>Vardas:  <input type="text" name="vardas" size="20" /><br />
            Pavardė:  <input type="text" name="pavarde" size="20" /></p>
            <input type="submit" name="submit" value="Siųsti" />
        </form>
        
        <?php
            //Jei mygtukas paspaustas ir duomenys įvesti, išvedame atsakymą.
            } else {
                //Vartotojo įvestus duomenis priskiriame kintamiesiems.
                $vardas = $_POST['vardas'];
                $pavarde = $_POST['pavarde'];
                
                //Išvedame vartotojo duomenimis.
                echo 'Vardas: ' . $vardas . '<br />Pavardė: ' . $pavarde;
            }
        ?>