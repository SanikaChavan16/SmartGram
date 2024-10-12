<?php 

include 'partials/header.php' ;
include 'connection.php';

?>
<main>
<div class="slider-area hero-bg3 hero-overly" style="background-image: url('assets/img/places/villege.png')!important;background-size: cover;
    background-repeat: no-repeat" >
    <div class="single-slider slider-height2 d-flex align-items-end">
</div>
    </div>

    <div class="container">
    <div>
        <?php 
        $place = $_GET['place'];
        $select = "SELECT * FROM hotels where place_city='$place'";

        $fire   = mysqli_query($conn, $select);
        while($row = mysqli_fetch_assoc($fire)) 
        {
            
            ?>
        <div class="card mb-3 mt-3" >
            <div class="row g-0">
                <div class="col-md-4">
                    <?php if($row['hotel_image']){?><img src="<?php echo $row['hotel_image'] ?>" class="img-fluid rounded-start" alt="..."><?php } else {?> <img src="assets/img/cities/no-image.png" class="img-fluid rounded-start"  alt="..."> <?php } ?>
                    
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $row['hotel_name'] ?></h1>
                        <p class="card-text"><?php echo $row['hotel_info'] ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo $row['hotel_location'] ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
         
        }
    ?>
    </div>
    <div>
        <?php 
        $place = $_GET['place'];
        $select = "SELECT * FROM places where place_city='$place'";

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
                        <h1 class="card-title"><?php echo $row['place_name'] ?></h1>
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

</main>

<?php 
include 'partials/socials.php';
include 'partials/footer.php';

?>