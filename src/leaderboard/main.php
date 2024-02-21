<div style="display: flex; justify-content: center;">
<button class="tablink" onclick="openPage('Leaderboard', this, 'white')" id="defaultOpen">Leaderboard</button>
<button class="tablink" onclick="openPage('Contestant', this, 'white')" >Contestant</button>
</div>

<div id="Leaderboard" class="tabcontent">
 <?php require 'board.php' ?>
</div>

<div id="Contestant" class="tabcontent">
  <?php require 'contestants.php' ?>
</div>
