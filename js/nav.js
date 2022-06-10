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
            subItemParent.style.display = 'flex';
            subItemParent.style.left = (-60 + document.querySelector("#" + parent).getBoundingClientRect().left) + "px";
        } else {
            subItemParent.style.display = 'none';
        }
    }
}

function turnAllSubItemsOff(){
    for(subItemParent of navSubItemParents){
        subItemParent.style.display = 'none';
    };
}