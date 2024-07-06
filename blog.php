<?php 
$page_title = 'Блог';
include_once('header-page.php');?>

<?php include_once('./template-parts/swiper-product.php');?>
  <section class="blog">
      <div class="container">
       
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="/blog-more.php" class="swiper-slide blog-card">
              <img src="/img/lab.png" alt="laba" class="blog-card-image">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени
              предоставлены...
            </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img src="/img/fac.png" alt="factorio" class="blog-card-image">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...
              </p>
            </a>
            
          </div>
          <!-- If we need navigation buttons -->
          <!-- /.blog-slider-footer -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section -->

<?php include_once('footer.php');?>