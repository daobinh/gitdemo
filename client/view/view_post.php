
            <div class="col-lg-12">
<article class="hentry post post-standard-details">

    <div class="post-thumb post_img">
        <img class="img_view" src="<?php echo $data['image'] ?>" alt="seo">
    </div>

    <div class="post__content">


        <div class="post-additional-info">

            <div class="post__author author vcard">
                Posted by

                <div class="post__author-name fn">
                    <a href="#" class="post__author-link"><?php echo $user['name'] ?></a>
                </div>

            </div>

            <span class="post__date">

                <i class="seoicon-clock"></i>

                <time class="published" datetime="2016-03-20 12:00:00">
                   <?php echo $data['updated_at'] ?>
                </time>

            </span>

            <span class="category">
                <i class="seoicon-tags"></i>
                <a href="#"><?php echo $tag['name'] ?>,</a>
            </span>

        </div>

        <div class="post__content-info">
            <h4 class="post__subtitle"><?php echo $data['description'] ?></h4>
            <!-- <p class="post__subtitle"><?php echo $data['description'] ?>
            </p> -->

            <p class="post__subtitle"><?php echo $data['content'] ?>
            </p>

        </div>

        <div class="widget w-tags">
            <div class="tags-wrap">

                <a href="#" class="w-tags-item"><?php echo $tag['name'] ?></a>

            </div>
        </div>

        </div>


    <div class="socials">Share:
        <a href="#" class="social__item">
            <i class="seoicon-social-facebook"></i>
        </a>
        <a href="#" class="social__item">
            <i class="seoicon-social-twitter"></i>
        </a>
        <a href="#" class="social__item">
            <i class="seoicon-social-linkedin"></i>
        </a>
        <a href="#" class="social__item">
            <i class="seoicon-social-google-plus"></i>
        </a>
        <a href="#" class="social__item">
            <i class="seoicon-social-pinterest"></i>
        </a>
    </div>

</article>
</div>
<div class="col-lg-12">
    <aside aria-label="sidebar" class="sidebar sidebar-right">
        <div  class="widget w-tags">
            <div class="heading text-center">
                <h4 class="heading-title">ALL BLOG TAGS</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
            </div>

            <div class="tags-wrap">
                <?php foreach ($tags as $key => $val) {
                    
                ?>
                <a href="#" class="w-tags-item tag "><?php echo $val['name'] ?></a>
                <?php } ?>
            </div>
        </div>
    </aside>
</div>
