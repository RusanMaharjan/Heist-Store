<?php 
    include("path.php");
    include(ROOT_PATH . "/app/controllers/topics.php");

    $posts = array();
    $postsTitle = 'Recent Posts';

    if (isset($_GET['t_id'])) {
        $posts = getPostsByTopicId($_GET['t_id']);
        $postsTitle = "You have searched for posts under '" . $_GET['name'] . "'";
    }else if (isset($_POST['search-term'])){
        $postsTitle = "You have searched for '" . $_POST['search-term'] . "'";
        $posts = searchPosts(($_POST['search-term']));
    } else {
        $posts = getPublishedPosts();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <!-- Custom style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Heist Store</title>
</head>
<body>
    
    <!--Navigation bar starts here-->
    <?php
        include(ROOT_PATH . "/app/includes/header.php");
        include(ROOT_PATH . "/app/includes/messages.php");
    ?>
    <!--Navigation bar ends here-->


    <!--Page Wrapper starts here-->
    <div class="page-wrapper">         
        <!--Post Slider Starts here-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Post</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
                <!--Section for post in slider-->
                
                <?php foreach ($posts as $post):?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="first-image" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                            <i class="far fa-user"><?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        </div>
                    </div>
                <?php endforeach; ?>

                

                
            </div>
        </div>
        <!--Post Slider ends here-->

        <!--Content Section starts here-->
        <div class="content clearfix">
            <!--Main content-->
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle; ?></h1>
                <!--Post for content starts here-->

                <?php foreach($posts as $post): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                            <i class="far fa-user"> <?php echo $post['username']; ?> </i>
                            &nbsp;
                            <i class="far-fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                            <p class="preview-text">
                               <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>              

            <!--side bar content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="POST">
                        <input type="text" name="search-term" class="text-input" placeholder="search">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>

                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                    <?php endforeach; ?>
                    <!--
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lession</a></li>
                    -->
                    </ul>
                </div>
            </div>
        </div>
        <!--content section ends here-->
    </div>
    <!--Page Wrapper ends here-->

    <!--footer section goes here-->
        <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
    <!--footer section ends here-->
</body>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!--Custom Script-->
    <script src="assets/js/script.js"></script>
</html>