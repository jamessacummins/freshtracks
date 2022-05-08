function toggleMobileNavOptions(){
    let mobileNav = document.querySelector("#nav-mobile-options-container");

    if(mobileNav.style.display == "" || mobileNav.style.display == "none"){
        mobileNav.style.display = "flex";
    } else {
        mobileNav.style.display = "none";
    }
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

function toggleSubItemsOn(parentID){
    let subItems = Array.from(document.querySelectorAll(".nav-sub-item-container"))
    for(subItem of subItems){
        if(subItem.parentElement.id == parentID){
            subItem.style.display = "initial";
        } else {
            subItem.style.display = "none";
        }
    };
}
function toggleSubItemsOff(parentID){
    let subItems = Array.from(document.querySelectorAll(".nav-sub-item-container"))
    for(subItem of subItems){
        if(subItem.parentElement.id == parentID){
            subItem.style.display = "none";
        }
    };
}