<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
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
    <title>Heist Store | Add Users</title>
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
                <a href="create.php" class="btn btn-big">Add Users</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>
                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
        
                    <div>
                        <label>Email</label>
                        <input type="email" value="<?php echo $email; ?>" name="email" class="text-input">
                    </div>
        
                    <div>
                        <label>Password</label>
                        <input type="password" value="<?php echo $password; ?>" name="password" class="text-input">
                    </div>
        
                    <div>
                        <label>Conrifm Password</label>
                        <input type="password" value="<?php echo $passwordConf; ?>" name="passwordconf" class="text-input">
                    </div>     

                    <div>
                        <?php if(isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                                Admin
                            </label>
                        <?php endif; ?>
                    </div>

                    <div>
                        <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
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