<?php require "database.php" ?>
<!DOCTYPE html>
<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Trixas League</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="style/main.css">
  </head>
  <body>
    <div class="top-bar">
      <div class="adminstration">
        <span class="new-season"><a href="game/season.php">New Season</a></span>
        <span><a href="game/friendly.php">New Friendly</a></span>
        <span class="login"><a href="login">Login</a></span>
      </div>
      <img class="logo" src="img/trixas-logo.png" alt="Logo">
      <div class="top-nav">
        <nav>
          <ul>
            <a href="#"><li>League</li></a>
            <a href="#"><li>Teams</li></a>
            <a href="#"><li>Players</li></a>
            <a href="#"><li>Statistics</li></a>
            <a href="#"><li>About</li></a>
          </ul>
        </nav>
      </div>
      <div class="teams">
        <a href="#"><img src="img/juventus.png" alt="Juventus"></a>
        <a href="#"><img src="img/bayern.svg-min.png" alt="Bayern Munchen"></a>
        <a href="#"><img src="img/barcelona.png" alt="Barcelona"></a>
        <a href="#"><img src="img/mancity.png" alt="Manchester City"></a>
        <a href="#"><img src="img/paris.png" alt="Paris Saint Germain"></a>
        <a href="#"><img class="larger" src="img/chelsea.png" alt="Chelsea"></a>
        <a href="#"><img class="smaller" src="img/real.svg-min.png" alt="Real Madrid"></a>
        <a href="#"><img class="smaller" src="img/paok.png" alt="PAOK"></a>
        <a href="#"><img src="img/pao.svg-min.png" alt="Panathinaikos"></a>
        <a href="#"><img src="img/oly.png" alt="Olymbiakos Piraeus"></a>
      </div>
      <div class="test">

      </div>
    </div>
    <section>
      <div class="main-section">
        <?php
          results();
          season();
        ?>
        <div class="stats">
          <div class="box-head stats-head">
            Player Stats
          </div>
          <div class="stats-body">
            <table>
              <tr>
                <th>Player</th>
                <th>GPG</th>
                <th>PPG</th>
              </tr>
              <tr>
                <td><a href="#">Vasilis I.</a></td>
                <td>2.73</td>
                <td>2.1</td>
              </tr>
              <tr>
                <td><a href="#">Vasilis I.</a></td>
                <td>2.73</td>
                <td>2.1</td>
              </tr>
              <tr>
                <td><a href="#">Vasilis I.</a></td>
                <td>2.73</td>
                <td>2.1</td>
              </tr>
              <tr>
                <td><a href="#">Vasilis I.</a></td>
                <td>2.73</td>
                <td>2.1</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- Test -->
  </body>
</html>
