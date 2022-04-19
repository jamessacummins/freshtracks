<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
    <link rel="stylesheet" href="./css/volunteer.css">
</head>


</body>

<div class="main">

    <?php include "nav.php"; ?>


    <div class="parent-topbar-container" id="volunteer-topbar-parent">
            <div class="topbar-overlay"></div>
            <div class="topbar-container">
                Volunteer
            </div>
        </div>

    <div class="section-subheading">Join our legends..</div>


    <div class="container">
        <form action="action_page.php">
            <label for="fname">Full Name</label><br>
            <input type="text" id="name" name="fullname" placeholder="Robert Dabilda"><br>
            <label for="Email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="RobertDabilda@gmail.com"><br>
            <label for="subject">Comment/Avaliabilities</label><br>
            <textarea id="subject" name="subject" placeholder="When are you free to volunteer?" style="height:200px"></textarea>
            <input type="submit" value="Volunteer">
        </form>
    </div>


</div>

<?php include "footer.php"; ?>
</body>

</html>