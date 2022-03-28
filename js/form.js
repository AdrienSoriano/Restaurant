const icone_nom =document.querySelector('#icone_nom')
const icone_prenom=document.querySelector('#icone_prenom')
const icone_mail=document.querySelector('#icone_mail')
const icone_message=document.querySelector('#icone_message')
const icone_nom_bleu=document.querySelector('#icone_nom_bleu')
const icone_prenom_bleu=document.querySelector('#icone_prenom_bleu')
const icone_mail_bleu=document.querySelector('#icone_mail_bleu')
const icone_message_bleu=document.querySelector('#icone_message_bleu')

const form = document.querySelector('.needs-validation')
const input_nom=document.querySelector('#input_nom')
const input_prenom=document.querySelector('#input_prenom')
const input_mail=document.querySelector('#input_mail')
const input_message=document.querySelector('#input_message')

const nom_vide =document.querySelector('.nom_vide')
const prenom_vide =document.querySelector('.prenom_vide')
const mail_vide =document.querySelector('.mail_vide')
const message_vide =document.querySelector('.message_vide')


let regex = /^[A-Z][A-Za-z]+$/;
let regexmail =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
let regexmessage = /^[^<>]*$/;

input_nom.addEventListener('click', function(){
    icone_nom_bleu.style.visibility = "visible";
    icone_nom.style.visibility = "hidden"
    icone_prenom_bleu.style.visibility = "hidden"
    icone_prenom.style.visibility = "visible"
    icone_mail.style.visibility = "visible"
    icone_mail_bleu.style.visibility = "hidden"
    icone_message.style.visibility = "visible"
    icone_message_bleu.style.visibility = "hidden"


})

input_prenom.addEventListener('click', function(){
    icone_nom_bleu.style.visibility = "hidden";
    icone_nom.style.visibility = "visible";
    icone_prenom_bleu.style.visibility = "visible";
    icone_prenom.style.visibility = "hidden";
    icone_mail.style.visibility = "visible";
    icone_mail_bleu.style.visibility = "hidden";
    icone_message.style.visibility = "visible";
    icone_message_bleu.style.visibility = "hidden";


})

input_mail.addEventListener('click', function(){
    icone_nom_bleu.style.visibility = "hidden";
    icone_nom.style.visibility = "visible";
    icone_prenom_bleu.style.visibility = "hidden";
    icone_prenom.style.visibility = "visible";
    icone_mail.style.visibility = "hidden";
    icone_mail_bleu.style.visibility = "visible";
    icone_message.style.visibility = "visible";
    icone_message_bleu.style.visibility = "hidden";


})

input_message.addEventListener('click', function(){
    icone_nom_bleu.style.visibility = "hidden";
    icone_nom.style.visibility = "visible";
    icone_prenom_bleu.style.visibility = "hidden";
    icone_prenom.style.visibility = "visible";
    icone_mail.style.visibility = "visible";
    icone_mail_bleu.style.visibility = "hidden";
    icone_message.style.visibility = "hidden";
    icone_message_bleu.style.visibility = "visible";


})

form.addEventListener('submit', (e) => {
  e.preventDefault();
    if (input_nom.value == "" || input_prenom.value =="" || input_mail.value =="" || input_message.value == "" || !regex.test(input_nom.value) || !regexmail.test(input_mail.value) || !regexmessage.test(input_message.value) || !regex.test(input_prenom.value)){

        if (input_nom.value === "") {
        nom_vide.innerHTML = "Champ vide !";
    }
    else if (regex.test(String(input_nom.value)) == false ) {
        nom_vide.innerHTML = "Nom invalide"
        nom_vide.style.visibility = "visible";
    }
    else{
        nom_vide.style.visibility = "hidden";
    }
    if (input_prenom.value === ""){
        prenom_vide.innerHTML = "Champ vide !";
    }
    else if (regex.test(String(input_prenom.value)) == false ) {
        prenom_vide.innerHTML = "Prénom invalide"
        prenom_vide.style.visibility = "visible";
    }
    else{
        prenom_vide.style.visibility = "hidden";
    }

    if (input_mail.value === ""){
        mail_vide.innerHTML = "Champ vide !";
    }
    else if (regexmail.test(String(input_mail.value)) == false ) {
        mail_vide.innerHTML = "Mail invalide !";
        mail_vide.style.visibility = "visible";
    }
    else{
        mail_vide.style.visibility = "hidden";
    }
   
     if (input_message.value === "") {
        message_vide.innerHTML = "Champ vide !";
    }
    
    else {
        message_vide.style.visibility = "hidden";
    }

    
        
    }


    


else{



  const data = new FormData(form);
   // configure a request
   const xhr = new XMLHttpRequest();

   xhr.responseType = 'json';
   xhr.open('POST', '../php/form.php');

   // send request
   xhr.send(data);

   // listen for `load` event
   xhr.onload = () => {
     let res = xhr.response;
     form.reset();
       console.log(res);
       alert('Message bien envoyé !')
   }}
})