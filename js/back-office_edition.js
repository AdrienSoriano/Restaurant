const cancel = document.querySelector('.cancel');

cancel.addEventListener("click", function(event){
    event.preventDefault();
    document.location.href="back-office.php";
})