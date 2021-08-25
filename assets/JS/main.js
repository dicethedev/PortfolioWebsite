/* ====   Menu Show===== */
const showMenu = (toggLeId, navId) => {
    const toggle = document.getElementById(toggLeId),
        nav = document.getElementById(navId)

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle', 'nav-menu')


/* ====  ACTIVE AND REMOVE MENU ===== */
const navLink = document.querySelectorAll('.nav__link')

function linkAction() {
    // Active link 
    navLink.forEach(n => n.classList.remove('active'))
    this.classList.add('active')


    // Remove Menu Mobile
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}

navLink.forEach(n => n.addEventListener('click', linkAction))

/*==================== SHOW SCROLL TOP ====================*/
function scrollTop() {
    const scrollTop = document.getElementById('scroll-top');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if (this.scrollY >= 560) scrollTop.classList.add('show-scroll');
    else scrollTop.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollTop)

/* ====  SCROLL REVEAL ANIMATION ===== */
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})

/* Scroll HOME */
sr.reveal('.home__title', {})
sr.reveal('.button', { delay: 200 })
sr.reveal('.home__img', { delay: 400 })
sr.reveal('.home__social-icon', { interval: 200 })

/* Scroll ABOUT */
sr.reveal('.about__img', {})
sr.reveal('.about__subtitle', { delay: 200 })
sr.reveal('.about__text', { delay: 400 })

/* Scroll MY SKILLS */
sr.reveal('.skills__subtitle', {})
sr.reveal('.skills__text', { delay: 200 })
sr.reveal('.skills__data', { interval: 200 })
sr.reveal('.skills__img', { delay: 400 })

/* Scroll WORK */
sr.reveal('.work__img', { interval: 200 })

/* Scroll CONTACT */
sr.reveal('.container__input', { interval: 200 })