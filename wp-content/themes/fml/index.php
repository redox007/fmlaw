<?php get_header(); ?>
<header id="job-seeker">
    <div id="search-area" class="header-content ">
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only" for="exampleInputKeywords">Keywords</label>
                <input type="text" class="form-control" id="exampleInputKeywords" placeholder="Keywords">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPractice">Practice Area</label>
                <input type="text" class="form-control" id="exampleInputPractice" placeholder="Practice Area">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputWorkType">Work type</label>
                <input type="text" class="form-control" id="exampleInputWorkType" placeholder="Work type">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputLocation">Location</label>
                <input type="text" class="form-control" id="exampleInputLocation" placeholder="Location">
            </div>
            <button type="submit" class="btn button-search"><span class="search-text">Search</span> <i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
</header>
<section class="" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-left">
                <h5>Search Result</h5>
            </div>
            <div class="col-sm-6 text-right" >
                <span>Sory by</span><a href="#">V</a> 
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>