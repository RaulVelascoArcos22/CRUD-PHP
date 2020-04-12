
<?php include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task where id=$id";
        $resul = mysqli_query($conn,$query);
        if(!$resul){
            die("Query Failed");
        }
        $_SESSION['message']='Task Removed Successfully';
        $_SESSION['message_typy']='danger';
        header("Location: index.php");
    }
?>