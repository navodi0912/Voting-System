<?php
include_once './config/database.php';
$result = mysqli_query($conn,"SELECT * FROM Feed");
?>

<!-- Trending videos  -->


<?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
<div class="video_part">
    <div class="video_text"><?php echo $i+1 ?></div>
    <div class="video">
        <a href="#" onclick="popup_open();"><video src="http://localhost/votingsystem/admin/upload/<?php echo $row["image"]; ?>" muted></video></a>
    </div>
    
    <div class="video_description">
        <div class="video_text">
        <?php echo $row["description"]; ?>
        </div>
        <div class="video_text">
            <?php echo $row["Title"]; ?>
        </div>
        <div class="video_views">60 views</div>
    </div>
</div>
<?php 	$i++;  } ?>





<!--  popup video   -->

<div class="popup_video" id="popup_vid">
    <div class="popup_close_but" id="close_but" onClick="popup_close();">&times;</div>
    <video id="tren_video" controls>
        <source src="" type="video/mp4">
    </video>
</div>