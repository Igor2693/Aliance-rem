<?php 
$page_title = 'Современная методология разработки одухотворила всех причастных';
$header_fabric = 'header-page-fabric';
$breadcrumb_blog = 'Блог';
include_once('header-page.php');?>

<section class="blog">
  <div class="container">
    <div class="seporator"></div>
    <h2 class="section-title section-blog">Блог экспертов в области производства</h2>
    <!-- Slider main container -->
    <div class="swiper blog-slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <a href="#" class="swiper-slide blog-card">
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
      <div class="blog-slider-footer">
        <a href="/blog.php" class="button-link button-link-blog">Весь блог</a>
         <div class="blog-buttons primary-buttons-wrapper">
           <div class="blog-button-prev primary-button-prev">
            <svg width="36" height="24">
              <use href="/img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="blog-button-next primary-button-next">
            <svg width="36" height="24">
               <use href="/img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
         <!-- /.blog-buttons -->
      </div>
       <!-- /.blog-slider-footer -->
    </div>
     <!-- /.swiper -->
  </div>
  <!-- /.container -->
</section>
<!-- /.section -->

<?php include_once('footer.php');?>