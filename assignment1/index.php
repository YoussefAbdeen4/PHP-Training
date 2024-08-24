<?php
    $cv=[
        "name"=>"Youssef Abdeen",
        "email"=>"abdeenyoussef9@gmial.com",
        "jop"=>"Student",
        "about job"=>"IT student at EELU center Beni Suef",
        "Expected Year of Graduation"=>"1/7/2026",
        "Education"=>"Baccalaureate Computer Science and Information Technology",
        "about me"=>"Cyber Security pentester and php back end developer",
        "phone"=>"01203226858",
        "fax"=>"01203226858",
        "companies"=>[
            "company1"=>[
                "name"=>"Dark code",
                "work"=>"from 2024 to ---- | work as mentor and instructor",
            ],
            "company2"=>[
                "name"=>"Dark Entry",
                "work"=>"from 2027 to ---- | work as hacker and pentester",
            ],
            "company3"=>[
                "name"=>"ICPC EELU",
                "work"=>"from 2023 to 2026 | work as a mentor",
            ],
        ],
        "Trainings"=>[
            "training1"=>[
                "training"=>"Problem Solving",
                "about"=>"Newcomers training in ICPC EELU comunity | May.2023"
            ],
            "training2"=>[
                "training"=>"PHP",
                "about"=>"PHP native in ITI | July.2024"
            ],
             "training3"=>[
                "training"=>"PHP & laravel",
                "about"=>"PHP and laravel in Mindset | August.2024"
            ]
        ],
        "skills"=>["Problem solving","C++","Java", "Python","Php","HTML","CSS","Laravel"]
        ];
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="inner-nav"></div>
<div id="container">
    <div id="profile">
        <div id="image">
            <img id="profile-photo" src="img/myPhoto.jpg" alt="Profile-Image">
            <a href="#"><i class="fas fa-pen stroke-transparent"></i></a>
        </div>
        <p id="name"><?php echo $cv["name"]?><br><span id="email"><?= $cv["email"] ?></span></p>
        <p id="designation"><?= $cv["jop"] ?><br><span id="college"><?= $cv["about job"] ?></span></p>
        <div id="social-links"><a href="#"><i class="fab fa-facebook-f stroke-transparent"></i></a><a><i class="fab fa-twitter stroke-transparent"></i></a><a><i class="fab fa-linkedin-in stroke-transparent"></i></a><a><i class="fab fa-github stroke-transparent"></i></a></div>
        <a id="edit-intro" href="#"><i class="fas fa-pen-alt blue"></i>&nbsp;&nbsp;Edit Intro</a>
        <hr width="100%">
        <div id="about">
            <p style="display:inline;">About</p>
            <a href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a>
        </div>
        <p id="year-graduation">Expected Year of Graduation<br><strong><?= $cv["Expected Year of Graduation"] ?></strong></p>
        <p id="education">Education<br><strong><?= $cv["Education"] ?></strong></p>
        <p id="more-about">More about me<br><span><?= $cv["about me"] ?></span></p>
        <p id="telephone">Telephone<br><strong><?= $cv["phone"] ?></strong></p>
        <p id="fax">Fax<br><strong><?= $cv["fax"] ?></strong></p>
    </div>
    <div id="info-cards">
        <div class="card">
            <p><i class="fas fa-briefcase stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Companies</p>
            <ul>
                <li><p class="tags"><?= $cv["companies"]["company1"]["name"] ?><br><span><?= $cv["companies"]["company1"]["work"] ?></span></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["companies"]["company2"]["name"] ?><br><span><?= $cv["companies"]["company2"]["work"] ?></span></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["companies"]["company3"]["name"] ?><br><span><?= $cv["companies"]["company3"]["work"] ?></span></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
            </ul>
            <a href="#">+ Add workshops attended</a>
        </div>
        <div class="card">
            <p><i class="fas fa-graduation-cap stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Trainings</p>
            <ul>
                <li><p class="tags"><?= $cv["Trainings"]["training1"]["training"] ?><br><span><?= $cv["Trainings"]["training1"]["about"] ?></span></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["Trainings"]["training2"]["training"] ?><br><span><?= $cv["Trainings"]["training2"]["about"] ?></span></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["Trainings"]["training3"]["training"] ?><br><span><?= $cv["Trainings"]["training3"]["about"] ?></span></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
            </ul>
            <a href="#">+ Add new</a>
        </div>
        <div class="card">
            <p><i class="fas fa-graduation-cap stroke-transparent"></i>&nbsp;&nbsp;&nbsp;Skills</p>
            <ul>
                <li><p class="tags"><?= $cv["skills"][0] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][1] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][2] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][3] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][4] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][5] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][6] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
                <li><p class="tags"><?= $cv["skills"][7] ?></p>
                    <a class="edit" href="#"><i class="fas fa-pen stroke-transparent-blue"></i></a></li>
            </ul>
            <a href="#">+ Add new</a>
        </div>
    </div>
</div>
</body>
</html>

?>
