<?php
include_once 'auth.php';
include_once 'connection.php';
$id=$_SESSION['id'];
try {
    $con = connect();
    $query = 'SELECT `notes`.`id`,`notes`.`title`,`notes`.`description` , `notes`.`done` FROM `notes` where `notes`.`user_id`=:id';
    $stat = $con->prepare($query);
    $stat->bindParam(":id",$id,PDO::PARAM_STR);
    $stat->execute();
    $notes = $stat->fetchAll(PDO::FETCH_ASSOC);
//    echo '<pre>';
//    print_r($notes);
//    echo '</pre>';
} catch (Exception $e) {
    echo $e->getMessage();
}


?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link rel="stylesheet" href="../style/notes-style.css">
    <link rel="stylesheet" href="../style/footer-style.css">
    <link rel="stylesheet" href="../style/nav-style.css">
    <link rel="stylesheet" href="../style/header-style.css">
</head>
<body>
<?php
include_once 'nav.php';
include_once 'hedder.php';
?>
<section>
    <table>
        <tr>
            <th>Note</th>
            <th>description</th>
            <th>State</th>
            <th>Finished</th>
            <th colspan="2">Action</th>
        </tr>
            <?php
            foreach ($notes as $note){
                echo '<tr>';
                foreach ($note as $key=>$val){
                    if ($key=='id')continue;
                    else if ($key=='done' and $val==0) {
                        echo "<td class='alert alert-danger'>Yet</td>";
                        echo '<td class="alert alert-danger"><a href="note_state.php?id=' . $note['id'] . '">done</a></td>';
                    }
                    else if ($key=='done' and $val!=0) {
                        echo "<td class='alert alert-success' colspan='2'>Done</td>";
                    }else echo "<td>{$val}</td>";
                }
                echo '<td><a href=update_note.php?id=' .$note['id']. '">Edite note</a></td>';
                echo '<td><a href=delete_note.php?id=' . $note['id'] . '">Delete</a></td>';
                echo '</tr>';
            }
        ?>

    </table>
    <a href="new_note.php" class="btn">Add New Note</a>
</section>
<?php
include_once 'footer.php'
?>
</body>
</html>