<?php
/* Template Name: faq */
get_header();
?>
<?php get_template_part('template-part/pages_header');?>

<div class="container-fluid d-flex justify-content-between px-md-5 px-2">
    <div class="contact-repeater col-12 px-md-5 px-0">
        <?php
            $i = 0;
            if( have_rows('contact_repeter') ){
                while ( have_rows('contact_repeter') ) { the_row(); 
                    if($i==0) {
                        echo '
                            <div class="panel panel-default collapsed">
                                <div class="panel-heading accordion-toggle question-toggle">
                                    <h4 class="panel-title" data-toggle="collapse" href="#collapsefaq'.$i.'" aria-expanded="true">
                                        <div itemprop="name">'.get_sub_field('contact_repeter_title').'</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.758" height="6.818" viewBox="0 0 10.758 6.818"><path id="Arrow" d="M5.379,6.817h0L3.923,5.366h0L0,1.452,1.455,0,5.379,3.914,9.3,0l1.455,1.452L6.514,5.685,5.379,6.818Z" fill="#9a9a9a"></path></svg>
                                    </h4>
                                </div>
                                <div id="collapsefaq'.$i.'" class="panel-collapse collapse show" style="">
                                    <div class="panel-body" itemprop="text"><p>'.get_sub_field('contact_repeter_des').'</p></div>
                                </div>
                            </div>
                        ';
                    } else {
                        echo '
                            <div class="panel panel-default collapsed">
                                <div class="panel-heading accordion-toggle question-toggle">
                                    <h4 class="panel-title collapsed" data-toggle="collapse" href="#collapsefaq'.$i.'">
                                        <div itemprop="name">'.get_sub_field('contact_repeter_title').'</div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.758" height="6.818" viewBox="0 0 10.758 6.818"><path id="Arrow" d="M5.379,6.817h0L3.923,5.366h0L0,1.452,1.455,0,5.379,3.914,9.3,0l1.455,1.452L6.514,5.685,5.379,6.818Z" fill="#9a9a9a"></path></svg>
                                    </h4>
                                </div>
                                <div id="collapsefaq'.$i.'" class="panel-collapse collapse" style="">
                                    <div class="panel-body" itemprop="text"><p>'.get_sub_field('contact_repeter_des').'</p></div>
                                </div>
                            </div>
                        ';
                    }?>


                    <?php 
                    $i++;
                }
            }
        ?>
    </div> 
</div> 


<?php get_footer(); ?>