<footer>
    <div class="main-footer mt-100">
        <div style="background: url(<?php the_field('footer_bg_img','options'); ?>) no-repeat;" class="footer-description col-12 col-lg-5 px-md-5">
            <?php echo '<img src="'.get_field('footer_logo','options')['url'].'" alt="'.get_field('footer_logo','options')['alt'].'" width="'.get_field('footer_logo','options')['width'].'" height="'.get_field('footer_logo','options')['height'].'">'; ?>
            <?php the_field('footer_des','options'); ?>
        </div>
        <div class="col-12 col-md-7 px-md-7 px-md-5 px-2">
            <div class="footer-detail col-12 col-md-12 px-0 mb-3">
                <div class="footer-detail-contact">
                    <?php the_field('footer_call_information','options'); ?>
                </div>
                <div class="footer-detail-menu">
                    <div class="footer-detail-menu-1">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'footer2',
                            'link_after' => '<svg id="Group_2779" data-name="Group 2779" xmlns="http://www.w3.org/2000/svg" width="18.577" height="16.971" viewBox="0 0 18.577 16.971"><g id="Path_11293" data-name="Path 11293" transform="translate(4.907 3.096)" fill="none"><path d="M2.737-3.1C7.513-3.1,13.669-.3,13.669,4.472s-3.94,9.4-8.715,9.4S-4.907,10.776-4.907,6-2.038-3.1,2.737-3.1Z" stroke="none"/><path d="M 2.737371444702148 -1.096317291259766 C -0.9684286117553711 -1.096317291259766 -2.9073486328125 2.474061965942383 -2.9073486328125 6.000952243804932 C -2.9073486328125 7.992691993713379 -1.64374828338623 9.338342666625977 -0.5837182998657227 10.1164722442627 C 0.9163613319396973 11.21763229370117 2.986661434173584 11.87504196166992 4.954341411590576 11.87504196166992 C 6.652541160583496 11.87504196166992 8.308571815490723 11.07587242126465 9.617371559143066 9.62474250793457 C 10.92141151428223 8.178892135620117 11.6693115234375 6.300792217254639 11.6693115234375 4.471992492675781 C 11.6693115234375 2.636972427368164 10.194411277771 1.357512474060059 8.957111358642578 0.6073026657104492 C 7.224011421203613 -0.4435272216796875 4.840741157531738 -1.096317291259766 2.737371444702148 -1.096317291259766 M 2.737371444702148 -3.096317291259766 C 7.512611389160156 -3.096317291259766 13.6693115234375 -0.3032674789428711 13.6693115234375 4.471992492675781 C 13.6693115234375 9.247262001037598 9.729581832885742 13.87504196166992 4.954341411590576 13.87504196166992 C 0.1791009902954102 13.87504196166992 -4.9073486328125 10.77621269226074 -4.9073486328125 6.000952243804932 C -4.9073486328125 1.225692749023438 -2.037858963012695 -3.096317291259766 2.737371444702148 -3.096317291259766 Z" stroke="none" fill="#898989"/></g><path id="Path_11294" data-name="Path 11294" d="M3.744,0C6.082,0,9.1,1.368,9.1,3.706a4.6,4.6,0,0,1-4.268,4.6C2.491,8.311,0,6.794,0,4.455S1.405,0,3.744,0Z" transform="translate(3.133 8.226) rotate(-40)" fill="#898989"/></svg>'
                        ) ); ?>
                    </div>
                    <div class="footer-detail-menu-2">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'footer3',
                            'link_after' => '<svg id="Group_2779" data-name="Group 2779" xmlns="http://www.w3.org/2000/svg" width="18.577" height="16.971" viewBox="0 0 18.577 16.971"><g id="Path_11293" data-name="Path 11293" transform="translate(4.907 3.096)" fill="none"><path d="M2.737-3.1C7.513-3.1,13.669-.3,13.669,4.472s-3.94,9.4-8.715,9.4S-4.907,10.776-4.907,6-2.038-3.1,2.737-3.1Z" stroke="none"/><path d="M 2.737371444702148 -1.096317291259766 C -0.9684286117553711 -1.096317291259766 -2.9073486328125 2.474061965942383 -2.9073486328125 6.000952243804932 C -2.9073486328125 7.992691993713379 -1.64374828338623 9.338342666625977 -0.5837182998657227 10.1164722442627 C 0.9163613319396973 11.21763229370117 2.986661434173584 11.87504196166992 4.954341411590576 11.87504196166992 C 6.652541160583496 11.87504196166992 8.308571815490723 11.07587242126465 9.617371559143066 9.62474250793457 C 10.92141151428223 8.178892135620117 11.6693115234375 6.300792217254639 11.6693115234375 4.471992492675781 C 11.6693115234375 2.636972427368164 10.194411277771 1.357512474060059 8.957111358642578 0.6073026657104492 C 7.224011421203613 -0.4435272216796875 4.840741157531738 -1.096317291259766 2.737371444702148 -1.096317291259766 M 2.737371444702148 -3.096317291259766 C 7.512611389160156 -3.096317291259766 13.6693115234375 -0.3032674789428711 13.6693115234375 4.471992492675781 C 13.6693115234375 9.247262001037598 9.729581832885742 13.87504196166992 4.954341411590576 13.87504196166992 C 0.1791009902954102 13.87504196166992 -4.9073486328125 10.77621269226074 -4.9073486328125 6.000952243804932 C -4.9073486328125 1.225692749023438 -2.037858963012695 -3.096317291259766 2.737371444702148 -3.096317291259766 Z" stroke="none" fill="#898989"/></g><path id="Path_11294" data-name="Path 11294" d="M3.744,0C6.082,0,9.1,1.368,9.1,3.706a4.6,4.6,0,0,1-4.268,4.6C2.491,8.311,0,6.794,0,4.455S1.405,0,3.744,0Z" transform="translate(3.133 8.226) rotate(-40)" fill="#898989"/></svg>'
                        ) ); ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 px-md-12 px-0 mb-3">
                <div class="btn-box content-slide-btn border1">
                    <p><?php the_field('footer_link_description','options'); ?></p>
                    <a class="btn" href="<?php the_field('footer_link_address','options'); ?>"><?php the_field('footer_link_title','options'); ?></a>
                </div>
            </div>
            <div class="social-media-box col-12 col-md-12 px-md-12 px-0 mb-3">
                <p><?php the_field('footer_social_description','options'); ?></p>
                <div class="social-media">
                    <?php
                        if( have_rows('footer_social_repeater','options') ){
                            while ( have_rows('footer_social_repeater','options') ) { the_row(); ?>
                                <a href="<?php the_sub_field('footer_social_repeater_link','options'); ?>">
                                    <?php the_sub_field('footer_social_repeater_icon','options'); ?>
                                </a>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p><?php the_field('footer_copyright','options'); ?></p>
    </div>
</footer>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

<script>

jQuery(document).ready(function () {
    jQuery('.owl-posts').owlCarousel({
        loop: false,
        nav: false,
        rtl: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            1200: {
                items: 1
            },
            992: {
                items: 1
            },
            768: {
                items: 1,
            },
            576: {
                items: 1,
            },
            0: {
                items: 1,
            },
        },

    });
    jQuery('.owl-events').owlCarousel({
        loop: false,
        nav: false,
        rtl: false,
        autoplay: false,
        margin: -70,
        responsiveClass: true,
        responsive: {
            1200: {
                items: 5
            },
            992: {
                items: 5
            },
            768: {
                items: 3,
                margin: 0,
                autoplay: true,
            },
            576: {
                items: 2,
                margin: 0,
                autoplay: true,
            },
            0: {
                items: 2,
                margin: 0,
                autoplay: true,
            },
        },

    });
});
</script>


<?php wp_footer(); ?>


</body>
</html>