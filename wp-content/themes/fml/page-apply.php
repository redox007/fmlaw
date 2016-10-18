<?php
/*
 * Template Name: Apply Page Template
 */
?>
<?php get_header(); ?>
<div class="container">
    <hr class="row-line">
    <div class="row search-header-texts">
        <div class="col-xs-6 text-left">
            <h5>Search > Job Description > Apply</h5>
        </div>
        <div class="col-xs-6 text-right">
            <div class="sort-by">
                <span>Cancel</span><a href="#"><i class="fa fa-times fa-fw" aria-hidden="true"></i></a> 
            </div>
        </div>
    </div>
    <hr class="row-line">
</div>
<section>
    <div class="container">
        <div class="row">
            <article class="col-md-12 job apply">
                <div class="row top">
                    <div class="tags col-sm-6 pull-right">
                        <span class="tag">ICT</span>
                        <span class="tag">CONTRACT</span>
                        <span class="tag">QUEENSLAND</span>
                    </div>
                    <div class="col-sm-6 pull-left">
                        <h2 class="job-title font-capa text-green nomt nombt"><?php the_title(); ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="sub-title">Sunshine Coast University Hospital</p>
                <p class="contract-text">18 months contract</p>
            </article>
        </div>
    </div>
</section>
<div class="container contact apply">
    <div  class="row">
        <div class="col-sm-3 form-group">
            <input class="form-control" type="text" placeholder="First Name*"/>
        </div>
        <div class="col-sm-3 form-group">
            <input class="form-control" type="text" placeholder="Last Name*"/>
        </div>
        <div class="col-sm-3 form-group">
            <input class="form-control" type="text" placeholder="Email*"/>
        </div>
        <div class="col-sm-3 form-group">
            <input class="form-control" type="text" placeholder="Mobile*"/>
        </div>
    </div>
    <div  class="row">
        <div class="col-sm-3 form-group">
            <input class="form-control" type="text" placeholder="Upload CV"/>
        </div>
        <div class="col-sm-3 form-group">
            <input class="form-control btn btn-lrn-more" type="button" value="Browse"/>
        </div>
        <div class="col-sm-3 form-group">
            <input class="form-control" type="text" placeholder="Upload Covr Latter*"/>
        </div>
        <div class="col-sm-3 form-group">
            <input class="form-control btn btn-lrn-more" type="button" value="Browse"/>
        </div>
        <div class="col-sm-12 form-group">
            <p class="ctext">Accepted files are DOCX,DOC,PDF,RTF,TXT, File Size :  2 MB</p>
        </div>
    </div>
    <section class="row">
        <div class="col-sm-12">
            <input type="submit" value="Submit" class="btn btn-lrn-more btn-large" />
        </div>
    </section>
</div>
<?php
get_footer();
