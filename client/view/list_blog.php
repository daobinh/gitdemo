<?php foreach ($data as $key => $value) {
   
 ?>
<div class="col-lg-6">
    <article class="hentry post post-standard has-post-thumbnail sticky">

            <div class="post-thumb">
                <img src="<?php echo $value['image'] ?>" alt="seo">
                <div class="overlay"></div>
                <a href="<?php echo $value['image'] ?>" class="link-image js-zoom-image">
                    <i class="seoicon-zoom"></i>
                </a>
                <a href="#" class="link-post">
                    <i class="seoicon-link-bold"></i>
                </a>
            </div>
            <div class="post__content">

                <div class="post__content-info post_list">

                        <h2 class="post__title entry-title ">
                            <a href="home.php?view=view_id&id=<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a>
                        </h2>

                        <div class="post-additional-info">

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-04-17 12:00:00">
                                    <?php echo $value['updated_at'] ?>
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">post</a>
                            </span>

                            <span class="post__comments">
                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i></a>
                                6
                            </span>

                        </div>
                </div>
            </div>

    </article>
</div>
<?php } ?>
<div class="row">
<ul class="pagination_php">
    <?php
        // hiện thị phân trang
        if ($current_page > 1 && $total_pages > 0 ) {
           echo "<li><a  href='home.php?page=".($current_page-1)."'>Previous</a></li>";
        }
        
        // dùng vòng for để hiện thị các link trang
        // 
        // lặp giữa khoảng cách min và max để hiện thị các nút
        
        for ($i=$start_page; $i <= $end_page ; $i++) { 
            // trang hiện tại
            if ($current_page == $i) {
                echo "<li class='active' ><a  href='home.php?page=".$i."'>$i</a></li>";
            }
            else{
                echo "<li><a href='home.php?page=".$i."'>$i</a></li>";
            }
            
        }
        
        // nút next
        if ($current_page < $total_pages && $total_pages > 1) {
            echo "<li><a  href='home.php?page=".($current_page+1)."'>Next</a></li>";
        }
        

    ?> 
</ul>
</div>