<?php

    include_once 'config.php';

    try{

        $readQuery = "SELECT * FROM tasks";

        $stmt = $conn->query($readquery);

        while($task = $statement->fetch(PDO::FETCH_OBJ)){

            $create_date = strftime("%b %d, %y", strtotime($task->created_at));
            $output = "<tr>
                          <td><div onclick=\"makeElementEditable(this)\" onblur=\"updateTaskName(this, '($task->id)')\"> $task->name </div></td>
                          <td><div onclick=\"makeElementEditable(this)\" onblur=\"updateTaskName(this, '($task->id)')\"> $task->description </div></td>
                          <td><div> $task->status </div></td>
                          <td> $task->created_date </td>
                          <td style=\"width: 5%;\"><button><i class=\"btn-danger fa fa-times\"></i></button>
                          </td>
            </tr>";
        
            echo $output;
    }

}catch (PDOException $ex){
    echo "An error occurred" .$ex->getMessage();
}
?>