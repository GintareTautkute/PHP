<section class="contact">
    <div class="container">
        <form id="contact-form" action="index.php" method="post">
            <h4>Parašykite mums</h4>
                <input type="text" name="vardas" placeholder="Jūsų vardas"required>
                <input type="email" name="email" placeholder="Jūsų el. pašto adresas"required>
                <textarea name="message" placeholder="Įrašykite savo žinutę čia" rows="8" required></textarea>
                <button name="submit" type="submit" id="contact-submit">Siųsti</button>
                <p class="copyright">&copy; <?php echo date('Y'); ?>. Visos teisės saugomos.</p>
        </form>
    </div>
</section>