<?php get_header() ?>




    
<!-- Carousel -->
<div class="container_carousel">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php the_field("first_image") ?>" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php the_field("second_image") ?>" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php the_field("third_image") ?>" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


          


<div class="int_container">
    <div class="left_intro">
        <div id="intro_title"><?php the_field("intro_title")?></div>
        <div class="intro_desc"><?php the_field("intro_first_line")?></div>
        <div class="intro_desc"><?php the_field("intro_second_line")?></div>
        <div class="intro_bold"><?php the_field("intro_third_line")?></div>
        <div class="link-cont"><div id="intro_link"></div></div>
        <a class="button" href="#card-deck"><?php the_field("intro_link")?></a>
      </div>
        <div class="right_intro">
        <div id="img_cont"><img class="intr-img" src="<?php the_field("intro_image")?>" alt="img">
        </div>
    </div>
    
</div>

<div class="socials_cont">
    <div id="first_element" target="_blank"><a class="link-red" href="<?php the_field("instagram_link")?>">Instagram</a></div>
    <div class="seperator"><svg xmlns="http://www.w3.org/2000/svg" width="32.999" height="30" viewBox="0 0 32.999 36">
        <path id="Icon_awesome-asterisk" data-name="Icon awesome-asterisk" d="M33.624,23.491,23.625,18l10-5.491a1.687,1.687,0,0,0,.649-2.323L32.9,7.814a1.688,1.688,0,0,0-2.336-.6l-9.755,5.914.244-11.4A1.687,1.687,0,0,0,19.37,0H16.63a1.687,1.687,0,0,0-1.687,1.724l.244,11.4L5.433,7.215a1.688,1.688,0,0,0-2.336.6l-1.37,2.372a1.688,1.688,0,0,0,.649,2.323l10,5.491-10,5.491a1.687,1.687,0,0,0-.649,2.323L3.1,28.186a1.688,1.688,0,0,0,2.336.6l9.755-5.914-.244,11.4A1.688,1.688,0,0,0,16.63,36H19.37a1.688,1.688,0,0,0,1.687-1.724l-.244-11.4,9.755,5.914a1.688,1.688,0,0,0,2.336-.6l1.37-2.372a1.687,1.687,0,0,0-.649-2.323Z" transform="translate(-1.5)" fill="#b70000"/>
        </svg>
    </div>
    <div id="second_element" target="_blank"><a class="link-red" href="<?php the_field("tiktok_link")?>">Tiktok</a></div>
    <div class="seperator"><svg xmlns="http://www.w3.org/2000/svg" width="32.999" height="30" viewBox="0 0 32.999 36">
        <path id="Icon_awesome-asterisk" data-name="Icon awesome-asterisk" d="M33.624,23.491,23.625,18l10-5.491a1.687,1.687,0,0,0,.649-2.323L32.9,7.814a1.688,1.688,0,0,0-2.336-.6l-9.755,5.914.244-11.4A1.687,1.687,0,0,0,19.37,0H16.63a1.687,1.687,0,0,0-1.687,1.724l.244,11.4L5.433,7.215a1.688,1.688,0,0,0-2.336.6l-1.37,2.372a1.688,1.688,0,0,0,.649,2.323l10,5.491-10,5.491a1.687,1.687,0,0,0-.649,2.323L3.1,28.186a1.688,1.688,0,0,0,2.336.6l9.755-5.914-.244,11.4A1.688,1.688,0,0,0,16.63,36H19.37a1.688,1.688,0,0,0,1.687-1.724l-.244-11.4,9.755,5.914a1.688,1.688,0,0,0,2.336-.6l1.37-2.372a1.687,1.687,0,0,0-.649-2.323Z" transform="translate(-1.5)" fill="#b70000"/>
        </svg>
    </div>
    <div id="third_element" target="_blank"><a class="link-red" href="<?php the_field("pinterest_link")?>">Pinterest</a></div>
</div>


<!--

<div class="sticky-container">
  <div class="main">
    <div class="section">
      <h5>Beep</h5>
    </div>
    <div class="section">
      <h5>Boop</h5>
    </div>
    <div class="section">
      <h5>Boooom</h5>
    </div>
    <div class="section">
      <h5>The End</h5>
    </div>
  </div>
</div>
</div>

-->

<div id="card-deck">
  <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
  <input type="radio" name="position"   />
  <input type="radio" name="position" checked />
  <input type="radio" name="position"  />
  <input type="radio" name="position" />
  <input type="radio" name="position" />
 <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
  
  <main id="carousel">
  
    <div class="item-small">
        <div class="card-pic"> <img style="border-radius: 50% 0 0 0; width: 300px;" src="<?php the_field("first_product_pic")?>"></div>
          <div class="inner-card">
            <div class="card-title"><?php the_field("first_product_title")?></div>
            <div class="card-desc"><?php the_field("first_product_desc")?></div>
          </div>
        </div>
    <div class="item-small">
      <div class="card-pic"> <img style="width: 300px;" src="<?php the_field("second_product_pic")?>"></div>
      <div class="inner-card">
        <div class="card-title"><?php the_field("second_product_title")?></div>
        <div class="card-desc"><?php the_field("second_product_desc")?></div>
      </div>
    </div>
    <div class="item-small">
      <div class="card-pic"> <img style="width: 300px;" src="<?php the_field("third_product_pic")?>"></div>
        <div class="inner-card">
          <div class="card-title"><?php the_field("third_product_title")?></div>
          <div class="card-desc"><?php the_field("third_product_desc")?></div>
        </div>
    </div>
    <div class="item-small">
        <div class="card-pic"> <img style="width: 300px;" src="<?php the_field("fourth_product_pic")?>"></div>
        <div class="inner-card">
          <div class="card-title"><?php the_field("fourth_product_title")?></div>
          <div class="card-desc"><?php the_field("fourth_product_desc")?></div>
        </div>
    </div>
    <div class="item-small">
          <div class="card-pic"> <img style="border-radius: 0 50% 0 0; width: 300px;" src="<?php the_field("fifth_product_pic")?>"></div>
          <div class="inner-card">
            <div class="card-title"><?php the_field("fifth_product_title")?></div>
            <div class="card-desc"><?php the_field("fifth_product_desc")?></div>
          </div>
    </div>
      
    </main>
</div>



<div class="follow_cont">
  
  <div class="inner-cont">
    <div class="notif">Get notified about updates</div>
    <div class="notif-desc">Want to get notified first when hanka launches its first product lineup? Subscribe to receive updates via email.</div>
    <div class="flex">

    <?php $args = array(
      'prepend' => '', 
      'showname' => false,
      'nametxt' => 'Name:', 
      'nameholder' => 'Name...', 
      'emailtxt' => '.',
      'emailholder' => 'Email Address...', 
      'showsubmit' => true, 
      'submittxt' => 'Subscribe', 
      'jsthanks' => false,
      'thankyou' => 'Thank you for subscribing to our mailing list!'
      );
      echo smlsubform($args);
    ?>

    </div>
  </div>
</div>




<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
          
    <?php endwhile; ?>
<?php endif; ?>
    



<?php get_footer() ?>