function toggleMobileNavOptions(){
    let mobileNav = document.querySelector("#nav-mobile-options-container");

    if(mobileNav.style.display == "" || mobileNav.style.display == "none"){
        mobileNav.style.display = "flex";
    } else {
        mobileNav.style.display = "none";
    }
}