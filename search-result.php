<link rel="stylesheet" href="assets/css/hotels.css">
<?php
include 'connection.php';
include 'partials/header.php';
$search = ($_GET['search']);
$search_condition =  urldecode($search);
$select_cover = "SELECT * FROM places WHERE place_category='$search_condition'";
$fire_cover   = mysqli_query($conn, $select_cover);
$place_cover_data = array();
while($place_cover = mysqli_fetch_assoc($fire_cover))
{
    $place_cover_data[] = $place_cover;
}

?>
 <div class="slider-area hero-bg3 hero-overly" style="background-image: url('<?php echo $place_cover_data[0]['place_cover'] ?>')!important;background-size: cover;
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
                                        <?php if($place_cover_data[0]['place_category'] == "holy place"){
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
                                        <h3><a href="#"><?php echo $place_cover_data[0]['place_name'] ?></a></h3>
                                        <p><?php echo $place_cover_data[0]['place_location'] ?></p>
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
<div class="container">
    <div>
        <?php 
        
        
        $select = "SELECT * FROM places WHERE place_category='$search_condition'";
        $fire   = mysqli_query($conn, $select);
        while($row = mysqli_fetch_assoc($fire)) 
        {
            ?>
        <div class="card mb-3 mt-3" >
            <div class="row g-0">
                <div class="col-md-4">
                    <?php if($row['place_cover']){?><img src="<?php echo $row['place_cover'] ?>" class="img-fluid rounded-start" alt="..."><?php } else {?> <img src="assets/img/cities/no-image.png" class="img-fluid rounded-start"  alt="..."> <?php } ?>
                    
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title"><a href="directory_details.php?id=<?php echo $row['id'] ?>"><?php echo $row['place_name'] ?></a></h1>
                        <p class="card-text"><?php echo $row['place_description'] ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $row['place_location'] ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
         
        }
    ?>
    </div>
</div>
<?php 
include 'partials/socials.php';
include 'partials/footer.php';

?>