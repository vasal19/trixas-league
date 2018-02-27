<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New Friendly</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../style/game.css">
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <img src="../img/trixas-logo.png" alt="Logo">
      </div>
      <h2>Friendly</h2>
      <div class="form">
        <span>2 way</span>
        <input id="two-way" type="checkbox" name="" value="" checked>
        <form class="" action="index.html" method="post">
          <select class="" name="">
            <option value="">Player 1</option>
            <option value="Vasilis I">Vasilis Ioannidis</option>
          </select>
          <select class="" name="" id="first-team">
            <option value="">Team 1</option>
            <option value="Juventus">Juventus</option>
          </select>
          <span>VS</span>
          <select class="" name="" id="second-team">
            <option value="">Team 2</option>
            <option value="Juventus">Juventus</option>
          </select>
          <select class="" name="">
            <option value="">Player 2</option>
            <option value="Vasilis I.">Vasilis Ioannidis</option>
          </select>
          <div class="match" id="match">
            <div class="match-cont">
              <span class="team-one">Team 1</span>
              <input type="number" min="0" name="" value="">
              <input type="number" min="0" name="" value="">
              <span class="team-one">Team 2</span>
            </div>
            <div class="match-cont">
              <span class="team-two">Team 2</span>
              <input type="number" min="0" name="" value="">
              <input type="number" min="0" name="" value="">
              <span class="team-one">Team 1</span>
            </div>
          </div>
          <input type="submit" name="" value="Submit">
        </form>
      </div>
    </div>
    <script src="../js/index.js" charset="utf-8"></script>
  </body>
</html>
