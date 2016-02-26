<?php
    $settings = get_option( 'my_options' );
?>
    </div>

    <div class="site-content-bottom row">

        <div class="sidebar">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>

        <div class="column">
            <?php
                $field_footer_media = 'general_footer_media';
                if ( isset( $settings[$field_footer_media] ) )
                {
                    echo '<img src=' . $settings[$field_footer_media] . ' alt="Hosteria">';
                }

                $field_footer_text = 'general_footer_text_content';
                if ( isset( $settings[$field_footer_text] ) ) {
                    echo $settings[$field_footer_text];
                }
            ?>

            <h4>Hágase fan</h4>

            <?php
                $field_fb_url   = 'general_fb_url';
                $field_fb_label = 'general_fb_label';
                if ( isset( $settings[$field_fb_url] ) ) {
                    echo '<p>Síganos en <a href="' . $settings[$field_fb_url] . ' rel="external">'. $settings[$field_fb_label] . '</a>';
                }
            ?></p>
        </div>
    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">

        <div class="row-purple">
            <ul class="site-contact">
                <?php
                $field_address = 'general_address';
                if ( isset( $settings[$field_address] ) ) {
                    echo '<li><i class="icon-map-marker"></i> ' . $settings[$field_address] . '</li>';
                }

                $field_phone = 'general_phone';
                if ( isset( $settings[$field_phone] ) ) {
                    echo '<li><i class="icon-old-phone"></i> ' . $settings[$field_phone] . '</li>';
                }

                $field_cellphone = 'general_cellphone';
                if ( isset( $settings[$field_cellphone] ) ) {
                    echo '<li><i class="icon-mobile"></i> ' . $settings[$field_cellphone] . '</li>';
                }

                $field_email = 'general_email';
                if ( isset( $settings[$field_email] ) ) {
                    echo '<li><i class="icon-envelope"></i> ' . $settings[$field_email] . '</li>';
                }

                $field_fb_url   = 'general_fb_url';
                $field_fb_label = 'general_fb_label';
                if ( isset( $settings[$field_fb_url] ) ) {
                    echo '<li><i class="icon-facebook"></i> <a href="' . $settings[$field_fb_url] . '">'. $settings[$field_fb_label] . '</a></li>';
                }

                // $field_tw_url   = 'general_tw_url';
                // $field_tw_label = 'general_tw_label';
                // if ( isset( $settings[$field_tw_url] ) ) {
                //     echo '<li><a href="' . $settings[$field_tw_url] . '">'. $settings[$field_tw_label] . '</a></li>';
                // }

                // $field_gp_url   = 'general_gp_url';
                // $field_gp_label = 'general_gp_label';
                // if ( isset( $settings[$field_gp_url] ) ) {
                //     echo '<li><a href="' . $settings[$field_gp_url] . '">'. $settings[$field_gp_label] . '</a></li>';
                // }

                ?>
            </ul>
        </div>

        <div class="site-menu-footer">
        <?php
            $menuParameters = array(
                'theme_location' => 'footer',
                'container'      => false,
                'echo'           => false,
                'items_wrap'     => '%3$s',
                'depth'          => 0,
            );
            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
        ?>
        </div>

        <div class="site-info">
            <p>&copy; Copyright <?php echo date('Y'); ?>. <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>. Todos los derechos reservados.</p>
            <?php
            $field_copy = 'general_copy';
            if ( isset( $settings[$field_copy] ) ) {
                echo wpautop( $settings[$field_copy] );
            }
            ?>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
