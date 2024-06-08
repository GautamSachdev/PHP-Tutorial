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
        echo "<b>2. Str_word_count():-</b>It is used to cont the word in a string.";
        echo "<br>";
        echo "<b>Syntax:-</b> str_word_count(variable)";
        echo "<br>";
        $input = "I am a college student named Gautam Sachdev";
        echo " This is actula value of <b>input</b> variable: - ".$input;
        echo "<br>";
        echo "The number of words in Input variable are: ".str_word_count($input);
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>