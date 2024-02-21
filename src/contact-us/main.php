
<?php
include_once './config/database.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if($username == null )
    {
      $msg = "Required fields.";
        $msgEncoded = base64_encode($msg);
        // header("location:../contatc-us.php?msg=".$msgEncoded);
    } else {
      $sql = "INSERT INTO Feedback (username,email,message)
      VALUES ( '$username','$email','$message')";
      if ($conn->query($sql) === TRUE) {
        //$message = "New record created successfully";
        // header("location:../contatc-us.php");
        $message = "New record created successfully";

        // echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
}

mysqli_close($conn);
?>



<div class="map"> 
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8212020798014!2d79.97006501482305!3d6.911970420442733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257ddb62a723b%3A0x8334a28cdac597e9!2sSPAR%20Supermarket%20Malabe!5e0!3m2!1sen!2slk!4v1653009810559!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
  </div> 
  
  <div class="container contactus">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Spar road, Malabe, Colombo</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+94 77 3640 636</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">votingsystem@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
      <form action="" method="POST">
        <div class="input-box">
          <input type="text" name="username" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <input type="text" name="message" placeholder="Enter your message" required>
        </div>

        <div class="input-box" style="padding-top: 1rem;">
          <button type="submit" name="submit" value="Send Now" >send</button>
        </div>
      </form>
    </div>
    </div>
  </div>

