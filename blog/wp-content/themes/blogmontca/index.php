<?php get_header('home') ?>
<body class="bg">
<!-- nav -->
<div class="nav-blog">
  <nav class="df jc-b ai-b m header">
    <div class=''>
      <a href="#" class="lk bm m">
        <img src="http://localhost:8888/blog/wp-content/uploads/2017/05/Hamburguesa.png" width='50' alt="Menu" id="bm" class="f">
      </a>
      <div class="mr df jc-c ai-c h" id='mr'>
        <ul class="ls-n">
          <a href="index.html">
            <img src="https://scontent.fbog2-2.fna.fbcdn.net/v/t1.0-9/12208684_10153253626258697_7413417102236425354_n.jpg?oh=21ea85c9c67f5f2bf6413421451576b9&oe=598ED021" alt="Avatar" class="a-1">
            </a>
          <li><a href="#" class="lk ac">Blog</a></li>
          <li><a href="#" class="lk">Diseño</a></li>
          <li><a href="#" class="lk">Frontend</a></li>
          <li><a href="#contacto" class="lk">Contacto</a></li>
        </ul>
      </div>
    </div>
    <div class="">
      <img src="http://localhost:8888/blog/wp-content/uploads/2017/05/isotipo.png" width='60' alt="">
    </div>
  </nav>
</div>
<!-- /nav -->

<!-- noticias -->
<div class="m1 df jc-b">

  <section class="m4 section-blog fd-c df">
    <article class="article-blog">
        <?php
        if(have_posts() ) :
          while (have_posts() ) :
            the_post();
            ?>
            <?php
            if (has_post_thumbnail()) { ?>
            <div>
              <img src="<?php the_post_thumbnail_url('thumbnail') ?>" class='img-blog' alt="">
            </div>
            <?php
           }
             ?>
            <div class="text-blog">
            <h4><?php the_date() ?></h4>
            <h2 class="title-1"><?php the_title() ?></h2>
            <p class="p-1"><?php the_excerpt() ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-2 lk">LEER MÁS</a>
            <?php
        endwhile;
        else :
        ?>
        <h4>No encontramos entradas</h4>
        <?php
        endif;
         ?>
      </div>
    </article>

    <article class="article-blog">
      <div>
        <img data-src="img/disenoweb.jpg" class='img-blog' alt="">
      </div>
      <div class="text-blog">
        <h4>31 Enero 2017</h4>
        <h2 class="title-1">Primeros pasos en la web</h2>
        <h3 class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dicta dolore, consequatur ex eius dolorum quisquam consequuntur sequi...</h3>
        <a href="<?php the_permalink ?>" class="btn-2 lk">LEER MÁS</a>
      </div>
    </article>

    <article class="article-blog">
      <div>
        <img data-src="img/disenoweb.jpg" class='img-blog' alt="">
      </div>
      <div class="text-blog">
        <h4>31 Enero 2017</h4>
        <h2 class="title-1">Primeros pasos en la web</h2>
        <h3 class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dicta dolore, consequatur ex eius dolorum quisquam consequuntur sequi...</h3>
        <a href="" class="btn-2 lk">LEER MÁS</a>
      </div>
    </article>

    <article class="article-blog">
      <div>
        <img data-src="img/disenoweb.jpg" class='img-blog' alt="">
      </div>
      <div class="text-blog">
        <h4>31 Enero 2017</h4>
        <h2 class="title-1">Primeros pasos en la web</h2>
        <h3 class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dicta dolore, consequatur ex eius dolorum quisquam consequuntur sequi...</h3>
        <a href="" class="btn-2 lk">LEER MÁS</a>
      </div>
    </article>
  </section>

<?php get_sidebar() ?>

</div>
<!-- /noticias -->

<!-- footer -->
<?php get_footer() ?>
<!-- /footer -->


</body>
