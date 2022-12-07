<?php 
include_once __DIR__ .'/connection.php'; 
  $page_name = 'Home'; // Gives a value if page name is missing
  include_once 'components/header.php'
?>
<main>
    <?php include "components/sidebar.php" ?>
            <div class="main__inventory">
                <h2>Appetizers</h2>
                <div class="main__contentReel">
                    <div class="main__reelArrows">
                    <div class="leftArrow">
                        <img class="arrow" src="media/leftArrow.png" />
                    </div>
                    <div class="rightArrow">
                        <img class="arrow" src="media/rightArrow.png" />
                    </div>
                    </div>
                    <div class="main__contentRow"></div>
                        <div class="post">
                            <a href="<?php echo site_url();?>/details.php"><img class="featured" src="media/fenchfy.jpg" /></a>
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                    </div>
                    <h2>Main courses</h2>
                <div class="main__contentReel">
                    <div class="main__reelArrows">
                    <div class="leftArrow">
                        <img class="arrow" src="media/leftArrow.png" />
                    </div>
                    <div class="rightArrow">
                        <img class="arrow" src="media/rightArrow.png" />
                    </div>
                    </div>
                    <div class="main__contentRow"></div>
                        <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                    </div>
                    <h2>Sides</h2>
                <div class="main__contentReel">
                    <div class="main__reelArrows">
                    <div class="leftArrow">
                        <img class="arrow" src="media/leftArrow.png" />
                    </div>
                    <div class="rightArrow">
                        <img class="arrow" src="media/rightArrow.png" />
                    </div>
                    </div>
                    <div class="main__contentRow"></div>
                        <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                    </div>
                    <h2>Desserts</h2>
                <div class="main__contentReel">
                    <div class="main__reelArrows">
                    <div class="leftArrow">
                        <img class="arrow" src="media/leftArrow.png" />
                    </div>
                    <div class="rightArrow">
                        <img class="arrow" src="media/rightArrow.png" />
                    </div>
                    </div>
                    <div class="main__contentRow"></div>
                        <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                         <div class="post">
                            <img class="featured" src="https://via.placeholder.com/150" />
                         </div>
                    </div>
                </div>
            </div>
    </main>
<?php include "components/footer.php" ?>