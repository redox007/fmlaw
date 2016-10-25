<?php
/*
 * Template Name: Default Blog
 */
?>
<?php get_header(); ?>
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
                    <div class="banner-text text-center">
                        <h2 class="title text-white">Lighting the way whatever your situation</h2>
                        <a class="btn btn-lrn-more btn-lrn-more-white" href="#">Learn More</a>
                    </div>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/banner-1.jpg" alt="First slide">
                </div>
            <?php } ?>
        </div>
        <!--        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->
        <div class="arrow-down text-center text-white">
            <span class="glyphicon glyphicon-menu-down"></span>
        </div>
    </div>
</div>
<div class="section-pd what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="box-heading text-center">What We Do</h2>
                <div class="section-m squize-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d'art
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d
                    </p>
                </div>
                <h2 class="box-heading text-center text-uppercase">AREAS OF PRACTISE</h2>
                <div class="section-m service">
                    <div class="row">
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/buisness-commercial.png" class="img-responsive">
                            <p>Buisness & Commercial</p>
                        </div>
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/contesting-will.png" class="img-responsive">
                            <p>Contesting a will</p>
                        </div>
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/conveyancing.png" class="img-responsive">
                            <p>Conveyancing</p>
                        </div>
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/compention-law.png" class="img-responsive">
                            <p>Compensation Law</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/criminal.png" class="img-responsive">
                            <p>Criminal</p>
                        </div>
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/divorce-family.png" class="img-responsive">
                            <p>Divorce & family</p>
                        </div>
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/domesticvoilance.png" class="img-responsive">
                            <p>Domestic Violence</p>
                        </div>
                        <div class="col-sm-3 section-p">
                            <img src="<?php echo get_bloginfo('template_url'); ?>/img/wills-estate-planning.png" class="img-responsive">
                            <p>Wills & Estate Planning</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-lrn-more" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-pd who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="box-heading text-center text-white">What We Do</h2>
                <div class="section-m squize-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d'art
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed d
                    </p>
                </div>
                <div class="text-center">
                    <a class="btn btn-lrn-more btn-lrn-more-white" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-pd news-latter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-inline">
                    <div class="row">
                        <div class="form-group col-sm-3">
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                        </div>
                        <div class="form-group  col-sm-3">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <div class="form-group  col-sm-3">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <div class="form-group  col-sm-3">
                            <button type="submit" class="btn form-control contact-buttton">Send invitation</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="section-pd whats-new">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="box-heading text-center text-white section-bm">What We Do</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/news-1.png" class="img-responsive" />
                        <div class="section-m">
                            <h3 class="news-heading">Topical headline bold style here</h3>
                            <p>Topical headline bold style here  Adipisicing elit, sed do eius Topical headline bold style here  Adipisicing elit, sed do eiusTopical headline bold style here  Adipisicing elit, sed do eius</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-lrn-more btn-lrn-more-white" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/news-2.png" class="img-responsive" />
                        <div class="section-m">
                            <h3 class="news-heading">Topical headline bold style here</h3>
                            <p>Topical headline bold style here  Adipisicing elit, sed do eius Topical headline bold style here  Adipisicing elit, sed do eiusTopical headline bold style here  Adipisicing elit, sed do eius</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-lrn-more btn-lrn-more-white" href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/img/news-3.png" class="img-responsive" />
                        <div class="section-m">
                            <h3 class="news-heading">Topical headline bold style here</h3>
                            <p>Topical headline bold style here  Adipisicing elit, sed do eius Topical headline bold style here  Adipisicing elit, sed do eiusTopical headline bold style here  Adipisicing elit, sed do eius</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-lrn-more btn-lrn-more-white" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-pd loook-forward">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="box-heading text-center text-blue section-bm">WE LOOK FORWARD TO WORKING WITH YOU</h2>
                <div class="text-center">
                    <a class="btn btn-lrn-more text-uppercase" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>