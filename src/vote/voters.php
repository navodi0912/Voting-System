
<?php
include_once './config/database.php';
$result = mysqli_query($conn,"SELECT * FROM Contestant");
?>


<div class="container" style="padding-bottom: 5rem; ">
    <h3 style="padding: 3rem 1rem 1rem 1rem">Contestants</h3>

    <div class="row">
    <?php $i=0; while($row = mysqli_fetch_array($result)) { ?>
        <a href="single-user.php?id=<?php echo $row["id"]; ?>">
        <div class="col-3 c-card-main">
            <div class="c-card">
                <img src="<?php echo 'http://localhost/votingsystem/admin/upload/',$row["image"]; ?>" alt="Avatar" style="width:100%" class="card-img">
                <div class="content text-center">
                    <h4><b>
                        <?php echo $row["first_name"]; ?>
                    </b></h4> 
                    <p class="small-text" style="color: red;">Interior Designer</p> 
                
                    <div style="padding-top: 10px;">
                     <button class="vote-button">VOTE</button>
                    </div>
                </div>
            </div>
        </div>
        </a>
     <?php 	$i++;  } ?>
    
        

    </div>
</div>
</div>