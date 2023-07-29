let select = document.querySelector('.select-predmet');
let portofolios = document.querySelectorAll('.single-portofolio-item');
let select_rukovodstvo = document.querySelector('.select-rukovodstvo');
let portofolios_rukovdstvo = document.querySelectorAll('.single-portofolio-item-rukovodstvo')

let portofolio_select = (selectInput, data, all, attr) => {
    data.forEach(item => {
        item.style.display = 'none'
    })

    data.forEach(item =>{
       if(selectInput.value === item.getAttribute(attr)){
            item.style.display = 'block'
       }
    })

    if(selectInput.value === all){
        data.forEach(item => {
            item.style.display = 'block';
        })
    }
}

select.addEventListener('change', e=>{
    e.preventDefault();
    portofolio_select(select, portofolios, 'sve', 'data-predmet')
})

select_rukovodstvo.addEventListener('change', e=>{
    e.preventDefault();
    portofolio_select(select_rukovodstvo, portofolios_rukovdstvo, 'svi', 'data-rukovodstvo')
})