<?php get_header(); ?>
<?php get_header("custom1"); ?>
    <section id="about" class="video-section">
        <div class="container">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-md-4 col-sm-12 content-text">
                        <ul class="nav navbar-tabs-custom">
                            <li class="active"><a class="title" data-toggle="tab" href="#about-tab">about</a></li>
                            <li><a class="title" data-toggle="tab" href="#history-tab">history</a></li>
                            <li><a class="title" data-toggle="tab" href="#director-tab">director</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="about-tab" class="tab-pane fade in active">
                                <div class="barocks">
                                    <div class="barocks-img"><img
                                            src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                            alt="art"></div>
                                    <div class="barocks-title">About us
                                    </div>
                                </div>
                                <p>
                                    Eboracum Baroque are a group of young professional singers and instrumentalists at
                                    the
                                    start classical music careers. The group was formed in 2012 by Chris Parsons at the
                                    University of York and has performed all across the UK in prestigious venues
                                    including
                                    St John's College Chapel, Cambridge and The Temple Church, London. Having made their
                                    London debut in 2013 with a well received performance of Purcell’s Dido and Aeneas
                                    at
                                    the Grimeborn Opera Festival, Eboracum Baroque returned to the festival in August
                                    2014
                                    with a production of Handel’s Acis and Galatea. Eboracum Baroque returned to the
                                    festival in August 2014 with a production of Handel’s Acis and Galatea.
                                </p>
                            </div>
                            <div id="history-tab" class="tab-pane fade">
                                <div class="barocks">
                                    <div class="barocks-img"><img
                                            src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                            alt="art"></div>
                                    <div class="barocks-title">history-tab
                                    </div>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit dui dolor,
                                    eget
                                    fermentum ante
                                    ultricies ac. Quisque imperdiet eros quis ex tempor, eget rutrum lorem mattis. Proin
                                    sollicitudin
                                    suscipit vulputate. Nam faucibus porttitor tempus. Praesent rutrum vehicula enim
                                    eget
                                    facilisis.
                                    Curabitur tempor metus ut dui tempus, non elementum nunc finibus. Sed vitae
                                    hendrerit
                                    magna.
                                </p>
                            </div>
                            <div id="director-tab" class="tab-pane fade">
                                <div class="barocks">
                                    <div class="barocks-img"><img
                                            src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                            alt="art"></div>
                                    <div class="barocks-title">director
                                    </div>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit dui dolor,
                                    eget
                                    fermentum ante
                                    ultricies ac. Quisque imperdiet eros quis ex tempor, eget rutrum lorem mattis. Proin
                                    sollicitudin
                                    suscipit vulputate. Nam faucibus porttitor tempus. Praesent rutrum vehicula enim
                                    eget
                                    facilisis.
                                    Curabitur tempor metus ut dui tempus, non elementum nunc finibus. Sed vitae
                                    hendrerit
                                    magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <iframe width="100%" height="540"
                                src="https://www.youtube-nocookie.com/embed/5YOX8sYlP3M?rel=0&amp;controls=0"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- twitter -->
    <section class="container content-text">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4">


                    <div class="barrocks-twitter">
                        <!--                        118 characters, as will operate at 240 characters? -->
                        <div id="example1"></div>
                        <div class="footer-twitter">
                            - @Eboracumbaroque <a href="https://twitter.com/eboracumbaroque"><i
                                    class="pull-right fa fa-twitter"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                   
                    <figure>
                           <div class="imgwindex">
                               <?php 
                       $eventPosts = get_posts( array('post_type' => 'tribe_events',
                             'posts_per_page'=>'50') );
                               $count =0;
                               foreach($eventPosts as $ep){
                                   if((tribe_event_in_category("New CD",$ep->ID)) && ($count <= 1)){
                                       $count = $count +1;
                                       echo get_the_post_thumbnail($ep->ID)."</div>  
                        <figcaption>Order a copy of our new CD <a class='text-deco' href='$ep->guid '>here</a>!</figcaption>
                    </figure>";
                                   }
                               }
                               ?>
                </div>
                <div class="col-md-4 bad-col-lg-4">

                    <div class="table-wrap">
                       <?php TableEventsIndex();?>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- videos recording -->
    <section class=" content-text videos-recordings" id="recordings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6" id="videos">
                            <div class="barocks">
                                <div class="barocks-img"><img
                                        src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                        alt="art"></div>
                                <div class="barocks-title">videos
                                </div>

                            </div>
                            <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
                        </div>
                        <div class="col-sm-6 padding-col-lg-6" id="recordings">
                            <div class="barocks barocks-light">
                                <div class="barocks-img"><img
                                        src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                        alt="art"></div>
                                <div class="barocks-title">recordings
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <iframe width="100%" height="450" scrolling="no" frameborder="no"
                                            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/13874707&amp;color=202235&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                                </div>
                                <div class="col-lg-12">
                                    <div class="vr-title">OTHER RECORDINGS</div>
                                    <div class="vr-text">
                                        Eboracum Baroque are a group of young professional singers and instrumentalists
                                        at the start classical music careers. The group was formed in 2012 by Chris
                                        Parsons at the University of York and has performed all across the UK in
                                        prestigious venues including St John's College Chapel, Cambridge and The Temple
                                        Church, London.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THE GUARDIAN -->
    <section class="container content-text guard" id="guard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="center-title">
                        <div class="col-xs-12">
                            <img class="logo-head-2" src="<?php echo bloginfo('template_url'); ?>/img/stylich.png"
                                 alt="Stylish Choral singing">
                        </div>
                        
                        <div class="col-xs-12">
                            <div class="sect-the-guard">the guardian</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="title-news">LATEST NEWS</div>
                    <a href="<?php echo get_home_url(); ?>/category/our_news/"><img class="imgw" src="<?php echo bloginfo('template_url'); ?>/img/blog-post-2+.jpg" alt="people"></a>
                    <div class="text-guardian">Eboracum Baroque are a group of young professional singers and
                        instrumentalists at the
                        start classical music the
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="title-news">REVIEWS</div>
                    <a href="<?php echo get_home_url(); ?>/category/reviews/"><img class="imgw" src="<?php echo bloginfo('template_url'); ?>/img/THOMAS-TUDWAY-3.jpg"
                                                                                   alt="thomas"></a>
                    <div class="text-guardian">Eboracum Baroque are a group of young professional singers and
                        instrumentalists at the
                        start classical music the
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="title-news">BAROCKS!</div>
                    <a href="<?php echo get_home_url(); ?>/barocks/"><img class="imgw" src="<?php echo bloginfo('template_url'); ?>/img/education-2.jpg" alt="education"></a>
                    <div class="text-guardian">Eboracum Baroque are a group of young professional singers and
                        instrumentalists at the
                        start classical music the
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="title-news">THOMAS TUDWAY PROJECT
                    </div>
                    <a href="<?php echo get_home_url(); ?>/thomas-tudway-project/"><img class="imgw" src="<?php echo bloginfo('template_url'); ?>/img/THOMAS-TUDWAY-1.jpg"
                                                                                        alt="thomas"></a>
                    <div class="text-guardian">Eboracum Baroque are a group of young professional singers and
                        instrumentalists at the
                        start classical music the
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENTS -->
    <section class="content-text events" id="events">
        <div class="container">
            <div class="row events-proof">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="barocks">
                                <div class="barocks-img"><img
                                        src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                        alt="art"></div>
                                <div class="barocks-title">events
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-6">
                            <ul class="filter">
                                <li><div class="events-year">2016</div></li>
                                <li <?php 
                                          if((date("Y")== "2016") && (date("m")>="1") && (date("m")<"4")){
    echo "class='active in'";
    }
                                          ?>><a data-toggle="tab" href="#t16j">JAN - APR</a></li>
                                <li <?php 
                                          if((date("Y")== "2016") && (date("m")>="4") && (date("m")<"8")){
    echo "class='active in'";
    }
                                          ?>><a data-toggle="tab" href="#t16M">MAY - AUG</a></li>
                                <li <?php 
                                          if((date("Y")== "2016") && (date("m")>="8") && (date("m")<="12")){
    echo "class='active in'";
    }
                                          ?>><a data-toggle="tab" href="#t16S">SEP - DEC</a></li>
                                <li><div class="events-year">2017</div></li>
                                <li <?php 
                                          if((date("Y")== "2017") && (date("m")>="1") && (date("m")<"4")){
    echo "class='active in'";
    }
                                          ?>><a data-toggle="tab" href="#t17j">JAN - APR</a></li>
                                <li <?php 
                                          if((date("Y")== "2017") && (date("m")>="4") && (date("m")<"8")){
    echo "class='active in'";
    }
                                          ?>><a data-toggle="tab" href="#t17M">MAY - AUG</a></li>
                                <li <?php 
                                          if((date("Y")== "2017") && (date("m")>="8") && (date("m")<="12")){
    echo "class='active in'";
    }
                                          ?>><a data-toggle="tab" href="#t17S">SEP - DEC</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 tb-events-scroll tab-content">
                   
                    <div id="t16j" class="tab-pane fade <?php 
                                          if((date("Y")== "2016") && (date("m")>="1") && (date("m")<"4")){
    echo "active in";
    }
                                          ?>">
                       <?php EventsPost("2016","01","04");?>
                    </div>

                    <div id="t16M" class="tab-pane fade  <?php 
                                          if((date("Y")== "2016") && (date("m")>="4") && (date("m")<"8")){
    echo "active in";
    }
                                          ?>">
                    <?php EventsPost("2016","04","08");?>
                    </div>

                    <div id="t16S" class="tab-pane fade  <?php 
                                          if((date("Y")== "2016") && (date("m")>="8") && (date("m")<="12")){
    echo "active in";
    }
                                          ?>">
                       <?php EventsPost("2016","08","12");?>
                    </div>


                    <div id="t17j" class="tab-pane fade  <?php 
                                          if((date("Y")== "2017") && (date("m")>="1") && (date("m")<"4")){
    echo "active in";
    }
                                          ?>">
                        <?php EventsPost("2017","01","04");?>
                    </div>

                    <div id="t17M" class="tab-pane fade <?php 
                                          if((date("Y")== "2017") && (date("m")>="4") && (date("m")<"8")){
    echo "active in";
    }
                                          ?>">
                         <?php EventsPost("2017","04","08");?>
                    </div>

                    <div id="t17S" class="tab-pane fade <?php 
                                          if((date("Y")== "2017") && (date("m")>="8") && (date("m")<="12")){
    echo "active in";
    }
                                          ?>">
                         <?php EventsPost("2017","09","12");?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PAST EVENTS -->
    <section class="content-text past-events" id="past-gallery">
        <div class="container">
            <div class="row col-lg-12">
                <div class="col-sm-4">
                    <div class="barocks">
                        <div class="barocks-img"><img
                                src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                alt="art"></div>
                        <div class="barocks-title">past events
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="past-events-text">
                                Eboracum Baroque are a group of young professional <br/>
                                singers and instrumentalists at the start classical music careers. The group was formed
                                in 2012 by Chris Parsons at the University of York and has performed all across the UK
                                in prestigious venues including St John's College Chapel, Cambridge and The Temple
                                Church, London
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav navbar-tabs-custom">
                                <li class="active"><a class="title" data-toggle="tab" href="#year2015">2015</a></li>
                                <li><a class="title" data-toggle="tab" href="#year2014">2014</a></li>
                                <li><a class="title" data-toggle="tab" href="#year2013">2013</a></li>
                                <li><a class="title" data-toggle="tab" href="#year2012">2012</a></li>
                            </ul>

                            <!-- test -->

                            <div class="tab-content">
                                <div id="year2015" class="tab-pane fade in active">
                                    <?php
                                    EventsPosts("2015");
                                    ?>
                                </div>
                                <div id="year2014" class="tab-pane fade">
                                    <?php
                                    EventsPosts("2014");
                                    ?>
                                </div>
                                <div id="year2013" class="tab-pane fade">
                                    <?php
                                    EventsPosts("2013");
                                    ?>
                                </div>
                                <div id="year2012" class="tab-pane fade">
                                    <?php
                                    EventsPosts("2012");
                                    ?>
                                </div>
                                <!-- 
                                <ul class="nav">
                                        <li class="past-events-ln">
                                            <div>01.01<a href="#">CD Recording, <i>Wimpole Hall</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>20.02<a href="#">Evensong, <i>Ely Cathedral</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>20.03<a href="#">Concert in Wimpole Hall Long Gallery, <i>Cambridge</i></a>
                                            </div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>28.03<a href="#">Charpentier & Faure Requiem, <i>Great St. Marys,
                                                        Cambridge</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>25.04<a href="#">Deadly Durham with Horrible Histories Author, Terry
                                                    Deary</a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>20.06<a href="#">Tudway and Purcell, <i>St.Andrew’s Church Wimpole</i></a>
                                            </div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>27.06<a href="#">The Tempest & Bonduca with Terry Deary, <i>Treasurer’s
                                                        House York</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>01.01<a href="#">CD Recording, <i>Wimpole Hall</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>20.02<a href="#">Evensong, <i>Ely Cathedral</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>20.03<a href="#">Concert in Wimpole Hall Long Gallery, <i>Cambridge</i></a>
                                            </div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>28.03<a href="#">Charpentier & Faure Requiem, <i>Great St. Marys,
                                                        Cambridge</i></a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>25.04<a href="#">Deadly Durham with Horrible Histories Author, Terry
                                                    Deary</a></div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>20.06<a href="#">Tudway and Purcell, <i>St.Andrew’s Church Wimpole</i></a>
                                            </div>
                                        </li>
                                        <li class="past-events-ln">
                                            <div>27.06<a href="#">The Tempest & Bonduca with Terry Deary, <i>Treasurer’s
                                                        House York</i></a></div>
                                        </li>
                                    </ul>
                                 
                                   -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="row">


                        <?php echo do_shortcode('[supsystic-gallery id=3]'); ?>
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-1.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-2.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-3.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-4.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-5.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!---->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-6.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-7.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-8.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-9.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-10.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-11.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-md-3 col-sm-6 col-xs-3">-->
                        <!--                            <div class="row"><img src="-->
                        <?php //echo bloginfo('template_url'); ?><!--/img/content-12.jpg"-->
                        <!--                                                  alt="content" class="imgw imgh"></div>-->
                        <!--                        </div>-->
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- slider -->
    <section>
        <!--            data-ride="carousel"-->
        <?php echo do_shortcode('[wonderplugin_slider id="2"]'); ?>
    </section>
    <!-- slider -->


    <!-- contact us -->
    <section class="content-text contact-us" id="join_newsleter">

        <div class="container">
            <div class="row">
                <!--            <div class="col-lg-12">-->

                <div class="col-md-8">
                    <div class="col-lg-12 color-blue">
                        <!--                        <div class="row">-->
                        <div class="col-lg-12">
                            <div class="barocks barocks-light">
                                <div class="barocks-img"><img
                                        src="<?php echo bloginfo('template_url'); ?>/img/atr-symbol.png"
                                        alt="art"></div>
                                <div class="barocks-title">contact us
                                </div>
                            </div>
                        </div>
                        <!--                        </div>-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-sm-6 input-form">
                                    <?php echo do_shortcode('[bestwebsoft_contact_form]'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-text-form">
                                        Join our mailing list and keep in touch with the latest news, concerts and
                                        offers
                                        from Eboracum Baroque:
                                    </div>
                                    <div class="btn-padding-contact-us">
                                        <button onclick="myFunction()" class="input-form-submit" data-toggle="modal" data-target="#form-join">join mailing list</button>
                                    </div>
                                    <!--  buttons twitter facebook -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="twitter.com/eboracumbaroque" class="btn-contact-me"><i
                                                    class="fa fa-twitter"></i></a>
                                            <a href="facebook.com/EboracumBaroque" class="btn-contact-me"><i
                                                    class="fa fa-facebook"></i></a>
                                            <a href="https://www.youtube.com/channel/UCYp4g02I56ZBZli2ndmFsYw"
                                               class="btn-contact-me"><i class="fa fa-youtube"></i></a>
                                            <a href="souncloud.com/eboracum-baroque" class="btn-contact-me">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24">
                                                    <path
                                                        d="M7 17.939h-1v-8.068c.308-.231.639-.429 1-.566v8.634zm3 0h1v-9.224c-.229.265-.443.548-.621.857l-.379-.184v8.551zm-2 0h1v-8.848c-.508-.079-.623-.05-1-.01v8.858zm-4 0h1v-7.02c-.312.458-.555.971-.692 1.535l-.308-.182v5.667zm-3-5.25c-.606.547-1 1.354-1 2.268 0 .914.394 1.721 1 2.268v-4.536zm18.879-.671c-.204-2.837-2.404-5.079-5.117-5.079-1.022 0-1.964.328-2.762.877v10.123h9.089c1.607 0 2.911-1.393 2.911-3.106 0-2.233-2.168-3.772-4.121-2.815zm-16.879-.027c-.302-.024-.526-.03-1 .122v5.689c.446.143.636.138 1 .138v-5.949z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12  color-grey">
                                We would like to thank all our
                                supporters, our patrons etc.<br/>
                                A little afterword from bere
                                to full this gap that I have no idea
                                what to do with. Maybe also
                                a thanks for visiting the site.

                                <div>- Cbris Parsons, Director</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal -->
    <div id="form-join" class="modal fade" role="dialog">
        <div class="modal-dialog my-modal-dialog-size">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close my-modal-close" data-dismiss="modal">&times;</button>
                    <div class="row">
                        <div class="col-xs-12">
                            <iframe style="background: #292b41;" width="830" height="438" src="http://eboracumbaroque.us6.list-manage.com/subscribe?u=802cb6dded8614889af381dc4&id=a02fee952a"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/twitter.js"></script>
<?php get_footer(); ?>