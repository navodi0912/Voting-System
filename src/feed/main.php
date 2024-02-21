<div style="display: flex; justify-content: center;">
<button class="tablink" onclick="openPage('Trending', this, 'white')" id="defaultOpen">Trending</button>
<button class="tablink" onclick="openPage('Highlights', this, 'white')" >Highlights</button>
<!-- <button class="tablink" onclick="openPage('Songs', this, 'white')">Songs</button> -->
</div>

<div id="Trending" class="tabcontent">
<?php require 'trending.php' ?>
</div>

<div id="Highlights" class="tabcontent">
    <?php require 'highlights.php' ?>
</div>

<!-- <div id="Songs" class="tabcontent">
    <?php require 'songs.php' ?>
</div> -->