function toggleMobileNavOptions(){
    let mobileNav = document.querySelector("#nav-mobile-options-container");

    if(mobileNav.style.display == "" || mobileNav.style.display == "none"){
        mobileNav.style.display = "flex";
    } else {
        mobileNav.style.display = "none";
    }
}
function toggleSubItems(parentID){
    let mobileNav = document.querySelector("#" + parentID + " .nav-sub-item-container");
    console.log(mobileNav);
    if(mobileNav.style.display == "" || mobileNav.style.display == "none"){
        mobileNav.style.display = "initial";
    } else {
        mobileNav.style.display = "none";
    }
}