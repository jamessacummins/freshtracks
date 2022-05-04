function toggleMobileNavOptions(){
    let mobileNav = document.querySelector("#nav-mobile-options-container");

    if(mobileNav.style.display == "" || mobileNav.style.display == "none"){
        mobileNav.style.display = "flex";
    } else {
        mobileNav.style.display = "none";
    }
}
function toggleSubItems(parentID){
    let subItems = document.querySelectorAll(".nav-sub-item-container");
    subItems.forEach(subItem => {
        if(subItem.parentElement.id == parentID){
            if(subItem.style.display == "" || subItem.style.display == "none"){
                subItem.style.display = "initial";
            }
            else {
                subItem.style.display = "none"; 
            }
        } else {
            subItem.style.display = "none";
        }
    })
}

function toggleMobileSubItems(parentID){
    let currentItem = document.querySelector("#" + parentID);

    while(true){
        if(currentItem.nextElementSibling.classList.contains("nav-mobile-sub-option")){
            currentItem =  currentItem.nextElementSibling;
            if(currentItem.style.display == "" || currentItem.style.display == "none"){
                currentItem.style.display = "initial";
            } else {
                currentItem.style.display = "none";
            }
        } else {
            break;
        }
    }
}