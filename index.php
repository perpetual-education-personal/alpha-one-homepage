<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <meta charset="utf-8">

    <title>alpha 1 homepage</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="The only place on the internet to see all the alpha-1 projects.">

    <meta property="og:image" content="images/a1-placeholder">
  </head>
  <body>
  <?php
  include 'student-data.php';
  include "functions.php";
  ?>  
    <main class="site-main">
      <section class="portal-cards">
        <inner-column>
          <h1 class="homepage-title">welcome to the homepage of <span class="cohort">Alpha-1</span></h1>


          <ol class="student-list">
            <?=studentCardGenerator("marco", "Bauhaus enthusiast, web designer and programmer", "enter!")?>
            
            <?=studentCardGenerator("SheriffDerek", "The Place to go - to see all the bare-bones assignment solutions", "Engage!")?>

            <?=studentCardGenerator("student name", "tagline", "cta!")?>




          </ol>
        </inner-column>
      </section>
    </main>
  </body>
</html>