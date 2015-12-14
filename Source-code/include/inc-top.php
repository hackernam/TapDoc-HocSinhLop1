    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="styles/swiper.min.css">

<?php 
include_once 'dataconfig/dataprovider.php';
$result = DataProvider::GetRows("select bh_ID, bh_HinhDaiDien, bh_LoaiBaiHoc from baihoc order by bh_SoLanChon desc limit 5"); ?>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
<?php	foreach ($result as $value) { ?>
            <div class="swiper-slide"><a href="baihoc.php?bh=<?php echo $value[0] ?>&lbh=<?php echo $value[2]?>"><img src="<?php echo $value[1];?>" width="100%"/></a></div>
<?php } ?>
<!--			<div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>-->
        </div>
    </div>
        <!-- Add Pagination -->

    <!-- Swiper JS -->
    <script src="scripts/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30,
        freeMode: true
    });
    </script>