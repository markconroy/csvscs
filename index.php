<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Colour Scheme Vs Colour Scheme | CSVSCS</title>
    <style>
      body {
        font-family: sans-serif;
        line-height: 1.5;
        margin: auto;
        max-width: 90%;
      }
    </style>
  </head>
  <body>
    <h1>Welcome to Colour Scheme Vs Colour Scheme</h1>
    <p>Here, we test our colour scheme and see how it stacks up against all permutations of the colours as background and foreground colours.</p>
    <p>I <em>think</em> this could be handy for part of our accessibility testing.</p>
    <p>If you see a blank space on a background, that's because the same foreground colour is being used, e.g. white on white.</p>
    <p>This is a work in progress, <a href="https://github.com/markconroy/csvscs">source code is available on GitHub</a>. Pull requests are welcome.
    <?php
      $bg_colours = [
        "white" => "#ffffff",
        "colour_1" => "#724C98",
        "colour_2" => "#109CC0",
        "colour_3" => "#CD7D00",
        "colour_4" => "#7EBC3D",
        "colour_5" => "#CE1334",
        "colour_5" => "#99885C",
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
          print '<h1 style="color: ' . $fg_colour_value . ';">Heading 1 with ' . $fg_colour_key . '</h1>';
          print '<h2 style="color: ' . $fg_colour_value . ';">Heading 2 with ' . $fg_colour_key . '</h2>';
          print '<h3 style="color: ' . $fg_colour_value . ';">Heading 3 with ' . $fg_colour_key . '</h3>';
          print '<h4 style="color: ' . $fg_colour_value . ';">Heading 4 with ' . $fg_colour_key . '</h4>';
          print '<h5 style="color: ' . $fg_colour_value . ';">Heading 5 with ' . $fg_colour_key . '</h5>';
          print '<h6 style="color: ' . $fg_colour_value . ';">Heading 6 with ' . $fg_colour_key . '</h6>';
          print '<p style="color: ' . $fg_colour_value . '; margin: 1rem; ">This is a test of ' . $fg_colour_key . ' against ' . $bg_colour_key . '. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, <strong>This is some strong text</strong> tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>';
        }
        foreach ($greys as $grey_colour_key => $grey_colour_value) {
          print '<p style="color: ' . $grey_colour_value . '; margin: 1rem; ">This is a test of ' . $grey_colour_key . ' against ' . $bg_colour_key . '. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, <strong>This is some strong text</strong> tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>';
        }
        print '</div>';
      }

    ?>
  </body>
</html>
