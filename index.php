<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6 Partie 4 PHP</title>
  </head>
  <body>
    <p>
      <?php
        $firstName = 'John ';
        $lastName = 'Doe ';
        $age = 24;
        function idGenerator($firstName, $lastName, $age)
          {
            return 'Bonjour ' . $lastName . $firstName . ',tu as ' . $age . 'ans';
          }
          echo idGenerator($firstName, $lastName, $age);
      ?>
    </p>
  </body>
</html>
