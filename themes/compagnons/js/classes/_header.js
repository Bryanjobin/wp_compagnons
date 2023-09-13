//HAMBURGER MENU
const hamburgerBtn = document.getElementById('nav-icon3');
const hamburgerMenu = document.querySelector('.header-container');
const body = document.querySelector('body');
const filter = document.querySelector('.menu-filter');

hamburgerBtn.addEventListener('click', () =>{
    if(hamburgerBtn.classList.contains("open")){
        hamburgerBtn.classList.remove("open");
        hamburgerMenu.classList.remove("header-container--open");
        body.style.position = "relative";
        filter.style.display = "none";



    }else{
        hamburgerBtn.classList.add("open");
        hamburgerMenu.classList.add("header-container--open");
        body.style.position = "fixed";
        filter.style.display = "block";
    }
})

//DROPDOWNS MOBILE

const dropdownBtn = document.querySelectorAll('.dropdown_btn');

dropdownBtn.forEach(button =>{
    let chevron = button.querySelector('span');
    let content = button.nextElementSibling;
    if(content){
        if(window.innerWidth < 1200){
            button.addEventListener('click', ()=>{
                if(content.style.display !== "block"){
                closeOtherDropdowns();
                content.style.display = "block";
                chevron.innerHTML = "expand_less";
                }else{
                    content.style.display = "none";
                    chevron.innerHTML = "expand_more";
                }
            })
        }
    }
})

function closeOtherDropdowns(){
    const panels = document.querySelectorAll('.dropdown_content');
    const chevrons = document.querySelectorAll('.material-symbols-outlined')
    panels.forEach(panel =>{
        panel.style.display = 'none';
    } )
    chevrons.forEach(chevron =>{
        chevron.innerHTML = "expand_more";
    })
}

