<?php

get_header();
?>

<!--title-->
  <h1><?php the_title(); ?></h1>


 
  <div class="container-entry-content">

  <section class="textbokse">  <!-- kontingent og udstyr-->

    <section class="regler">

        <h2>Regler og udstyr</h2>
        <p>Vi forventer at rytterne overholde alle færdselsregler, når vi er på tur. Det vil sige at man <strong>skal</strong> have cykelhjelm på.</p>


    </section>


    <section class="kontingent">

        <h2>Kontingent</h2>
        <p>Det koster 350 kr. pr. år. Betaling foregår gennem klubben, ved at betale kontant eller med mobilepay.</p>

    </section>

  </section>


 <!--baggrund til KUN stel-->
<div class="stelbaggrund">
<section class="steludregner">
      <h2>Mangler du en cykel?</h2>
      <p>Ved brug af vores steludregner, kan vi hjælpe dig med at finde en cykel der passer dig. <br>Det gør man ved at måle dit skridtlængde og skriver det ind i boksen.</p>

      <!-- inkluder udregneren-->
	<?php include 'stel_udregner.php'; ?>
</section>


<!--mail til funktion-->
<section class="tilmelding">

  <h2>Tilmelding</h2>
    <p>Ved tilmelding skal du oplyse navn, alder, mobil nr, og eventuelt hvilken stel størrelse du kan bruge. Hvis du ikke ved hvad stel størrelse du skal have, kan du tage vores udregning på vores side!</p>

    <form action="mailto:anne.meh@hotmail.com?subject=Tilmelding&body=Navn%3A%20%0AAlder%3A%20%0AMobil%20nummer%3A%20%0AStelst%C3%B8rrelse%3A%20%0A" method="post" enctype="text/plain">
      <input type="submit" value="Tilmeld">
    </form>

</section>

</div>
</div>
<!--footer-->
  <?php get_footer(); ?>


<!--Styling til tilmeldings side-->
  <style>
<?php include 'styletilmelding.css'; ?>
  </style>