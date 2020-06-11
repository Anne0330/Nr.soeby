<?php

get_header();
?>

<!--title-->
  <h1><?php the_title(); ?></h1>


  <!-- kontingent og udstyr-->
  <div class="container-entry-content">

<!-- indlæg fra wordpress-->

    <?php
      if (have_posts()) : while (have_posts()) : the_post();
      the_content();
      endwhile;
      endif;
     ?>
 </div>

 <!--baggrund til KUN stel-->
<div class="stelbaggrund">
<section class="steludregner">
      <h2>Mangler du en cykel?</h2>
      <p>Ved brug af vores steludregner, kan vi hjælpe dig med at finde en cykel der passer dig. Ved at måle dit skridtlængde i cm, kan du skrive dem ind i boksen nedenfor.</p>

      <!-- inkluder udregneren-->
	<?php include 'stel_udregner.php'; ?>
</section>


<!--mail til funktion-->
<section class="tilmelding">

  <h3>Tilmeld mig!</h3>
    <p>Ved tilmelding skal du oplyse navn, alder, mobil nr, og eventuelt hvilken stel størrelse du kan bruge. Hvis du ikke ved hvad stel størrelse du skal have, kan du tage vores udregning på vores side!</p>

    <form action="mailto:anne.meh@hotmail.com?subject=Tilmelding&body=Navn%3A%20%0AAlder%3A%20%0AMobil%20nummer%3A%20%0AStelst%C3%B8rrelse%3A%20%0A" method="post" enctype="text/plain">
      <input type="submit" value="Tilmeld">
    </form>

</section>

</div>

<!--footer-->
  <?php get_footer(); ?>


<!--Styling til tilmeldings side-->
  <style>
<?php include 'styletilmelding.css'; ?>
  </style>