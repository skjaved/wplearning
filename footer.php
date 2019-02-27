<?php 
    /* This template is used to display footer */
?>
<footer class="site-footer">
    <div class="row footer-widgets">
        <div class="wiget-col col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <?php
                dynamic_sidebar( 'footer-widget-1' );
            ?>
        </div>
        <div class="wiget-col col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <?php
                dynamic_sidebar( 'footer-widget-2' );
            ?>
        </div>
        <div class="wiget-col col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <?php
                dynamic_sidebar( 'footer-widget-3' );
            ?>
        </div>
    </div>
</footer>
</div> <!-- closing of main container -->
</body>
<?php wp_footer() ?>
</html>

