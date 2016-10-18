<?php get_header(); ?>
<?php get_template_part('templates/tpl', 'search-job-form'); ?>
<section class="search-result-container">
    <div class="container">
        <div class="row search-header-texts">
            <div class="col-xs-6 text-left">
                <h5>Search Result</h5>
            </div>
            <div class="col-xs-6 text-right">
                <div class="sort-by">
                    <span>Sory by</span><a href="#"><i class="fa fa-angle-down fa-fw" aria-hidden="true"></i></a> 
                </div>
            </div>
        </div>
        <hr class="row-line">
    </div>
    <div class="container search-results">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <div class="row sr">
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
                            <h2 class="job-title font-capa text-green">ICT Strategist</h2>
                            <p class="sub-title">Sunshine Coast University Hospital</p>
                            <p class="contract-text">18 months contract</p>
                        </header>
                        <div class="content row">
                            <div class="col-sm-8">
                                <p class="small-details">
                                    Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-lrn-more search-readmore">Read More</a>
                    </div>
                </article>
            </div>
        <?php } ?>
    </div>
    <div class="container">
        <div class="pagination-container">
            <ul id="pagination">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">></a></li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>