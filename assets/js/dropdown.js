document.addEventListener('click', e=>{
    const isDropdownButton = e.target.matches("[data-dropdown-button]");
    if(!isDropdownButton && e.target.closest('[data-dropdown]') != null) return

    let currentDropdown;
    let closestChild 
    if(isDropdownButton){
        currentDropdown = e.target.closest('[data-dropdown]');
        closestChild = currentDropdown.querySelector('[data-add-class]')
        closestChild.classList.toggle('active-dropdown')
    }

    document.querySelectorAll('.active-dropdown').forEach(dropdown=>{
        if(dropdown === closestChild) return
        dropdown.classList.remove('active-dropdown')
    })

    let parentNode;
    let mainEl;
    if(closestChild.classList.contains('active-dropdown')){
        parentNode = closestChild.parentNode;
        mainEl = parentNode.querySelector('li');
        mainEl.classList.add('paddingBottom')
     
    }
    
    if(!closestChild.classList.contains('active-dropdown')){
        parentNode = closestChild.parentNode;
        mainEl = parentNode.querySelector('li');
        mainEl.classList.remove('paddingBottom')
    }

    // if(!closestChild.classList.contains('active-dropdown')){
    //     // let parentNode = closestChild.parentNode;
    //     // let mainEl  = parentNode.querySelector('li');
    //     mainEl.style.paddingBottom = '0px'
    //     alert('nema klasu')
    // }
})

