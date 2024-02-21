<!-- Don't consider about this. I added this for clear php cache  -->
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Voting System</title>
  <link rel="stylesheet" href="./assets/css/main-style.css">
  <link rel="stylesheet" href="./assets/css/columns.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
  <link rel="stylesheet" href="./assets/css/slider.css">
  <link rel="stylesheet" href="./assets/css/footercss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<style>
  .container{
  /* width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); */
}
p{
    font-weight: 200;
}
.container.contactus {
    padding: 3rem 0;
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #fff;
    border-radius: 6px;
    padding: 5rem 60px 5rem 40px;
    box-shadow: 0 0px 31px gainsboro;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #003fa4;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 16px;
  font-weight: 600;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #404040;
    font-weight: 200;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #003fa4;
  padding-bottom: 1rem;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #003fa4;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}
button {
    height: 45px;
    min-width: 130px;
    border-radius: 5px;
    border: none;
    color: #fff;
    background: #2ECC71;
    font-weight: 400;
    font-size: 14px;
    cursor: pointer;
    padding: 0 30px;
}
.map iframe {
    width: 100%;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}

</style>
<body>

<!-- Components for Contact Us page  -->
  <?php require './src/component/menu.php' ?>
  
  <div class="body-part">
  <?php require './src/contact-us/main.php' ?>

  </div>

  <?php require './src/component/footer.php' ?>

<!-- External js files  -->
<script src="./assets/js/menu.js"></script>
<script src="./assets/js/slider.js"></script>

</body>

</html>