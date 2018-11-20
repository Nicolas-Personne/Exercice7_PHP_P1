<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <a href="http://PHP/"><button type="button" class="btn btn-danger" name="button">Accueil</button></a>
  <?php
  $name = 'Personne';
  $lastName = 'Nicolas';
  $age = 25;
  settype($age, 'integer');
  echo  'Bonjour'.' '.$lastName.' '.$name.', tu as '.$age.' ans.';
  ?>
</body>
</html>
