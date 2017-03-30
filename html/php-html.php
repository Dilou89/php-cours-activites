<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP & HTML</title>
</head>
<body>
  <h1>Liste des élèves</h1>
  <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
  <?php
        //students
  $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];

  ?>
  <ul>
   <?php for ($i=0; $i <=count($students) ; $i++) { 

    echo $students[$i]."<br/>";
  } ?>
</ul>
<hr>
<h1>Date du jour</h1>
<form>

 <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
 <?php 
 $days = ["01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23"];
 $months=["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
 $years=["2015","2016","2017"];
 ?>

 <label for='day'>Day</label>
 <select  name='day'>
   <?php 
   foreach ($days as $day){
    echo '<option value ="'.$day.'">'.$day."</option>";}
    ?>
  </select> 

  <label for="month">Month</label>
  <select  name="month">
    <?php 
    foreach($months as $month ){
      echo '<option value ="'.$month.'">'.$month."</option>";}
      ?>
    </select>
    <label for="year">Year</label>
    <select  name="year">
      <?php 
      foreach($years as $year ){
        echo '<option value ="'.$year.'">'.$year."</option>";}
        ?></select>
      </form>
      <hr> 

      <p>

        <?php 

        if($_GET["sexe"]=="fille"){

          echo "Je suis une fille ";
        }
        if($_GET["sexe"]=="garcon"){

          echo "Je suis un garcon ";
        }

        if(($_GET["sexe"]!="fille")&&($_GET['sexe']!="garcon")){

          echo "Je suis indéfini ";}
          ?></p>


        </body>
        </html>
