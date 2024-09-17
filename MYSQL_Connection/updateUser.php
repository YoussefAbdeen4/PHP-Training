<?php
include_once 'connection.php';
$id = $_GET['id'];

try {
    $con = connect();

    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

    $stmt->close();
    $con->close();

    if (!$student) {
        echo "No student found with the given ID.";
        exit();
    }

} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
    <link rel="stylesheet" href="styleUpdate.css">
</head>
<body>
<header>
    <h1>Update Student</h1>
</header>
<section>
    <form action="Update.php" method="post" enctype="multipart/form-data" class="StudentsRegistration-form">
        <input type="hidden" name="id" id="student-id" value="<?= htmlspecialchars($student['id']) ?>">

        <label for="fName">First Name</label>
        <input type="text" name="first_name" id="fName" placeholder="First Name" value="<?= htmlspecialchars($student['fname']) ?>" required>

        <label for="lName">Last Name</label>
        <input type="text" name="last_name" id="lName" placeholder="Last Name" value="<?= htmlspecialchars($student['lname']) ?>" required>

        <label for="img">Image</label>
        <input type="file" name="img" id="img">
        <input type="submit" value="Update Student">
    </form>
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
