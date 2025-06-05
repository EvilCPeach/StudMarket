const header = document.getElementById('header');
const links = document.querySelectorAll('a[href^="#"]').forEach(link =>{
    link.addEventListener('click', function(event){
        event.preventDefault();
        const targetLink = link.getAttribute('href');
        const targetElement = document.querySelector(targetLink);
        if(targetElement){
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});
const dropdownLinks = document.getElementById('dropdown-links');
const dropdownProfile = document.getElementById('dropdown-profile');
let profileClicks = 0;
const profile = document.getElementById('profile').addEventListener('click', function(event){
    event.preventDefault();
    dropdownLinks.style.opacity = '0';
    profileClicks++;
    dropdownProfile.style.opacity = '100';
    if(profileClicks % 2 == 0){
        dropdownProfile.style.opacity = '0';
    }
});
let linksClicks = 0;
const buttonHamburger = document.getElementById('buttonHamburger').addEventListener('click', function(){
    linksClicks++;
    dropdownProfile.style.opacity = '0';
    dropdownLinks.style.opacity = '100';
    if(linksClicks % 2 == 0){
        dropdownLinks.style.opacity = '0';
    }
});
document.addEventListener('scroll', function(){
    dropdownProfile.style.opacity = '0';
    dropdownLinks.style.opacity = '0';
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        header.style.backgroundColor = "#59a0e700";
    } else {
        header.style.backgroundColor = "#59a0e7";
    }
});
const preloader = document.getElementById('preloader');
const spinner = document.getElementById('spinner');
const body = document.querySelector('body');
window.addEventListener('load', function() {
    let interval = setInterval(() => {
        preloader.classList.add('hidden');
        spinner.classList.add('hidden');
        body.classList.remove('notScroll');
        if(preloader.classList.contains('hidden')){
            clearInterval(interval);
        }
    }, 500);
});
const parentModal = document.getElementById('parentModal');
const modal = document.getElementById('modal');
const bgModal = document.getElementById('bgModal');
const closeModal = document.getElementById('closeModal').addEventListener('click', function(){
    modal.style.opacity = '0';
    let disableModal = setInterval(() => {
        bgModal.classList.add('hidden');
        body.classList.remove('notScroll');
        parentModal.classList.remove('showModal');
        parentModal.classList.add('hidden');
        if(parentModal.classList.contains('hidden')){
            clearInterval(disableModal);
        }
    }, 300);
});
const entryForm = document.getElementById('entryForm');
const regForm = document.getElementById('regForm');
const modalEntry = document.getElementById('entryShow').addEventListener('click', function(){
    entryForm.style.opacity = '100';
    regForm.style.opacity = '0';
    let disableInterval = setInterval(() => {
        regForm.classList.add('hidden');
        regForm.classList.remove('showForm')
        entryForm.classList.remove('hidden');
        if(regForm.classList.contains('hidden')){
            clearInterval(disableInterval);
        }
    }, 600);
});
const modalReg = document.getElementById('regShow').addEventListener('click', function(){
    entryForm.classList.add('hidden');
    regForm.classList.remove('hidden');
    regForm.classList.add('showForm');
    let disableInterval = setInterval(() => {
        regForm.style.opacity = '100';
        entryForm.style.opacity = '0';
        if(regForm.classList.contains('showForm')){
            clearInterval(disableInterval);
        }
    }, 200);
});
const profileEntry = document.getElementById('profileEntry').addEventListener('click', function(event){
    event.preventDefault();
    let modalInterval = setInterval(() => {
        modal.style.opacity = '100';
        if(modal.style.opacity == '100'){
            clearInterval(modalInterval);
        }
    }, 100)
    bgModal.classList.remove('hidden');
    body.classList.add('notScroll');
    parentModal.classList.remove('hidden');
    parentModal.classList.add('showModal');
    entryForm.classList.remove('hidden');
    regForm.classList.add('hidden');
    regForm.classList.remove('showForm');
});
const profileReg = document.getElementById('profileRegistration').addEventListener('click', function(event){
    event.preventDefault();
    let modalInterval = setInterval(() => {
        modal.style.opacity = '100';
        if(modal.style.opacity == '100'){
            clearInterval(modalInterval);
        }
    }, 100)
    bgModal.classList.remove('hidden');
    body.classList.add('notScroll');
    parentModal.classList.remove('hidden');
    parentModal.classList.add('showModal');
    entryForm.classList.add('hidden');
    regForm.classList.remove('hidden');
    regForm.classList.add('showForm');
});
let currentImage = 0;
let startX = 0;
let endX = 0;
const buttonPrev = document.getElementById('previous');
const buttonNext = document.getElementById('next');
let images = document.getElementById('images');
buttonPrev.addEventListener('click', () => {
    imagesInterval = clearInterval(imagesInterval);
    imagesInterval = setInterval(()=>{
        changeImage(1);
    }, 7000);
    changeImage(-1);
});
buttonNext.addEventListener('click', () => {
    imagesInterval = clearInterval(imagesInterval);
    imagesInterval = setInterval(()=>{
        changeImage(1);
    }, 7000);
    changeImage(1);
});
images.addEventListener('touchstart', (event) => {
    startX = event.touches[0].clientX;
    imagesInterval = clearInterval(imagesInterval);
});
images.addEventListener('touchmove', (event) => {
    endX = event.touches[0].clientX;
});
images.addEventListener('touchend', () => {
    swipe();
    imagesInterval = setInterval(()=>{
        changeImage(1);
    }, 7000)
});
function swipe() {
    const threshold = 50;
    const distanceX = endX - startX;
    if (distanceX > threshold) {
        changeImage(-1);
    } else if (distanceX < -threshold) {
        changeImage(1);
    }
}
function showImage(index) {
    const slides = document.querySelectorAll('.image');
    if (index >= slides.length) {
        currentImage = 0;
    } else if (index < 0) {
        currentImage = slides.length - 1;
    } else {
        currentImage = index;
    }
    let offset = -currentImage * 33.4;
    images.style.transform = `translateX(${offset}%)`;
}

function changeImage(direction) {
    showImage(currentImage + direction);
}
let imagesInterval = setInterval(()=>{
    changeImage(1);
}, 7000);