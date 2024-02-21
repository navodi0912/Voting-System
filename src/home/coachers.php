
<?php
include_once './config/database.php';
$result = mysqli_query($conn,"SELECT * FROM Contestant");
?>

<div class="container">
    <h3 style="text-align: center;padding: 3rem 1rem 1rem 1rem">Coachers & Announcers</h3>
    
    <div class="row">
    <?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
        <div class="col-3">
            <div class="c-card">
                <img src="<?php echo 'http://localhost/votingsystem/admin/upload/',$row["image"]; ?>" alt="Avatar" style="width:100%" class="card-img">
                <div class="content">
                    <h4><b><?php echo $row["first_name"]; ?></b></h4> 
                    <p>Interior Designer</p> 
                </div>
            </div>
        </div>
        <?php 	$i++;  } ?>
    </div>
</div>
</div>