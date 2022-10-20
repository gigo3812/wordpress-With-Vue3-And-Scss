   <!-- comments -->
   <?php
    if (have_posts()) {

    ?>



       <div class="container my-5" id="comments">
           <div class="comment-section">
               <div class="physical-product-title mx-2">
                   <h3>آخرین پست های ثبت شده</h3>
               </div>
               <?php
                while (have_posts()) {

                    the_post(); ?>

                   <div class="comment">
                       <div class="comment-detail">
                           <div class="name">
                               <h2><?php the_title(); ?></h2>
                           </div>
                           <div class="d-flex justify-content-between dv-comments">
                               <div class="d-flex align-items-center">
                                   <div class="someone-commented-img">
                                       <img src="<?php the_post_thumbnail('medium');  ?>" class="img-fluid img" alt="someone commented image" />
                                   </div>
                                   <div class="someone-commented-name-date mx-1 mx-md-4">
                                       <div class="name">
                                           <h4>نویسنده <?php the_author(); ?> </h4>
                                       </div>

                                       <div class="date">
                                           <span>تاریخ</span>
                                           <span> <?php the_time() ?></span>
                                       </div>


                                   </div>
                               </div>

                           </div>
                           <div class="comment-text">
                               <?php the_excerpt() ?> </div>

                       </div>

                   </div>

           <?php }
            }

            ?>

           </div>
       </div>