<div class="container">
    <div class="row">
        <div class="col-xs-6 text-left">
            <h5>Search > Job Description > Apply</h5>
        </div>
        <div class="col-xs-6 text-right">
            <span>Cancel</span><a href="#"><i class="fa fa-times fa-fw" aria-hidden="true"></i></a> 
        </div>
    </div>
    <hr class="line">
</div>
<div class="container">
    <div class="row">
        <article class="col-md-12 job">
            <div class="bc">
                <header>
                    <div class="row top">
                        <div class="tags col-md-10 pull-right">
                            <span class="tag">ICT</span>
                            <span class="tag">CONTRACT</span>
                            <span class="tag">QUEENSLAND</span>
                        </div>
                        <div class="date col-md-2 pull-left">May 5, 2016</div>
                        <div class="clearfix"></div>
                    </div>
                    <h2 class="job-title font-capa text-green"><?php the_title(); ?></h2>
                    <p class="sub-title"><?php echo get_post_meta('sub-title', get_the_ID()); ?></p>
                    <p class="contract-text">18 months contract</p>
                </header>
            </div>
        </article>
    </div>
</div>
<div class="container">
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
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="ctext">Accepted files are DOCX,DOC,PDF,RTF,TXT, File Size :  2 MB</p>
            <input type="submit" value="Submit" class="btn btn-lrn-more" />
        </div>
    </div>
</div>