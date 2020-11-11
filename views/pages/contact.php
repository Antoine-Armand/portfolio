<?php
    include 'app/content.php';
    include 'views/partials/header.php';
    include 'views/partials/menu.php';
?>

<main class="main-container">
    <h1 class="main-title"> Contact </h1>
    <div class="contact-container">
        <img class="image-profile" src="assets/img/photo_antoine_armand.jpg" alt="Antoine Armand profil">
        <div class="text-container">
            <div class="name-container">
                <h2 class="name firstname"> Antoine </h2>
                <h2 class="name lastname"> Armand </h2>
            </div>
            <div class="button-container">
                <a class="buttons button-email" href="mailto:antoine.armand99@gmail.com">Email</a>
                <a class="buttons button-linkedin" href="https://www.linkedin.com/in/antoine-armand/" target="_blank">LinkedIn</a>
                <a class="buttons button-twitter" href="https://twitter.com/AntoineArmnd" target="_blank">Twitter</a>
                <a class="buttons button-instagram" href="https://www.instagram.com/antoine.armand/" target="_blank">Instagram</a>
            </div>
        </div>
    </div>
</main>

<?php
require_once 'views/partials/footer.php';