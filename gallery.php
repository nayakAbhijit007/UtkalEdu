<?php
  include("include/header.php");

  $conn = mysqli_connect('localhost','utkalrzn_utkalrzn','Utkal@123!','utkalrzn_db_utkaleducation');

  $q = "select * from tbl_gallery";
  $result = mysqli_query($conn,$q);
  $num = mysqli_num_rows($result);
?>

<div class="page-title">

    <div class="title">
    <h2>GALLERY</h2>
    </div> 

</div>


    <div class="heading">
      <div class="content">
        <h2>GALLERY</h2>
        <div class="design">
          <span></span>
          <i class="fa-duotone fa-rectangle-history-circle-user"></i>
          <span></span>
        </div>
      </div>
    </div>



<section class="gallery">

<div class="box-container">

  <?php 
    if($num>0){
    while($row = mysqli_fetch_array($result)){ ?>

  <div class="gallery-item image double Quran">
    <img src="admin/<?php echo $row['image']?>" alt="Gallery-Image">
    <div class="content">
      <a href="admin/<?php echo $row['image']?>"><i class="fas fa-plus"></i></a>
    </div>
  </div>

  <?php }  } ?>

</div>

</section>
<!-- ==================== Gallery Area (End) ==================== -->



<?php
  include("include/footer.php");
?>