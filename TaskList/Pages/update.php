<?php 

    include_once 'config.php';

    if(isset($_POST['name']) && isset($_POST['id'])){
        $name = $_POST['name'];
        $description = $_POST['id'];

        try{
            $updateQuery = "UPDATE tasks SET name = :name 
                            WHERE id = :id";
           

            $stmt = $conn->prepare($updateQuery);
            $stmt->execute(array(":name" => $name, ":desc" => $description));

            if($stmt){
                echo "record Inserted";
            }

        
    }catch (PDOException $ex){
        echo "An error occurred" .$ex->getMessage();
    }
}
?>