//Naam: Tara van Litsenburg
//Datum: 18-03-2022
//File: faq.js

//FAQ werking van het accordian menu
const accordion = document.getElementsByClassName('container');

for (i=0; i<accordion.length; i++) {
    //Als je op de vraag klikt laat die het antwoord zien
    accordion[i].addEventListener('click', function () {
        this.classList.toggle('active')
    })
}
