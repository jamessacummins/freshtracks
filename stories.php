<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php" ?>
    <link rel="stylesheet" href="./css/stories.css">
</head>


<body>

    <div class="main">

        <?php include "nav.php" ?>

        <div class="parent-topbar-container" id="stories-topbar-parent">
            <div class="topbar-overlay"></div>
            <div class="topbar-container">
                Our stories
            </div>
        </div>
        <div class="section-container" id="how-we-help">
            <div class="section">
                <div id="stories-container">
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>

    </div>

    </div>

    <template id="story-container-template">
        <div class="story-container">
            <img class="story-image">
            <div class="story-tag">Strength</div>
            <div class="story-title">Sam's Journey to Empowerment</div>
            <div class="story-intro">Sam was told that he would never be able to move his legs again. Two years later he has regained full use of his legs and regularly cycles.</div>
            <a class="story-link" href="./story.php?id=1">Learn more</a>
        </div>
    </template>
    <script src="./js/stories.js"></script>
</body>

</html>