<?php 
session_start();
$id = $_SESSION['id'];
if(isset($_SESSION['id'])){
 ?>

<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<!-- header -->
<?php include"include/headers.php"; ?>
<!-- end header -->
<?php include "config/SYD_Class.php";
$co=new sydClass();
 ?>
 <?php include"include/header1.php"; ?>
<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <!-- nav -->
      <?php include"include/nav.php"; ?>
      <!-- end nav -->

      <!-- side bar -->
      <?php include"include/sidebar.php" ?>
      <!-- end sidebar -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <!-- home -->
          <div id="main" class="tab-content">
            <?php include"data/home.php" ?>
          </div>
          
          <!-- end home -->
        </section>
        <!-- star setting -->
        <?php include"data/sett.php"; ?>
        <!-- end settings -->
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Waxaa diyaariyay Team Group-E</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- footer -->
  <?php include"data/footer.php"; ?>
  <!-- end footer -->
</body>
<!-- index.html  21 Nov 2019 03:47:04 GMT -->

<select id="sel">
  <option>apdala</option>
  <option> faarah</option>
</select>
<script >
  for(int i=0; i<sel.length; i+=1){
    sel[i].addeventlistener("change",function(){
      alert("")
    })
  }

</script>
</html>


<!-- events -->
<?php include"data/events.php"; ?>
<!-- end event -->
<script>
  $("#main").click(function(){
    $(".nav-link").removeClass("active");
  })
</script>
<?php include"data/models.php" ?>

<?php 
}
else
  header("location:login.php");
 ?>