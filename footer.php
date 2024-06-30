<section class="section-cta">
      <div class="bg-grey cta">
        <img src="/img/cta.png" alt="call to action" class="cta-image">
        <div class="cta-form-wrapper container">
          <form action="handler.php" method="POST" class="cta-form">
            <h2 class="section-title cta-title">Хотите сотрудничать?</h2>
            <p class="cta-form-text">
              Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
            </p>
            <div class="input-group-wrapper">
              <div class="input-group">
                <input 
                id="user-name" 
                type="text" 
                class="input"
                name="username"
                placeholder=""
                >
                <label class="input-group-label" for="user-name">Имя</label>
              </div>
              <div class="input-group">
                <input 
                id="user-phone" 
                type="tel" 
                class="input"
                name="userphone"
                placeholder="">
                <label class="input-group-label" for="user-phone">Номер телефона</label>
              </div>
            </div>
            <!-- /.input-group-wrapper -->
             <div class="cta-form-footer">
              <button type="submit" class="button cta-button">Отправить заявку</button>
              <div class="notify">
                <svg width="14" height="14" class="notify-icon">
                  <use href="/img/sprite.svg#sheild"></use>
                </svg>
                <p class="notify-text">
                  Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                </p>
              </div>
             </div>
             <!-- /.cta-form-footer -->
          </form>
        </div>
        <!-- /.cta-form-wrapper -->
      </div>
      <!-- /.bg-grey -->
    </section>
    <!-- /.cta -->

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <a href="./" class="footer-logo">
            <img src="/img/footer-logo.png" alt="footer-logo" class="footer-logo">
          </a>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="footer-info">
            <svg class="phone-icon-footer" width="24" height="24">
              <use href="/img/sprite.svg#mark"></use>
            </svg>
            <a class="footer-info-adress">г. Мосвка, Холодильный пер. 4к1с8</a>
          </div>
          <!-- /.footer-info -->
          <div class="footer-info footer-email">
            <svg class="phone-icon-footer" width="24" height="24">
              <use href="/img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-adress">a.dragunov@tdaliance.ru</a>
          </div>
          <!-- /.footer-info -->
          <div class="footer-social">
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="/img/sprite.svg#vk"></use>
              </svg>
            </a>
            <a href="#" class="footer-social-link">
              <svg class="footer-social-icon" width="24" height="24">
                <use href="/img/sprite.svg#inst"></use>
              </svg>
            </a>
          </div>
          <!-- /.footer-social -->
        </div>
        <!-- /.footer-top -->
      </div>
      <!-- /.container -->
       <div class="line-footer"></div>
       <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-list-1">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper footer-list-2">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AP</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper footer-list-3">
            <h2 class="footer-menu-title title-about">О компании</h2>
            <h2 class="footer-menu-title title-news">Новости</h2>
            <h2 class="footer-menu-title">Контакты</h2>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
        <!-- /.footer-bottom -->
       </div>
       <!-- /.container -->
        <div class="line-footer"></div>
        <div class="container">
          <div class="footer-copy">
            <p class="copy">
              &copy; <?php echo date('d.m.Y');?> «Aliance Production». Все права защищены.
            </p>
            <a href="#" class="politics">Политики конфиденциальности</a>
            <div class="ruso-block">
              <span class="desing">Дизайн и разработка:</span>
              <span class="made-in">Сделано в</span>
              <img src="/img/ruso.svg" alt="logo made in" class="footer-ruso">
            </div>
            <!-- /.ruso-block -->
          </div>
          <!-- /.footer-copy -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /.footer -->

    <div class="modal">
      <div class="modal-dialog">
        <h2 class="modal-title">Есть вопросы?</h2>
        <a href="" class="modal-close"> 
          <img src="/img/close.svg" alt="close icon" class="close-icon">
        </a>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
        </p>
        <form action="handler.php" class="modal-form">
          <div class="input-group-wrapper input-group-modal">
            <div class="input-group modal-input-group">
              <input 
              id="modal-user-name" 
              type="text" 
              class="input input-modal-bg" 
              name="username"
              placeholder="">
              <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
            </div>
            <div class="input-group input-modal">
              <input 
              id="modal-user-phone" 
              type="tel" 
              class="input input-modal-bg" 
              name="userphone"
              placeholder="">
              <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
            </div>
          </div>
          <!-- /.input-group-wrapper -->
          <div class="cta-form-footer modal-form-footer">
            <button type="submit" class="button cta-button modal-button">Отправить заявку</button>
            <div class="notify">
              <svg width="14" height="14" class="notify-icon modal-icon">
                <use href="/img/sprite.svg#sheild"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.cta-form-footer -->
        </form>
      </div>
      <!-- /.modal-dilog -->
    </div>
    <!-- /.modal -->


  <script src="/js/swiper-bundle.min.js"></script>
  <script src="/js/main.js"></script>
</body>
</html>