<?php
// Grid Columns

add_shortcode('btn', 'shortcode_learn_more');

function shortcode_learn_more($atts, $content = null, $shortcodename = "") {

    $output = '';
    extract(shortcode_atts(array(
        "link" => '#',
        'color' => 'green',
        'text' => 'Learn More'
                    ), $atts));
    $c = 'btn btn-lrn-more';
    if ($color == 'white') {
        $c = 'btn btn-lrn-more btn-lrn-more-white';
    }
    $output .= '<a class="' . $c . '" href="' . $link . '">' . $text . '</a>';

    return $output;
}

add_shortcode('col', 'shortcode_collumns');

function shortcode_collumns($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "no" => '12',
        "type" => 'lg',
        'class' => ''
                    ), $atts));
    $output = '';

    $output .= '<div class="col-' . $type . '-' . $no . ' ' . $class . '">';
    $output .= do_shortcode($content);
    $output .= '</div>';

    return $output;
}

add_shortcode('block', 'shortcode_block');

function shortcode_block($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        'class' => ''
                    ), $atts));
    $output = '';

    $output .= '<div class="' . $class . '">';
    $output .= do_shortcode($content);
    $output .= '</div>';

    return $output;
}

add_shortcode('offset-block', 'shortcode_offset_block');

function shortcode_offset_block($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        'class' => ''
                    ), $atts));
    $output = '';
    $class = "innerer-offset-content " . $class;
    $output .= '<div class="' . $class . '">';
    $output .= do_shortcode($content);
    $output .= '</div>';

    return $output;
}

add_shortcode('section', 'shortcode_section');

function shortcode_section($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "id" => 'lg',
        'class' => ''
                    ), $atts));
    $output = '';

    $output .= '<section class="' . $class . '" id="' . $id . '">';
    $output .= do_shortcode($content);
    $output .= '</section>';

    return $output;
}

add_shortcode('offset-inner', 'shortcode_offset_inner');

function shortcode_offset_inner($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "id" => '',
        'class' => ''
                    ), $atts));
    $output = '';

    $output .= '<div class="innerer-offset-content ' . $class . '" id="' . $id . '">';
    $output .= do_shortcode($content);
    $output .= '</div>';

    return $output;
}

add_shortcode('outset-inner', 'shortcode_outset_inner');

function shortcode_outset_inner($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "id" => '',
        'class' => ''
                    ), $atts));
    $output = '';

    $output .= '<div class="innerer-outset-content ' . $class . '" id="' . $id . '">';
    $output .= do_shortcode($content);
    $output .= '</div>';

    return $output;
}

add_shortcode('htext', 'shortcode_htext');

function shortcode_htext($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "id" => '',
        'class' => ''
                    ), $atts));
    $output = '';

    $output .= '<h1 class="section-heading font-capa text-green text-uppercase' . $class . '">';
    $output .= do_shortcode($content);
    $output .= '</h1>';

    return $output;
}

add_shortcode('line', 'shortcode_line');

function shortcode_line($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "id" => '',
        'class' => '',
        'gap' => ""
                    ), $atts));
    $output = '';
    if ($gap) {
        $gap = explode(' ', $gap);
        $gap = implode("px ", $gap);
    }
    $output .= '<hr class="green-line ' . $class . '" style="margin:' . $gap . ';" />';

    return $output;
}

add_shortcode('gap', 'shortcode_gap');

function shortcode_gap($atts, $content = null, $shortcodename = "") {
    extract(shortcode_atts(array(
        "id" => 'lg',
        'class' => '',
        'px' => ''
                    ), $atts));
    $output = '';
    if ($px) {
        $attr = "style='padding:" . ($px / 2) . "px 0;'";
    } else {
        $attr = 'class="gap"';
    }

    $output .= "<div $attr>";
    $output .= '</div>';

    return $output;
}

add_shortcode('services', 'pim_services');

function pim_services($atts, $content = null, $shortcodename = "") {

    extract(shortcode_atts(array(
        "limit" => '6',
        'full' => '0',
        'class' => ''
                    ), $atts));
    $type = 'service';
    query_posts("post_type=" . $type . "&showposts=" . $limit . "&post_status=publish&order=ASC");

    ob_start();
    ?>
    <section id="what-we-do" class="<?php echo $class; ?>"> 
        <div class="row img-row">
            <div class="col-lg-12 text-center">
                <div class="row">
                        <?php while (have_posts()):the_post(); ?>
                        <div class="col-sm-2 wwd" id="<?php echo "SPID-" . get_the_ID(); ?>">
                            <?php the_post_thumbnail('wwd', array('class' => 'img-responsive')); ?>
                            <p><?php the_title(); ?></p>
                            <?php if ($full == 1) { ?>
                                <span class='arrow-up'></span>
                        <?php } ?>
                        </div>
    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php if ($full == 1) { ?>
            <hr class="line">
            <section class="row in-details">
        <?php while (have_posts()):the_post(); ?>
                    <div class="col-lg-12 text-center wwd-d" data-atr="#<?php echo "SPID-" . get_the_ID(); ?>">
                        <div class="innerer-offset-content">
            <?php the_content(); ?>
                        </div>
                    </div>
            <?php endwhile; ?>
            </section>
    <?php } ?>
    </section>

    <?php
    wp_reset_query();

    $output = ob_get_clean();

    return $output;
}

add_shortcode('collapsibles', 'bs_collapsibles');

function bs_collapsibles($atts, $content = null) {

    if (isset($GLOBALS['collapsibles_count']))
        $GLOBALS['collapsibles_count'] ++;
    else
        $GLOBALS['collapsibles_count'] = 0;

    $defaults = array();
    extract(shortcode_atts($defaults, $atts));

    // Extract the tab titles for use in the tab widget.
    preg_match_all('/collapse title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE);

    $tab_titles = array();
    if (isset($matches[1])) {
        $tab_titles = $matches[1];
    }

    $output = '';

    if (count($tab_titles)) {
        $output .= '<div class="accordion" id="accordion2' . $GLOBALS['collapsibles_count'] . '">';
        $output .= do_shortcode($content);
        $output .= '</div>';
    } else {
        $output .= do_shortcode($content);
    }

    return $output;
}

add_shortcode('collapse', 'bs_collapse');

function bs_collapse($atts, $content = null) {

    if (!isset($GLOBALS['current_collapse']))
        $GLOBALS['current_collapse'] = 0;
    else
        $GLOBALS['current_collapse'] ++;


    $defaults = array('title' => 'Tab', 'state' => '');
    extract(shortcode_atts($defaults, $atts));

    if (!empty($state))
        $state = 'in';

    return '
   <div class="accordion-group">
      <div class="accordion-heading">
      
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2' . $GLOBALS['collapsibles_count'] . '" href="#collapse_' . $GLOBALS['current_collapse'] . '_' . sanitize_title($title) . '">
        ' . $title . ' 
        </a>

      </div>
      <div id="collapse_' . $GLOBALS['current_collapse'] . '_' . sanitize_title($title) . '" class="panel-collapse collapse ' . $state . '">
        <div class="accordion-inner">
          ' . do_shortcode($content) . ' 
        </div>
      </div>
    </div>
    ';
}

add_action('after_setup_theme', 'pim_setup');
?>