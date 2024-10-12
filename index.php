<?php 

include 'partials/header.php';

?>
    <main>
        <!--? Hero Area Start-->
        <div class="slider-area hero-bg1 hero-overly">
            <div class="single-slider hero-overly  slider-height1 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <!-- Hero Caption -->
                            <div class="hero__caption pt-100">
                                <h1>Explore Places</h1>
                                <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
                            </div>
                            <!--Hero form -->
                            <form action="search-place.php" method="GET" class="search-box mb-100">
                                <div class="input-form">
                                    <input type="text" name="search-term" placeholder="What are you finding?">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="category" id="select1">
                                            <option value="">Category?</option>
                                            <option value="">Hostpitals</option>
                                            <option value="">Tourist Places</option>
                                            <option value="Hotels & Restaurants">Hotels</option>
                                            <option value="holy places">Holy Places</option>
                                            <option value="Shopping">Shopping</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <button type="submit"><i class="ti-search" name="search"></i> Search</button>
                                </div>	
                            </form>	
                            <!-- hero category1 img -->
                            <div class="category-img text-center">
                                <?php 
                                //    santetise url 
                                    $sanetized_urls = array();
                                    $urls = array('Hotels & Restaurants','shopping','holy places');
                                    for($i=0;$i<count($urls);$i++)
                                    {
                                        $hotelsandrestaurant = $urls[$i];
                                        $search_query_encoded = urlencode($hotelsandrestaurant);
                                        $sanetized_urls[] = $search_query_encoded;
                                        // echo $url;
                                    }

                                    
                                ?>
                                <a href="search-result.php?search=<?php echo $sanetized_urls[0] ?>"><img src="assets/img/gallery/hero_category1.png" alt=""></a>
                                <a href="search-result.php?search=<?php echo $sanetized_urls[1] ?>"><img src="assets/img/categories/shopping.png" alt="" style="border-radius:10px"></a>
                                <a href="search-result.php?search=<?php echo $sanetized_urls[2] ?>" ><img src="assets/img/categories/holy-place.png" alt="" style="border-radius:10px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Area End-->
        <!--? Popular Locations Start 01-->
        <div class="popular-location border-bottom section-padding40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2> Know More near by you</h2>
                            <p>Want to know more about the city where you are now ? , Let's Go.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/cities/pandharpur.png" alt="ppur">
                            </div>
                            <div class="location-details">
                                <p>Pandharpur</p>
                                <a href="cities.php?place=pandharpur" class="location-btn">5 <i class="ti-plus"></i> Listing</a>
                            </div>
                        </div>
                    </div>
                    
                  
                </div>
            </div>
        </div>
        <!-- Popular Locations End -->
        <!--? Popular Directory Start -->
        <div class="popular-directorya-area  border-bottom section-padding40 fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Popular Directory</h2>
                            <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
                        </div>
                    </div>
                </div>
                <div class="directory-active">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/places/gajanan-maharaj/img-1.PNG" alt=""></a>
                                <div class="img-text">
                                    <span>$$$</span>
                                    <span>Open</span>
                                </div>
                                <div class="icon">
                                    <img src="assets/img/gallery/temple.png" alt=""> 
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="directory_details.php?id=2">Gajanan Maharaj Mandir</a></h3>
                                <p>Let's explore the best places to Visit</p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <img src="assets/img/cities/om.png" alt="">
                                    <h3>Holy Places</h3>
                                </div>
                                <div class="heart">
                                    <img src="assets/img/gallery/heart1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/cities/vitthal-temple-1.jpg" alt="vitthal temple"></a>
                                <div class="img-text">
                                    <span>$$$</span>
                                    <span>Open</span>
                                </div>
                                <div class="icon">
                                    <img src="assets/img/gallery/temple.png" alt=""> 
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="directory_details.php?id=1">Vitthal Temple</a></h3>
                                <p>Let's uncover the best place to visit</p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                <img src="assets/img/cities/om.png" alt="">
                                    <h3>Holy Places</h3>
                                </div>
                                <div class="heart">
                                    <img src="assets/img/gallery/heart1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/properties3.png" alt=""></a>
                                <div class="img-text">
                                    <span>$$$</span>
                                    <span>Closed</span>
                                </div>
                                <div class="icon">
                                    <img src="assets/img/gallery/categori_icon1.png" alt=""> 
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="directory_details.php?id=4">Hotel Aishwarya</a></h3>
                                <p>Let's explore the best places to stay </p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <img src="assets/img/gallery/restaurant-icon.png" alt="">
                                    <h3>Food & Restaurant</h3>
                                </div>
                                <div class="heart">
                                    <img src="assets/img/gallery/heart1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    
                </div>
            </div>
        </div>
        <!--? Popular Directory End -->
        <!--? Want To work 01-->
        <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>How it works</h2>
                                <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4">
                            <a href="#" class="btn f-right sm-left">Explore Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Our Services Start -->
        <div class="our-services  border-bottom">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <span>01</span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">Find Places</a></h5>
                                <p>Search or explore listed places around a village , and go to popular places.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <span>02</span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">See Information About Place</a></h5>
                                <p>If you go to historic places , you'll be able to read history around it.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services mb-30">
                            <div class="services-ion">
                                <span>03</span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">See information and images </a></h5>
                                <p>There would be an option related to place that you want to know more about where , you can see related images.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
    
        <!--? Popular Locations Start 01-->
       
        <!-- Popular Locations End -->
        <!--? Want To work 02-->
       <?php include 'partials/socials.php' ?>
        <!-- Want To work End -->
    </main>
  <?php include 'partials/footer.php' ?>

  <?php 
  
  if(isset($_GET['search']))
  {
    $query = $_POST['search_query'];
    $category = $_POST['category'];
    
    ?>
        
    <?php
    
  } else {
      echo "Not clicked";
  }
  
  ?>