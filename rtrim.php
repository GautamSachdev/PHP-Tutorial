<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP String Function</a> 
  </div>
</nav>
    <div class="container">
        <?php
             echo "<b>7. Str_pad():-</b>It is used to add padding at the left, the right, both side to the specific padding length.";
             echo "<br>";
             echo "<b>Syntax:-</b> str_pad(variable)";
             echo "<br>";
             $input = "Dog is faithful ";
             echo " This is actula value of <b>input</b> variable: - ".$input;
             echo "<br>";
             echo "<b>Ex:-</b>";
             echo "<br>";
             echo str_pad($input,10);
             echo "<br>";
             echo str_pad($input,10,"-=",STR_PAD_LEFT);
             echo "<br>";
             echo str_pad($input,10,"-",STR_PAD_BOTH);
             echo "<br>";
             echo str_pad($input,6,"___");
             echo "<br>";
             echo str_pad($input,3,"*");

             echo "<br>";
             echo "BY default padding is Right."
            

        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>