const accordionItems = document.querySelectorAll('.accordion-collapse')
const acc = document.getElementById('accordionExample')

accordionItems.forEach((el)=>{
    el.addEventListener('shown.bs.collapse',(e)=>{
        // var scrollOffset = acc.scrollTop + el.parentNode.offsetTop
        var scrollOffset = acc.scrollTop + el.parentNode.offsetTop - 130
        window.scroll({
            top: scrollOffset,
            left: 0, 
            behavior: 'smooth'
        })

        console.log(scrollOffset)
    })
})