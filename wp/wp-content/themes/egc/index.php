<?php get_header() ?>
    <div id="fullpage">
        <?php  get_template_part( 'home-page/section', 'home' ); ?>
        <?php  get_template_part( 'home-page/section', 'package' ); ?>
        <?php  get_template_part( 'home-page/section', 'about' ); ?>
        <?php  get_template_part( 'home-page/section', 'contact' ); ?>
    </div>
    <div class="language-desc dropdown left">
        <!-- Dropdown Trigger -->
        <a class='dropdown-button btn btn-language' href='#' data-activates='dropdown1'>
            <i class="material-icons">language</i>
        </a>
        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content dropdown-menu'>
            <?php pll_the_languages((array('show_slug'=>1,'show_names'=>0)));?>
        </ul>
    </div>

<?php get_footer() ?>