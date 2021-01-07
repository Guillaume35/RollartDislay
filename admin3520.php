<?php


  $content = json_decode(file_get_contents('./display.json'));

  $ob= new stdClass(); 

  if(isset($_GET['displayLiveScore']) == "on"){
    $ob->displayLiveScore = true;
  } else {
    $ob->displayLiveScore = false;
  }

  if(isset($_GET['displayTeamScore']) == "on"){
    $ob->displayTeamScore = true;
  } else {
    $ob->displayTeamScore = false;
  }

  if(isset($_GET['displayFinalScore']) == "on"){
    $ob->displayFinalScore = true;
  } else {
    $ob->displayFinalScore = false;
  }

  if(isset($_GET['displaySkater']) == "on"){
    $ob->displaySkater = true;
  } else {
    $ob->displaySkater = false;
  }

  file_put_contents('./display.json', json_encode($ob));


?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Winter Cup display</title>
        <link rel="stylesheet" href="style.css">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    </head>

    <body>
      <form action="" method="get" class="form-example">
        <div>
          <?php if($content->displayLiveScore == true) : ?>
            <input type="checkbox" id="displayLiveScore" name="displayLiveScore" checked>
            <label for="displayLiveScore">Live Score</label>
          <?php else : ?>
            <input type="checkbox" id="displayLiveScore" name="displayLiveScore">
            <label for="displayLiveScore">Live Score</label>
          <?php endif ?>
        </div>

        <div>
          <?php if($content->displayTeamScore == true) : ?>
            <input type="checkbox" id="displayTeamScore" name="displayTeamScore" checked>
            <label for="displayTeamScore">Team Score</label>
          <?php else : ?>
            <input type="checkbox" id="displayTeamScore" name="displayTeamScore">
            <label for="displayTeamScore">Team Score</label>
          <?php endif ?>
        </div>

        <div>
          <?php if($content->displayFinalScore == true) : ?>
            <input type="checkbox" id="displayFinalScore" name="displayFinalScore" checked>
            <label for="displayFinalScore">Final Score</label>
          <?php else : ?>
            <input type="checkbox" id="displayFinalScore" name="displayFinalScore">
            <label for="displayFinalScore">Final Score</label>
          <?php endif ?>
        </div>

        <div>
          <?php if($content->displaySkater == true) : ?>
            <input type="checkbox" id="displaySkater" name="displaySkater" checked>
            <label for="displaySkater">Name Skater</label>
          <?php else : ?>
            <input type="checkbox" id="displaySkater" name="displaySkater">
            <label for="displaySkater">Name Skater</label>
          <?php endif ?>
        </div>

        <div>
          <input type="submit" id="send" value="Valider" >
        </div>
      </form>

      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <script src="script.js" type="text/javascript"></script>

    </body>
</html>


<?php


?>