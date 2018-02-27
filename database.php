<?php

  function db()
    {
      $db = mysqli_connect('localhost','root','','league');
      return $db;
    }



  function newseason($pinu,$pint,$season)
    {
      $db = db();
      $stm = $db->prepare("INSERT INTO standings(user,team,season,pl,w,d,l,gf,ga,points) VALUES (?,?,?,?,?,?,?,?,?,?)");
      $stm->bind_param("ssiiiiiiii",$username,$team,$season,$pl,$w,$d,$l,$gf,$ga,$points);
        for($i=0; $i < count($pinu); $i++)
          {
            $username = $pinu[$i];
            $team = $pint[$i];
            $pl = 0;
            $w = 0;
            $d = 0;
            $l = 0;
            $gf = 0;
            $ga = 0;
            $points = 0;
            echo $username . $team;
            $stm->execute();
          }
    }

    function results()
      {
        $db = db();
        echo '<div class="results">
                <div class="box-head results-head">
                  Latest Results
                </div>
                <div class="results-body">';
        $sql = 'SELECT * FROM matches ORDER BY id desc';
        $res = mysqli_query($db,$sql);
        $i = 0;
        while($row = $res->fetch_assoc())
          {
            if($i==5)
              {
                break;
              }
            $sqlt = sprintf("SELECT image FROM teams WHERE short='%s'", $row['team1']);
            $resultt = mysqli_query($db,$sqlt);
            $rowt = mysqli_fetch_assoc($resultt);
            echo '<div class="result">
                    <a href="#"><span class="team-name">' . $row['team1'] . '</span></a>
                    <span class="team-logo"><a href="#"><img src="data:image;base64,'.base64_encode($rowt['image']).'" alt="Juventus"></a></span>
                    <span class="score">' . $row['g1'] . ' - ' . $row['g2'] . '</span>';

            $sqlt = sprintf("SELECT image FROM teams WHERE short='%s'", $row['team2']);
            $resultt = mysqli_query($db,$sqlt);
            $rowt = mysqli_fetch_assoc($resultt);

            echo   '<span class="team-logo"><a href="#"> <img src="data:image;base64,'.base64_encode($rowt['image']).'" alt="Paris Saint Germain"></a></span>
                    <a href="#"><span class="team-name">' . $row['team2'] . '</span></a>
                  </div>';
            $i++;
          }
        echo '</div>
            </div>';
      }


      function season()
        {
          echo '<div class="season">
                  <div class="box-head season-head">
                    Latest Season
                  </div>
                  <div class="season-body">
                    <table>
                      <tr>
                        <th>Pos.</th>               <th>Club</th>
                        <th>Pl.</th>
                        <th>W</th>
                        <th>D</th>
                        <th>L</th>
                        <th>GF</th>
                        <th>GA</th>
                        <th>Pts</th>
                        <th>Player</th>
                      </tr>';

          $db = db();
          $sql = 'SELECT MAX(season) as max FROM standings';
          $result = mysqli_query($db,$sql);
          $row = mysqli_fetch_assoc($result);
          $season = $row['max'];

          $stm = $db->prepare("SELECT * FROM standings S join teams T on S.team=T.short where season=? ORDER BY points desc");
          $stm->bind_param("i",$season);
          $stm->execute();
          $res = $stm->get_result();
          $i=1;
          while($row = $res->fetch_assoc())
            {
              echo '<tr>
                      <td>'. $i .'</td>
                      <td><span class="team-logo-standing"><a href="#"><img src="data:image;base64,'.base64_encode($row['image']).'" alt="Juventus"></a></span><a href="#">'. $row['name'] .'</a></td>
                      <td>'. $row['pl'] .'</td>
                      <td>'. $row['w'] .'</td>
                      <td>'. $row['d'] .'</td>
                      <td>'. $row['l'] .'</td>
                      <td>'. $row['gf'] .'</td>
                      <td>'. $row['ga'] .'</td>
                      <td>'. $row['points'] .'</td>
                      <td><a href="#">'. $row['user'] .'</a></td>
                    </tr>';
                $i++;
            }
          echo '  </table>
                </div>
              </div>';
        }


?>
