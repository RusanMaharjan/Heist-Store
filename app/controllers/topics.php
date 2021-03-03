<?php
    include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/helpers/validateTopic.php");
    include(ROOT_PATH . "/app/helpers/middleware.php");

    //global variables
    $table = 'topics';
    $errors = array();
    $id = '';
    $name = '';
    $description = '';

    //select all function for topic
    //selectAll function is already created in db.php page
    $topics = selectAll($table);


    //query for adding topic to database and redirect it to manage page
     if(isset($_POST['add-topic'])){
        adminOnly();
        $errors = validateTopic($_POST);

        if (count($errors) === 0) {
            unset($_POST['add-topic']);
            $topic_id = create('topics', $_POST);
            $_SESSION['message'] = 'Topics Created Sucessfully';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/topics/index.php');
            exit();
        }else {            
            $name = $_POST['name'];
            $description = $_POST['description'];

        }       
     }

     //select row by getting id from database
     if(isset($_GET['id'])){
         $id = $_GET['id'];
         $topic = selectOne($table, ['id' => $id]);
         $id = $topic['id'];
         $name = $topic['name'];
         $description = $topic['description'];
     }


     //update table row by getting id from database and update values
     if(isset($_POST['update-topic'])){
        adminOnly();
        $errors = validateTopic($_POST);

        if (count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['update-topic'], $_POST['id']);
            $topic_id = update($table, $id, $_POST);
            $_SESSION['message'] = 'Topic Updated Sucessfully';
            $_SESSION['type'] = 'success';
            header('location: ' . BASE_URL . '/admin/topics/index.php');
            exit();
        }else {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
        }
     }


     //delete table row by getting id from database and delete row
     if (isset($_GET['del_id'])) {
        adminOnly();
        $id = $_GET['del_id'];
        $count = delete($table, $id);
        $_SESSION['message'] = 'Topic Deleted Sucessfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
     }
?>