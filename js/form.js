const icone_nom =document.querySelector('#icone_nom')
const icone_prenom=document.querySelector('#icone_prenom')
const icone_mail=document.querySelector('#icone_mail')
const icone_message=document.querySelector('#icone_message')
const icone_nom_bleu=document.querySelector('#icone_nom_bleu')
const icone_prenom_bleu=document.querySelector('#icone_prenom_bleu')
const icone_mail_bleu=document.querySelector('#icone_mail_bleu')
const icone_message_bleu=document.querySelector('#icone_message_bleu')


const input_nom=document.querySelector('#input_nom')
const input_prenom=document.querySelector('#input_prenom')
const input_mail=document.querySelector('#input_mail')
const input_message=document.querySelector('#input_message')



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