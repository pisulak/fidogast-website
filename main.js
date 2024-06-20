const navToggle=document.querySelector('.mobile-nav-toggle');
const primaryNav=document.querySelector('.nav-list-wrapper');
const iconOpen=document.querySelector('.icon-open');
const iconClose=document.querySelector('.icon-close');

navToggle.addEventListener('click', () => {
    primaryNav.hasAttribute('data-visible') ? navToggle.setAttribute('aria-expanded', false) : navToggle.setAttribute('aria-expanded', true);
    primaryNav.toggleAttribute('data-visible');
    iconClose.classList.toggle('icon-visible');
});

const listOption1=document.querySelector('.nav-list-option-1');
const listOption2=document.querySelector('.nav-list-option-2');
const listOption3=document.querySelector('.nav-list-option-3');
const listOption4=document.querySelector('.nav-list-option-4');
const listOption5=document.querySelector('.nav-list-option-5');

listOption1.addEventListener('click', () => {
    primaryNav.hasAttribute('data-visible') ? primaryNav.toggleAttribute('data-visible') & iconClose.classList.toggle('icon-visible') : console.log('');
});
listOption2.addEventListener('click', () => {
    primaryNav.hasAttribute('data-visible') ? primaryNav.toggleAttribute('data-visible') & iconClose.classList.toggle('icon-visible') : console.log('');
});
listOption3.addEventListener('click', () => {
    primaryNav.hasAttribute('data-visible') ? primaryNav.toggleAttribute('data-visible') & iconClose.classList.toggle('icon-visible') : console.log('');
});
listOption4.addEventListener('click', () => {
    primaryNav.hasAttribute('data-visible') ? primaryNav.toggleAttribute('data-visible') & iconClose.classList.toggle('icon-visible') : console.log('');
});
listOption5.addEventListener('click', () => {
    primaryNav.hasAttribute('data-visible') ? primaryNav.toggleAttribute('data-visible') & iconClose.classList.toggle('icon-visible') : console.log('');
});


const iconMail=document.querySelector('.nav-icon-mail');
const mailToggle=document.querySelector('.mobile-nav-mail');
const iconPhone=document.querySelector('.nav-icon-phone');
const phoneToggle=document.querySelector('.mobile-nav-phone');
const iconLocation=document.querySelector('.nav-icon-location');
const locationToggle=document.querySelector('.mobile-nav-location');



iconMail.addEventListener('click', () => {
    mailToggle.classList.toggle('nav-toggle-mail');
    navigator.clipboard.writeText('biuro@fidogast.pl');
});
iconPhone.addEventListener('click', () => {
    phoneToggle.classList.toggle('nav-toggle-phone');
    navigator.clipboard.writeText('(013) 42-221-65');
});
iconLocation.addEventListener('click', () => {
    locationToggle.classList.toggle('nav-toggle-location');
    navigator.clipboard.writeText('38-440 Iwonicz-Zdrój, ul. Floriańska 44a');
});



// ----------------------------- animations


// photo gallery animation


const observer=new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('photo-gallery-show');
        }
        else {
            entry.target.classList.remove('photo-gallery-show');
        }
    });
});

const hiddenElements=document.querySelectorAll('.photo-gallery-hidden');
hiddenElements.forEach((el) => observer.observe(el));


// partners animation


const observer2=new IntersectionObserver((entries2) => {
    entries2.forEach((entry2) => {
        console.log(entry2)
        if (entry2.isIntersecting) {
            entry2.target.classList.add('partners-show');
        }
        else {
            entry2.target.classList.remove('partners-show');
        }
    });
});

const hiddenElements2=document.querySelectorAll('.partners-hidden');
hiddenElements2.forEach((el2) => observer2.observe(el2));