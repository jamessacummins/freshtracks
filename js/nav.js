var navSubItemParents = Array.from(document.querySelectorAll(".nav-sub-item-parent"));

for(subItemParent of navSubItemParents){
    let parent = subItemParent.dataset.parent;
    let parentElement = document.querySelector("#" + parent);
    parentElement.addEventListener('mouseenter', () => {
        turnSubItemParentOnAllOthersOff(parent);
    });
    parentElement.addEventListener('mouseleave', (event) => {
        if(!event.relatedTarget.classList.contains('nav-sub-item-parent')){
            turnAllSubItemsOff();
        }
    });
    subItemParent.addEventListener('mouseleave', (event) => {
        if(!event.relatedTarget.classList.contains('nav-item')){
            turnAllSubItemsOff();
        }
    });
};

function turnSubItemParentOnAllOthersOff(parent){
    for(subItemParent of navSubItemParents){
        if(subItemParent.dataset.parent == parent){
            let parentElement = document.querySelector("#" + parent);
            let offsetWidth = (240 - parentElement.offsetWidth) / 2;
            offsetWidth = parentElement.getBoundingClientRect().left - offsetWidth;
            subItemParent.style.display = 'flex';
            subItemParent.style.left =  offsetWidth + "px";
        } else {
            subItemParent.style.display = 'none';
        }
    }
}

function toggleMobileNav(){
    let mobileNavParent = document.querySelector("#mobile-nav-items-parent");
    mobileNavParent.style.display == "flex" ? mobileNavParent.style.display = "none" : mobileNavParent.style.display = "flex";
}

function toggleMobileSub(id){
    console.log("ran");
    let parent = document.querySelector("#mobile-" + id);
    let current = parent.nextElementSibling;
    console.log(current.style.display);
    while(current.classList.contains('mobile-sub-item')){
        current.style.display != 'block' ? current.style.display = "block" : current.style.display = 'none';
        current = current.nextElementSibling;
    };
}

function turnAllSubItemsOff(){
    for(subItemParent of navSubItemParents){
        subItemParent.style.display = 'none';
    };
}