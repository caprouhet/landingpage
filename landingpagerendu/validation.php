<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <section class="container">
    <br>
    <h1>Les données du formulaire ont été traitées.</h1>
    <br>
    <div class="alert alert-secondary" role="alert">
      Cette page traite directement votre formulaire et affiche les informations/données envoyées.<br>
      <b>Vérifiez ci-dessous les informations renvoyées par votre formulaire, si cela correspond à ce que demande la consigne du challenge.</b>
      <br>
      
    </div>
    Tu utilises la méthode <b><?php echo $_SERVER['REQUEST_METHOD']; ?></b>
    <br><br>
    Les données que tu m'as envoyées sont :
    <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      print_table($_POST);
    }
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      print_table($_GET);
    }
    ?>


    <?php
    function print_table($array) {
      echo "<table class='table'>";
        echo "<tr><th>Name</th><th>Value</th></tr>";
        foreach($array as $key=>$row) {
            echo "<tr>";
              echo "<td>" . $key . "</td>";
              echo "<td>" . $row . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

  </section>
</body>
</html>
