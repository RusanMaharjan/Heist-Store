<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

    if (isset($_GET['id'])) {
        $post = selectOne('posts', ['id' => $_GET['id']]);
    }
    $topics = selectAll('topics');
    //$post = selectAll('posts', ['published' => 1]);
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
    <title>Heist Store | <?php echo $post['title']; ?></title>
</head>
<body>

    <!--Facebook page plugin-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=653283358654272&autoLogAppEvents=1" nonce="MfCLW8Ea">
    </script>
    <!--Facebook page plugin ends here-->

    <!--Navigation bar starts here-->
        <?php
            include(ROOT_PATH . "/app/includes/header.php");
        ?>
    <!--Navigation bar ends here-->


        <!--Content Section starts here-->
        <div class="content clearfix">
            <!--Main content-->
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>

                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
            </div>
        </div>


            <div class="fb-page" data-href="https://www.facebook.com/memes" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/memes" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/memes">Memes</a></blockquote>
            </div>

            <!--side bar content-->
            <div class="sidebar single">
                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $p['title'] ?></h4>
                        </a>
                        </div>
                    <?php endforeach; ?>  
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $topic):?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!--Side bar ends here-->
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