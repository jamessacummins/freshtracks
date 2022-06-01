// this file is responsible for the fade and growth animations

/* 
* this function is called when an element comes into view on the screen
* if the payload is in view (intersecting) then css classes that trigger fade in animations are called
*/
function obCallback(payloadArray) {
    for (payload of payloadArray) {
        if (payload.isIntersecting) {
            payload.target.classList.add("animate__animated", "animate__fadeIn", "animate__slow", "animate__delay-1s");
        }
    }
}

// this function creates a new observer with the function above as the callback
const ob = new IntersectionObserver(obCallback);


// the below selects elements that we want to fade and then adds a fade class and passes them to the observer above
var fadeArray = Array.from(document.querySelectorAll(".section-container, #parent-hero-container, footer, .parent-topbar-container, #contact-parent"));
for (fadeElement of fadeArray) {
    fadeElement.classList.add("fade");
    ob.observe(fadeElement);
}

// the below selects elements that we want to grow and shrink on hover
var zoomArray = Array.from(document.querySelectorAll(".donate-cta, #donate-image, #hero-donate-button, .section-icon, .section-image, .section-image-dash, .section-image-top"));
// it then loops through these scaling elements up on mouseenter over a set period (transform .4s) and scaling down on mouseleave to original size
for (zoomElement of zoomArray) {
    zoomElement.addEventListener("mouseenter", event => {
        var element = event.target;
        element.style.transition = "transform .4s";
        element.style.transform = "scale(1.15)";
    })
    zoomElement.addEventListener("mouseleave", event => {
        var element = event.target;
        element.style.transition = "transform .4s";
        element.style.transform = "scale(1)";
    })
}
