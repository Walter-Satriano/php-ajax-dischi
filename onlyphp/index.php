<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-dischi</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .container {
        width: 80%;
        margin: auto;
      }

      .title {
        text-align: center;
        margin-bottom: 50px;
      }

      .disc_list {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
      }

      ul {
        list-style-type: none;
        width: 200px;
        padding-left: 40px;
        margin: 20px 0;
      }
    </style>

    <?php

      include "vars.php";

      function printDiscs($album) {
        echo "<ul>";
          echo "<li>" . $album["title"] . "</li>";
          echo "<li>" . $album["author"] . "</li>";
          echo "<li>" . $album["year"] . "</li>";
        echo "</ul>";
      }

    ?>

  </head>
  <body>

    <div class="container">
      <div class="title">
        <h1>BOOL-RECORDS</h1>
      </div>

      <div class="disc_list">
        <?php

          foreach ($albums as $album) {
            printDiscs($album);
          }

        ?>
      </div>
    </div>

  </body>
</html>
