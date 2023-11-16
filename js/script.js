const btnMobile = document.getElementById('btn-mobile')
const btnArrow = document.getElementById('btnTop')
const btnContato = document.getElementById('btn_contato')

function toggleMenu(event) {
    if(event.type == 'touchstart') event.preventDefault()
    const nav = document.getElementById('nav')
    nav.classList.toggle('active')
    const active = nav.classList.contains('active')
    event.currentTarget.setAttribute('aria-expanded', active)

    if(active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu')
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu')
    }
}

btnMobile.addEventListener('click', toggleMenu)
btnMobile.addEventListener('touchstart', toggleMenu)

btnArrow.addEventListener('click', () => {
    window.scrollTo(0,0)
})

document.addEventListener('scroll', ocultarArrow)

function ocultarArrow() {
    if(window.scrollY > 250) {
        btnArrow.style.display = 'flex'
    } else {
        btnArrow.style.display = 'none'
    }
}

ocultarArrow()