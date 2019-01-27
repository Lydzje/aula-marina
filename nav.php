<?php 
$homeText       = "INICIO";
$speciesText    = "ESPECIE DEL MES";
$aulaMarinaText = "AULA MARINA";
$activitiesText = "ACTIVIDADES";
$projectsText   = "PROYECTOS";
$newsText       = "NOTICIAS";
$contactText    = "CONTACTO";
$lanVar = "?lan=es";
$esLan  = "<u>ES</u>";
$enLan  = "EN";
$esLink = $_SERVER['PHP_SELF'] . "?lan=es";
$enLink = $_SERVER['PHP_SELF'] . "?lan=en";

foreach ($_GET as $key => $value) { 
    if ($key != 'lan') {
        $esLink = $esLink . "&" . $key . "=" . $value;
        $enLink = $enLink . "&" . $key . "=" . $value;
    }
}

if (isset($_GET['lan'])) {
    if ( $_GET['lan'] == 'en') {
        $homeText       = "HOME";
        $speciesText    = "SPECIES OF THE MONTH";
        $aulaMarinaText = "AULA MARINA";
        $activitiesText = "ACTIVITIES";
        $projectsText   = "PROJECTS";
        $newsText       = "NEWS";
        $contactText    = "CONTACT";
        $lanVar = "?lan=en";
        $esLan = "ES";
        $enLan = "<u>EN</u>";
    }
}
?>

<div class="header">
    <div class="logo-nav">
        <div class="logo">
            <a href="./index.php<?php echo $lanVar ?>">
                <img src="./res/aula-marina-logo.png">
            </a>
        </div>
        <div class="nav">
            <ul>
                <a href="index.php<?php echo $lanVar ?>"><li><?php echo $homeText ?></li></a>
                <a href="species-of-the-month.php<?php echo $lanVar ?>"><li><?php echo $speciesText ?></li></a>
                <a href="aula-marina.php<?php echo $lanVar ?>"><li><?php echo $aulaMarinaText ?></li></a>
                <a href="activities.php<?php echo $lanVar ?>"><li><?php echo $activitiesText ?></li></a>
                <a href="projects.php<?php echo $lanVar ?>"><li><?php echo $projectsText ?></li></a>
                <a href="news.php<?php echo $lanVar ?>"><li><?php echo $newsText ?></li></a>
                <a href="contact.php<?php echo $lanVar ?>"><li><?php echo $contactText ?></li></a>
            </ul>
        </div>
    </div>
    <div class="lang">
        <a href="<?php echo $esLink ?>"><?php echo $esLan ?></a>
        <span>/</span>
        <a href="<?php echo $enLink ?>"><?php echo $enLan ?></a>
    </div>
</div>


<div class="header-resp">
    <div class="logo-button-resp">
        <div class="logo-resp">
            <a href="./index.php<?php echo $lanVar ?>">
                <img src="./res/aula-marina-logo2.png">
            </a>
        </div>
        <div class="button-resp" onclick="toggleNavResp()">
            <i class="fas fa-bars button-nav-resp"></i>
            <i class="fas fa-times button-nav-resp" style="display:none"></i>
        </div>
    </div>
    <div class="nav-resp">
        <a href="index.php<?php echo $lanVar ?>"><?php echo $homeText ?></a>
        <a href="species-of-the-month.php<?php echo $lanVar ?>"><?php echo $speciesText ?></a>
        <a href="aula-marina.php<?php echo $lanVar ?>"><?php echo $aulaMarinaText ?></a>
        <a href="activities.php<?php echo $lanVar ?>"><?php echo $activitiesText ?></a>
        <a href="projects.php<?php echo $lanVar ?>"><?php echo $projectsText ?></a>
        <a href="news.php<?php echo $lanVar ?>"><?php echo $newsText ?></a>
        <a href="contact.php<?php echo $lanVar ?>"><?php echo $contactText ?></a>
    </div>
</div>




