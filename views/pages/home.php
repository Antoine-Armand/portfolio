<?php
    include 'app/content.php';
    require_once 'views/partials/header.php';

    include 'views/partials/menu.php';
?>

<main class="main-container">
    <h1 class="main-title"> Antoine </h1>
    <div class="image-container image-container-1">
        <div class="image-contents image-content-top">
            <a class="image-content-overlay"  href="https://comet.co" target="_blank">
                <h4 class="image-content-overlay-title">See the project</h4>
            </a>
            <img class="images image-top" src="assets/img/project-comet-website.jpg" alt='work_1'>
        </div>
        <div class="image-contents image-content-bottom">
            <a class="image-content-overlay"  href="https://drive.google.com/file/d/1X3NiEuJs6n783wYK2HSNI2UmWsSFhP3j/view?usp=sharing" target="_blank">
                <h4 class="image-content-overlay-title">See the project</h4>
            </a>
            <img class="images image-bottom" src="assets/img/project-comet-app.jpg" alt='work_1'>
        </div>
        <div class="project-text">
            <h3 class="project-label"> <?= $contentTable["projectLabelOne"] ?> </h3>
            <h2 class="project-title"> <?= $contentTable["projectTitleOne"] ?>  </h2>
            <ul class="project-description">
                <li class="descriptions">
                    Website project manager
                </li>
                <li class="descriptions">
                    Implementation of the design system
                </li>
                <li class="descriptions">
                    Use of Hubspot the CMS
                </li>
                <li class="descriptions">
                    Front-end integration of 15 web pages
                </li>
                <li class="descriptions">
                    Work with marketing and design teams
                </li>
                <li class="descriptions">
                    Accessibility, responsive and SEO
                </p>
            </ul>
        </div>
    </div>
    <div class="image-container image-container-2">
        <div class="image-contents image-content-top">
            <a class="image-content-overlay" href="https://drive.google.com/file/d/1bjytn7DzWqd0RpKKVF8cebV_FnkDVAzq/view?usp=sharing" target="_blank">
                <h4 class="image-content-overlay-title">See the project</h4>
            </a>
            <img class="images image-top" src="assets/img/project-orange-video.jpg" alt='work_2'>
        </div>
        <div class="image-contents image-content-bottom">
            <a class="image-content-overlay" href="https://drive.google.com/file/d/11zK7kxqizZ3KJrCjRpADrkiCDVU1hAca/view?usp=sharing" target="_blank">
                <h4 class="image-content-overlay-title">See the project</h4>
            </a>
            <img class="images image-bottom" src="assets/img/project-orange-document.jpg" alt='work_2'>
        </div>
        <div class="project-text">
            <h3 class="project-label"> Project Management, Design UX </h3>
            <h2 class="project-title"> Orange  </h2>
            <ul class="project-description">
                <li class="descriptions">
                    Product design
                </li>
                <li class="descriptions">
                    User experience
                </li>
                <li class="descriptions">
                    Motion design
                </li>
                <li class="descriptions">
                    Targeting and personas
                </li>
                <li class="descriptions">
                    Business model
                </li>
                <li class="descriptions">
                    Market Analysis
                </p>
            </ul>
        </div>
    </div>
    <div class="image-container image-container-3">
        <div class="image-contents image-content-top">
            <a class="image-content-overlay" href="https://drive.google.com/file/d/1zVltHZPKT-OxKVOCe3bI-EgDaC2ksp8R/view?usp=sharing" target="_blank">
                <h4 class="image-content-overlay-title">See the project</h4>
            </a>
            <img class="images image-top" src="assets/img/project-alpyos-document.jpg" alt='work_3'>
        </div>
        <div class="image-contents image-content-bottom">
            <a class="image-content-overlay" href="https://drive.google.com/file/d/1G8qKnz_LBvaqALC-ZpNKy6El6ADUeoDo/view?usp=sharing" target="_blank">
                <h4 class="image-content-overlay-title">See the project</h4>
            </a>
            <img class="images image-bottom" src="assets/img/project-alpyos-showroom.jpg" alt='work_3'>
        </div>
        <div class="project-text">
            <h3 class="project-label"> Project management, Business plan </h3>
            <h2 class="project-title"> Alpyos </h2>
            <ul class="project-description">
                <li class="descriptions">
                    Build of a business plan
                </li>
                <li class="descriptions">
                    Creation of a brand
                </li>
                <li class="descriptions">
                    Strategic Analysis
                </li>
                <li class="descriptions">
                    Brand & market analysis
                </li>
                <li class="descriptions">
                    Organization of a showroom
                </li>
                <li class="descriptions">
                    Communication plan
                </p>
            </ul>
        </div>
    </div>
    <div class="choice-menu">
        <ul class="choice-menu-container">
            <li class="choice-menu-objects selected"> 1 </li>
            <li class="choice-menu-objects"> 2 </li>
            <li class="choice-menu-objects"> 3 </li>
        </ul>
    </div>
</main>

<?php
require_once 'views/partials/footer.php';