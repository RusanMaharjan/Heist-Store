<?php

    session_start();
    require('connect.php');
    
    function dd($value){ // to be deleted        
    echo "<pre>", print_r($value, true), "</pre>";
    die();
    }


    //function for execution of query
    function executeQuery($sql, $data){
        global $conn;
        $stmt = $conn->prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt;
    }


    //function for select all query for matching condition from database to our page
    function selectAll($table, $conditions = []){
        global $conn;
        $sql = "Select * from $table";
        if(empty($conditions)){
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }else{
            $i = 0;
            foreach ($conditions as $key => $value) {
                if($i==0){                    
                    $sql = $sql . " where $key=?";
                }else {
                    $sql = $sql . " AND $key=?";
                }
                $i++;
            }
            $stmt = executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;     
        }        
    }

    

    //function for select one query for matching condition from database to our page
    function selectOne($table, $conditions){
        global $conn;
        $sql = "Select * from $table";
        
        $i = 0;
        foreach ($conditions as $key => $value) {
            if($i==0){                    
                $sql = $sql . " where $key=?";
            }else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }

        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;                   
    }


    //function for creating values in table
    function create($table, $data){
        global $conn;
        //$sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?"
        $sql = "INSERT INTO $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {
            if($i == 0){
                $sql = $sql . " $key=?";
            }else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $id;
    }

    //function for updating value from table
    function update($table, $id, $data){
        global $conn;
        //$sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?";
        $sql = "UPDATE $table SET ";

        $i = 0;
        foreach ($data as $key => $value) {
            if($i == 0){
                $sql = $sql . " $key=?";
            }else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }

        $sql = $sql . " WHERE id=?";
        $data['id'] = $id;
        $stmt = executeQuery($sql, $data);
        $id = $stmt->insert_id;
        return $stmt->affected_rows;
    }


    //function for deleting value from table
    function delete($table, $id){
        global $conn;
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt = executeQuery($sql, ['id' => $id]);
        return $stmt->affected_rows;
    }

    function getPublishedPosts()
    {
        global $conn;

        //select * from posts where published=1
        $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=?";
        $stmt = executeQuery($sql, ['published' => 1]);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }

    function getPostsByTopicId($topic_id)
    {
        global $conn;

        //select * from posts where published=1
        $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id=u.id WHERE p.published=? AND topic_id=?";
        $stmt = executeQuery($sql, ['published' => 1, 'topic_id' => $topic_id]);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }


    function searchPosts($term)
    {
        $match = '%' . $term . '%';
        global $conn;
        $sql = "SELECT 
                    p.*, u.username 
                FROM posts AS p 
                JOIN users AS u 
                ON p.user_id=u.id 
                WHERE p.published=?
                AND p.title LIKE ? OR p.body LIKE ?";


        $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
?>