const menu_burger = document.querySelector('.icone_burger');
const menu_burger_croix = document.querySelector('.burger_croix')



menu_burger.addEventListener('click', function(){

menu_burger.style.display = "none";
menu_burger_croix.style.display = "flex";

})

menu_burger_croix.addEventListener('click', function(){

menu_burger.style.display = "flex";
menu_burger_croix.style.display = "none";

})



