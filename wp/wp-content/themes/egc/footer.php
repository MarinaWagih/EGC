<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 5:04 PM
 */
?>
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
<?php wp_footer();
?>
    </body>
</html>
