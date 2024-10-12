<?php 

include 'partials/header.php' ;
include 'connection.php';
$id = $_GET['id'];

$select = "SELECT * FROM places WHERE id='$id'";

$query = mysqli_query($conn , $select);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
    $data = $row;

}

?>

    <main>
    <!--? Hero Area Start-->
    <div class="slider-area hero-bg3 hero-overly" style="background-image: url('<?php echo $data['place_cover'] ?>')!important;background-size: cover;
        background-repeat: no-repeat" >
        <div class="single-slider slider-height2 d-flex align-items-end">
            <div class="container">
                <div class="directory-details-head">
                    <section class="wantToWork-area">
                        <div class="wants-wrapper w-padding3">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-8">
                                  <div class="details-cap d-flex">
                                    <div class="icon">
                                        <?php if($data['place_category'] == "holy place"){
                                            ?>
                                                <img src="assets/img/gallery/temple.png" alt=""> 
                                            <?php 
                                        } else {
                                            ?>
                                                <img src="assets/img/gallery/categori_icon1.png" alt=""> 
                                            <?php 

                                        } ?>
                                        
                                    </div>
                                    <div class="properties__caption">
                                        <h3><a href="#"><?php echo $data['place_name'] ?></a></h3>
                                        <p><?php echo $data['place_location'] ?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="double-btn f-right  d-flex flex-wrap">
                                        <a href="#" class="border-btn w-btn wantToWork-btn mr-20"><i class="fas fa-globe"></i>Website</a>
                                        <a href="tel:8830231066" class="btn w-btn wantToWork-btn"><i class="fas fa-phone"></i>Call Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        </div>
    </div>
   <!-- Directory Details start -->
    <div class="directory-details pt-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="small-tittle mb-20">
                        <h2>Description</h2>
                    </div>
                    <div class="directory-cap mb-40">
                        <p><?php echo $data['place_description'] ?></p>
                    </div>
                    
                    <div class="small-tittle mb-20">
                        <h2>Image Gallary</h2>
                    </div>
                    <div class="gallery-img">
                        <div class="row">
                            <?php

                                $images =  $data['place_image'];
                            
                                $images = explode(",",$images);

                                foreach($images as $img)
                                {
                                    ?>
                                        <div class="col-lg-6">
                                            <img src="<?php echo $img ?>" class="mb-30" alt="no">
                                        </div>
                                    <?php 
                                }
                            ?>
                            
                        
                        </div>
                    </div>
                    <div class="small-tittle mb-20">
                        <h2>History</h2>
                    </div>
                    <div class="directory-cap mb-40">
                        <p><?php echo $data['place_history'] ?></p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="map">
                  
                    <iframe src="<?php echo $data['place_map'] ?>" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="form-wrapper pt-80" style="display:none">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="small-tittle mb-30">
                                    <h2>Contact</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box user-icon mb-15">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box email-icon mb-15">
                                        <input type="text" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-15">
                                        <textarea name="message" id="message" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Directory Details End -->
    <!--? Popular Locations Start 01-->
   
    <!-- Popular Locations End -->
    <!--? Want To work 02-->
        <?php include 'partials/socials.php' ?>
    <!-- Want To work End -->
    <!--? Want To work 01-->
 
    <!-- Want To work End -->
    </main>
  <?php
include 'partials/footer.php';  
?>