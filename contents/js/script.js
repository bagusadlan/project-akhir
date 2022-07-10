$(document).ready(function () {
    var pathname = window.location.pathname;
    if(pathname == '/mis126/contents/Dashboard') {
        $('.dashboard').addClass('active')
    } else if(pathname == '/mis126/contents/Pendidikan') {
        $('.pendidikan').addClass('active')
    } else if(pathname == '/mis126/contents/Penunjang') {
        $('.penunjang').addClass('active')
    } else if(pathname == '/mis126/contents/Pesan') {
        $('.pesan').addClass('active')
    } else if(pathname == '/mis126/contents/Profil') {
        $('.profil').addClass('active')
    } else if(pathname == '/mis126/contents/Logout') {
        $('.logout').addClass('active')
    }
})