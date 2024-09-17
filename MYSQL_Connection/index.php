<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>New Student</title>
        <link rel="stylesheet" href="styleUser.css">
    </head>
    <body>
        <header>
            <h1>Students Registration</h1>
        </header>
        <section>
            <form action="addUser.php" method="post" enctype="multipart/form-data" class="StudentsRegistration-form">
                <input type="hidden" name="id" id="student-id">
                <label for="fName">First Name</label>
                <input type="text" name="first_name" id="fName" placeholder="First Name" required>
                <label for="lName">Last Name</label>
                <input type="text" name="last_name" id="lName" placeholder="Last Name" required>
                <label for="img">Image</label>
                <input type="file" name="img" id="img">
                <input type="submit" value="Add Student">
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