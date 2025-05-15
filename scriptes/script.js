const header = document.getElementById('header');
document.addEventListener('scroll', function(){
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        header.style.backgroundColor = "#59a0e700";
    } else {
        header.style.backgroundColor = "#59a0e7";
    }
});
window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    const spinner = document.getElementById('spinner');
    const body = document.querySelector('body');
    let interval = setInterval(() => {
        preloader.classList.add('hidden');
        spinner.classList.add('hidden');
        body.classList.remove('notScroll');
        if(preloader.classList.contains('hidden')){
            clearInterval(interval);
        }
    }, 500);
});
const profile = document.getElementById('profile').addEventListener('click', function(event){
    event.preventDefault();
    document.getElementById('dropdown-profile').style.opacity = '100';
})