let stories = [
    {
        "id":0,
        "title":"Sam's Journey to Empowerment",
        "tag":"STRENGTH",
        "intro":"Sam was told that he would never be able to move his legs again. Two years later he has regained full use of his legs and regularly cycles.",
        "imageURL":"sam.jpg",
        "content":
        ``,
    },
    {
        "id":1,
        "title":"Kevin Rides 150km for Charity",
        "tag":"DETERMINATION",
        "intro":"When Kevin Lu got dealt a bad hand, he decided to make the best of it. This year he rode 150km to help raise awareness for ABIs.",
        "imageURL":"kevin.jpg",
        "content":
        ``,
    },
    {
        "id":2,
        "title":"Gary Breaks the World Record",
        "tag":"ACHEIVEMENT",
        "intro":"Gary proved this year, that you can truly acheive anything you put your mind to, breaking the world record for the 400m sprint at the paralympics.",
        "imageURL":"gary.jpg",
        "content":
        ``,
    },
    {
        "id":3,
        "title":"Sam's Journey to Empowerment",
        "tag":"STRENGTH",
        "intro":"Sam was told that he would never be able to move his legs again. Two years later he has regained full use of his legs and regularly cycles.",
        "imageURL":"sam.jpg",
        "content":
        ``,
    },
    {
        "id":4,
        "title":"Kevin Rides 150km for Charity",
        "tag":"DETERMINATION",
        "intro":"When Kevin Lu got dealt a bad hand, he decided to make the best of it. This year he rode 150km to help raise awareness for ABIs.",
        "imageURL":"kevin.jpg",
        "content":
        ``,
    },
    {
        "id":5,
        "title":"Gary Breaks the World Record",
        "tag":"ACHEIVEMENT",
        "intro":"Gary proved this year, that you can truly acheive anything you put your mind to, breaking the world record for the 400m sprint at the paralympics.",
        "imageURL":"gary.jpg",
        "content":
        ``,
    },
    {
        "id":6,
        "title":"Sam's Journey to Empowerment",
        "tag":"STRENGTH",
        "intro":"Sam was told that he would never be able to move his legs again. Two years later he has regained full use of his legs and regularly cycles.",
        "imageURL":"sam.jpg",
        "content":
        ``,
    },
    {
        "id":7,
        "title":"Kevin Rides 150km for Charity",
        "tag":"DETERMINATION",
        "intro":"When Kevin Lu got dealt a bad hand, he decided to make the best of it. This year he rode 150km to help raise awareness for ABIs.",
        "imageURL":"kevin.jpg",
        "content":
        ``,
    },
];

for(story of stories){
    var storiesContainer = document.querySelector("#stories-container");
    var storyContainer = document.createElement("div");
    storyContainer.classList.add("story-container");
    storyContainer.innerHTML =
    `<img class="story-image" src="./img/stories/${story.imageURL}">
    <div class="story-tag">${story.tag}</div>
    <div class="story-title">${story.title}</div>
    <div class="story-intro">${story.intro}</div>
    <a class="story-link" href="./story.php?id=${story.id}">Learn more</a>`;
    storiesContainer.appendChild(storyContainer);
}

