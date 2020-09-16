const topbar = document.getElementById('topbar')

const menu=document.getElementById('sidebar')

const cerrar=document.getElementById('cerrar')

if(topbar){
    topbar.addEventListener('click',(e)=>{
        if(e.target.parentElement.dataset.type!=undefined){
            menu.classList.add('main-nav__show')
        }
    } )
}

if(menu){
    cerrar.addEventListener('click',(e)=>{
        menu.classList.remove('main-nav__show')
    })
}