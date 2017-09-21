<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Colour Scheme Vs Colour Scheme | CSVSCS</title>
    <style>
      body {
        margin: auto;
        max-width: 90%;
      }
    </style>
  </head>
  <body>
    <h1>Welcome to Colour Scheme Vs Colour Scheme</h1>
    <p>Here, we test our colour scheme and see how it stacks up against all permutations of the colours as background and foreground colours.</p>
    <p>I <em>think</em> this could be handy for part of our accessibility testing.</p>
    <?php
      $bg_colours = [
        "colour_1" => "#ff0000",
        "colour_2" => "#ffff00",
        "colour_3" => "#BADA55",
        "colour_4" => "#7D2BF6",
      ];
      $greys = [
        "black" => "#000000",
        "grey_1" => "#111111",
        "grey_2" => "#222222",
        "grey_3" => "#333333",
        "grey_4" => "#444444",
        "grey_5" => "#555555",
        "grey_6" => "#666666",
        "grey_7" => "#777777",
        "grey_8" => "#888888",
        "grey_9" => "#999999",
        "white" => "#ffffff",
      ];

      foreach ($bg_colours as $bg_colour_key => $bg_colour_value) {
        print '<h2>' . $bg_colour_key . ' vs Colour Scheme</h2>';
        print '<div style="background: ' . $bg_colour_value . '; padding: 1rem; margin-bottom: 1rem;">';
        foreach ($bg_colours as $fg_colour_key => $fg_colour_value) {
          print '<p style="color: ' . $fg_colour_value . '; margin: 1rem; ">This is a test of ' . $fg_colour_key . '. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, <strong>This is some strong text</strong> tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>';
        }
        foreach ($greys as $grey_colour_key => $grey_colour_value) {
          print '<p style="color: ' . $grey_colour_value . '; margin: 1rem; ">This is a test of ' . $grey_colour_key . '. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, <strong>This is some strong text</strong> tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>';
        }
        print '</div>';
      }

    ?>
  </body>
</html>
