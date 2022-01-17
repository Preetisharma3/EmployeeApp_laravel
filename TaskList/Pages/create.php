<?php 

    include_once 'config.php';

    if(isset($_POST['name']) && isset($_POST['description'])){
        $name = $_POST['name'];
        $description = $_POST['description'];

        try{
            $createQuery = "INSERT INTO tasks(name, description, created_at)
            VALUES(:name, :desc, now())";

            $stmt = $conn->prepare($createQuery);
            $stmt->execute(array(":name" => $name, ":desc" => $description));

            if($stmt){
                echo "record Inserted";
            }

        
    }catch (PDOException $ex){
        echo "An error occurred" .$ex->getMessage();
    }
}
?>