<?php
include "db/connection.php";
include "php-functions/functions.php";

getBg(1, $bg);
if ($bg) {
  $bg = $bg->link;
} else {
  $bg = "";
}

getFeatureds($featureds);

$titleText = "Inicio";
if (isset($_GET['lan'])) {
  if ( $_GET['lan'] == 'en') {
    $titleText = "Home";
  }
}
?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo $titleText ?></title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <script type="application/ld+json">
      {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "https://aula-marina.000webhostapp.com",
          "sameAs": [
              "https://www.facebook.com/AulaMarinaUnvAlm",
              "http://https://twitter.com/aulamarinaual",
              "https://www.instagram.com/aula_marina/"
          ],
          "logo": "https://aula-marina.000webhostapp.com/res/logoTransparente.png"
      }
    </script>
  <style>
    footer {
      margin-top: 0 !important;
    }
  </style>  
  </head>

  <body>
    <div class="bg bg-index"></div>
    <script>var bglink = "<?php echo $bg ?>";</script>
    <div class="wrapper">
			<?php include "nav.php"?>
      <div class="index-content">
      <?php
        for ($i=0; $i < count($featureds); $i++) { 
            $id   = $featureds[$i]->id;
            $text = $featureds[$i]->text;
            $link = $featureds[$i]->link.$lanVar;
            $img  = $featureds[$i]->img;

            if (isset($_GET['lan'])) {
              if ( $_GET['lan'] == 'en') {
                $text = $featureds[$i]->en_text;
              }
            }
            
            if ($i==0) {
              echo "
              <div class=\"text slider-content\" style=\"cursor:pointer;\" onclick=\"window.location='$link'\">
                <span>$text</span>
              </div>
              ";
            } else {
              echo "
              <div class=\"text slider-content\" style=\"display:none;opacity:0;cursor:pointer;\" onclick=\"window.location='$link'\">
                <span>$text</span>
              </div>
            ";
            }
            
        }
        ?>
				
				<div class="slider-buttons">
					<div class="slider-button" onclick="showSlide(0)" onmouseover="stopSlider()" onmouseout="resumeSlider()" style="background-color:white"></div>
					<div class="slider-button" onclick="showSlide(1)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
					<div class="slider-button" onclick="showSlide(2)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
					<div class="slider-button" onclick="showSlide(3)" onmouseover="stopSlider()" onmouseout="resumeSlider()"></div>
				</div>
        
      </div>
    </div>
		<?php include "footer.php"?>
    
    <script src="js/main.js"></script>
  </body>
  
</html>
