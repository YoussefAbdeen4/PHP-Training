<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Students</title>
        <link rel="stylesheet" href="styleTable.css">
    </head>
    <body>
        <header>
            <h1>Show Students</h1>
        </header>
        <section>
            <table class="t" >
                <tr >
                    <th >Id</th>
                    <th >First Name</th>
                    <th >Last Name</th>
                    <th >Image</th>
                    <th  colspan="2">Action</th>
                </tr>
           <?php
           try {
               include_once 'connection.php';
               $con=connect();
               $sql="select * from students";
               $students=$con->query($sql);
               foreach ($students as $student){
                   echo '<tr>';
                   $x=1;
                   foreach ($student as $data){

                       if ($x!=4)echo '<td >'.$data.'</td>';
                       else  echo "<td><img src='photo/" . $data . "' width='50'></td>";
                       $x++;
                   }
                   echo "<td ><a  href='updateUser.php?id={$student['id']}'>Update</a></td>";
                   echo "<td ><a  href='delete.php?id={$student['id']}'>Delete</a></td>";
                   echo '</tr>';
               }

           }catch (Exception $e){
               echo $e->getMessage();
           }




           ?>
            </table>
            <a href="index.php" class="new-user">New Student</a>
        </section>
        <div class="footer">
            <ul>
                <li>Name: Youssef Abdeen Ramadan</li>
                <li>Phone: +20123226858</li>
                <li>Email: <a href="mailto:abdeenyoussef9@gmail.com" target="_blank">abdeenyoussef9@gmail.com</a></li>
                <li>
                    <a href="https://www.linkedin.com/in/youssef-abdeen-943577270" target="_blank">
                        <img src="photo/icons8-linkedin-50.png" alt="LinkedIn">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100092998103442" target="_blank">
                        <img src="photo/icons8-facebook-50.png" alt="Facebook">
                    </a>
                </li>
            </ul>
        </div>
    </body>
</html>