const sideMenu = document.querySelector("aside")
const menuBtn = document.querySelector("#menu-btn")
const closeBtn = document.querySelector("#close-btn")

// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block'
})

// close sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none'
})

if (localStorage.getItem('mode') == null) {
    localStorage.setItem('mode', '')
}

function checkMode() {
    if(localStorage.getItem("mode") == '' || localStorage.getItem("mode") == null) {
        $('.light').addClass('active')
        $('.dark').removeClass('active')
        
        $('body').removeClass("dark-theme-variables")
    } else if(localStorage.getItem("mode") == "dark-theme-variables") {
        $('.dark').addClass('active')
        $('.light').removeClass('active')

        $('body').addClass("dark-theme-variables")
    }
}

function changeMode() {
    if(localStorage.getItem("mode") == '' || localStorage.getItem("mode") == null) {
        localStorage.setItem("mode", "dark-theme-variables")
        $('.dark').addClass('active')
        $('.light').removeClass('active')
    } else if(localStorage.getItem("mode") == "dark-theme-variables") {
        localStorage.setItem("mode", "")
        $('.light').addClass('active')
        $('.dark').removeClass('active')
    }
}

$('.theme-toggler').click(function(e) {
    e.preventDefault()
    changeMode()
    checkMode()
})

checkMode()