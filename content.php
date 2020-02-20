<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 commentWhatOurTouristSay">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-am-12 col-12 imageWhatOurTouristSay">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-lg-7 col-md-7 col-am-12 col-12 textCommentWhatOurTouristSay">
                <div class="nameUser">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="comment">
                    <i class="fas fa-quote-left"></i>
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</div>