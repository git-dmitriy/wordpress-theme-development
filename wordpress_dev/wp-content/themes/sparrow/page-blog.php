<?php get_header('blog'); ?>
<!-- Page Title
   ================================================== -->
<div id="page-title">

  <div class="row">

    <div class="ten columns centered text-center">
      <h1>Our Blog<span>.</span></h1>

      <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
    </div>

  </div>

</div> <!-- Page Title End-->

<!-- Content
   ================================================== -->
<div class="content-outer">

  <div id="page-content" class="row">

    <div id="primary" class="eight columns">

      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>

          <article class="post">
            <div class="entry-header cf">
              <h1><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>

              <p class="post-meta">

                <time class="date" datetime="2014-01-14T11:24"><?php the_time('M j, Y') ?> </time>
                /
                <span class="categories">
                  <?php the_tags(null, '/'); ?>

                </span>

              </p>

            </div>

            <div class="post-thumb">
              <a href="single.html" title=""><img src="images/post-image/post-image-1300x500-01.jpg" alt="post-image" title="post-image"></a>
            </div>

            <div class="post-content">

              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
                cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
                ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

            </div>

          </article>


        <?php } ?>
      <?php } ?>


      <!-- post end -->

      <article class="post">

        <div class="entry-header cf">

          <h1><a href="single.html" title="">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

          <p class="post-meta">

            <time class="date" datetime="2014-01-14T11:24">Jan 14, 2013</time>
            /
            <span class="categories">
              <a href="#">Design</a> /
              <a href="#">User Inferface</a> /
              <a href="#">Web Design</a>
            </span>

          </p>

        </div>

        <div class="post-thumb">
          <a href="single.html" title=""><img src="images/post-image/post-image-1300x500-02.jpg" alt="post-image" title="post-image"></a>
        </div>

        <div class="post-content">

          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
            nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
            cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
            ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

        </div>

      </article> <!-- post end -->

      <article class="post">

        <div class="entry-header cf">

          <h1><a href="single.html" title="">Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor.</a></h1>

          <p class="post-meta">

            <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>
            /
            <span class="categories">
              <a href="#">Design</a> /
              <a href="#">User Inferface</a> /
              <a href="#">Web Design</a>
            </span>

          </p>

        </div>

        <div class="post-thumb">
          <a href="single.html" title=""><img src="images/post-image/post-image-1300x500-03.jpg" alt="post-image" title="post-image"></a>
        </div>

        <div class="post-content">

          <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
            nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
            cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
            ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. </p>

        </div>

      </article> <!-- post end -->

      <!-- Pagination -->
      <nav class="col full pagination">
        <ul>
          <li><span class="page-numbers prev inactive">Prev</span></li>
          <li><span class="page-numbers current">1</span></li>
          <li><a href="#" class="page-numbers">2</a></li>
          <li><a href="#" class="page-numbers">3</a></li>
          <li><a href="#" class="page-numbers">4</a></li>
          <li><a href="#" class="page-numbers">5</a></li>
          <li><a href="#" class="page-numbers">6</a></li>
          <li><a href="#" class="page-numbers">7</a></li>
          <li><a href="#" class="page-numbers">8</a></li>
          <li><a href="#" class="page-numbers">9</a></li>
          <li><a href="#" class="page-numbers next">Next</a></li>
        </ul>
      </nav>

    </div> <!-- Primary End-->

    <div id="secondary" class="four columns end">

      <?php get_sidebar(); ?>

    </div> <!-- Secondary End-->

  </div>

</div> <!-- Content End-->

<!-- Tweets Section
   ================================================== -->
<section id="tweets">

  <div class="row">

    <div class="tweeter-icon align-center">
      <i class="fa fa-twitter"></i>
    </div>

    <ul id="twitter" class="align-center">
      <li>
        <span>
          This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
          Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
          <a href="#">http://t.co/CGIrdxIlI3</a>
        </span>
        <b><a href="#">2 Days Ago</a></b>
      </li>
      <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
    </ul>

    <p class="align-center"><a href="#" class="button">Follow us</a></p>

  </div>

</section> <!-- Tweets Section End-->

<!-- footer
   ================================================== -->
<footer>

  <div class="row">

    <div class="twelve columns">

      <ul class="footer-nav">
        <li><a href="#">Home.</a></li>
        <li><a href="#">Blog.</a></li>
        <li><a href="#">Portfolio.</a></li>
        <li><a href="#">About.</a></li>
        <li><a href="#">Contact.</a></li>
        <li><a href="#">Features.</a></li>
      </ul>

      <ul class="footer-social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-skype"></i></a></li>
        <li><a href="#"><i class="fa fa-rss"></i></a></li>
      </ul>

      <ul class="copyright">
        <li>Copyright &copy; 2014 Sparrow</li>
        <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
      </ul>

    </div>

    <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

  </div>

</footer> <!-- Footer End-->

<!-- Java Script
   ================================================== -->

<?php wp_footer(); ?>

</body>

</html>