<?php
    $title = "View All Comments";
    require_once "includes/header.php";
    require_once "db/db_config.php";
    if(!isset($_SESSION['id'])){
        header("location: index.php");
    }
    else{
        $id = $_SESSION['id'];
        $userPrivilege = $userNew->getUserNameById($id);
        if(!($userPrivilege['privilege'] == 1)){
            echo "<h1 class=''>Error!</h1>";
        }
        else{
            $result = $crud->getAllComments();
            $count = 1;
            if(!$result){
                echo "<h1 class=''>Error!</h1>";
            }
            else{

?>
        <table class="">
            <tr>
                <th>Sl</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)){?>
            <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $r['fullname']?></td>
                <td><?php echo $r['email']?></td>
                <td><?php echo $r['message']?></td>
            </tr>
            <?php }?>
        </table>
        <button onclick="window.print();" class="sign_btn" id="print-btn">Print</button>
<?php 
            }
        }
    }
?>