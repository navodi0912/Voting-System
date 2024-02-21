

<?php
include_once './config/database.php';
$result = mysqli_query($conn,"SELECT * FROM Contestant ORDER BY votes DESC");
?>

<!-- <ul class = "navi-change">
    <li class = "navi-change"> <a href = "./leaderboard.php"> Leaderboard</a> </li>
    <li class = "navi-change"> <a href = "./src/leaderboard/contestant.php"> Contestant </a> </li>
    
 </ul> -->



  <!--Leaderboard-->
  <div class="section_1">
  
    <div class="table-header">

      <table>

        <thead>
       
          <tr>
            <th># Rank</th>
            <th></th>
            <th>Name</th>
            <th>Total Vote</th>
          </tr>
        
        </thead>

        <tbody>
        <?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $i+1 ?></td>
            <td><img src="<?php echo 'http://localhost/votingsystem/admin/upload/',$row["image"]; ?>"></td>
            <td><?php echo $row["first_name"]," " ,$row["last_name"]; ?></td>
            <td><?php echo $row["votes"]; ?></td>
          </tr>
          <?php 	$i++;  } ?>
        </tbody>
      </table>
    </div>
  </div>

  <div class="section_2">
    <h2>Most Popular</h2>

    <div class="section_2_1">

      <div class="top-left">
        <img src="./assets/images/Cimg-1.jpg" alt="second place">
        <h5>Test name</h5>
      </div>

      <div class="top-mid">
        <img src="./assets/images/Cimg-1.jpg" alt="first place">
        <h5>Test name</h5>

      </div>

      <div class="top-right">
        <img src="./assets/images/Cimg-1.jpg" alt="third place">
        <h5>Test name</h5>
      </div>

    
  </div>

  <!--Logo image-->
  <!-- <img src="./assets/images/logo.png" alt="logo"> -->
  </div>