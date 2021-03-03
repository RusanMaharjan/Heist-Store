<?php include("../../path.php") ?>
<?php
    include(ROOT_PATH . "/app/controllers/topics.php");
    adminOnly();
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin style -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Heist Store | Add Topics</title>
</head>
<body>
    
    <!--Navigation bar starts here-->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>
    <!--Navigation bar ends here-->


    <!--Admin Page Wrapper starts here-->
    <div class="admin-wrapper">         

        <!-- left-sidebar -->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php") ?>
        <!-- left sidebar ends here -->

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topics</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Topics</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="create.php" method="post">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Description</label>
                        <textarea name="description" id="body"><?php echo $description; ?></textarea>
                    </div>

                    <div>
                        <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
                    </div>

                </form>
            </div>

        </div>
        <!-- Admin Content ends here -->
        
    </div>
    <!--Admin Page Wrapper ends here-->
</body>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

    <!--Custom Script-->
    <script src="../../assets/js/script.js"></script>
</html>