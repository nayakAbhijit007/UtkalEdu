<?php
  include("include/header.php");

  $conn = mysqli_connect('localhost','utkalrzn_utkalrzn','Utkal@123!','utkalrzn_db_utkaleducation');

  $q = "select * from tbl_subject";
  $q = "select * from tbl_subject";
  $result = mysqli_query($conn,$q);
  $num = mysqli_num_rows($result);
?>

<div class="page-title">

    <div class="title">
    <h2>COURSE</h2>
    </div> 

</div>

  <div class="heading">
      <div class="content">
        <h2>ALL DISTANCE AND REGULAR COURSES </h2>
        <h1 style="text-align:center;">ONLINE AND OFFLINE MODE</h1>
        <div class="design">
          <span></span>
          <i class="fa-brands fa-discourse"></i>
          <span></span>
        </div>
      </div>
    </div>
  <!-- ==================== Services Area (Start) ==================== -->
  <section class="services">

    <div class="box-container">

    <?php 
        if($num>0){
        while($row = mysqli_fetch_array($result)){ ?>

      <div class="service-item">
        <div class="image">
          <img src="admin/<?php echo $row['image']?>" alt="Service-Image">
        </div>
        <div class="content">
          <a href="#"><h3><?php echo $row['title'] ?></h3></a>
          <p><i class="fa-solid fa-arrow-right"></i><?php echo $row['description'] ?></p>
        </div>
      </div>

    <?php }  } ?>
      
    </div>

  </section>
  <!-- ==================== Services Area (End) ==================== -->


  <?php
  include("include/footer.php");
?>