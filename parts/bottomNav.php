<section class="bottomNav">
<nav >
    <div class='hover' onclick='openModal("projets.php", "modal_projets" ,"Portfolio", 10)' >
        <img src="../assets/icons/dossier.svg" alt="" srcset="" >
        <p>Portfolio</p>

    </div>
    <div class='hover' id='openSkills'>
        <img src="../assets/icons/coding.svg" alt="" srcset="">
        <p>Compétences</p>
    </div>
    <div class='hover'>
        <img src="../assets/icons/designer.png" alt="" srcset="">
        <p>Webdesign</p>
    </div>

    <div class='hover' id='openForm'>
        <img src="../assets/icons/un-message.svg" alt="" srcset="">
        <p>Contact</p>
    </div>
    <div id='projet' class='hover'>
        <a href="https://esprit-sud01.fr/" target='_blank'>
        <img src="../assets/icons/logo_esprit_sud.png" alt="" srcset="">
        <p>Esprit Sud</p>
        </a>
    </div>
    
</nav>
</section>

<?php include('../parts/skills.php')?>
<?php include('../parts/form.php')?>