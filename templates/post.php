   <!-- comments -->
   <?php
    if (have_posts()) {

    ?>


       <section class="container">

           <div class=" my-5  post-comment">
               <div class="comment-section">
                   <?php
                    while (have_posts()) {

                        the_post(); ?>

                       <div class="comment">
                           <div class="comment-detail">

                               <div class="d-flex justify-content-between dv-comments">
                                   <div class="name">
                                       <h2><?php the_title(); ?></h2>
                                   </div>
                                   <div class="d-flex align-items-center">
                                       <div class="someone-commented-name-date mx-1 mx-md-4">
                                           <div class="name">
                                               <h4>نویسنده <?php the_author(); ?> </h4>
                                           </div>

                                           <div class="date">
                                               <span>تاریخ</span>
                                               <span> <?php the_date() ?></span>
                                           </div>


                                       </div>
                                   </div>

                               </div>
                               <div class="comment-text">
                                   <?php if (is_singular()) {
                                        the_content(); ?>
                                       <!-- <a href="">برگشت</a> -->

                                   <?php } else {
                                        the_excerpt(); ?>
                                       <a href="<?php echo get_permalink();  ?>">ادامه مطلب</a>
                                   <?php } ?>
                               </div>

                           </div>

                       </div>

               <?php }
                }

                ?>

               </div>
           </div>
       </section>