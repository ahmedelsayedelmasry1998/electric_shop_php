 var home = document.getElementById("home");
 var contact = document.getElementById("contact");
 var contactCheck = document.getElementsByClassName("contactCheck")[0];
 home.onclick = function () {
    contact.classList.remove("active");
    home.classList.add("active");
   }
 contact.onclick = function () {
    home.classList.remove("active");
    contact.classList.add("active");
   }
   if(contactCheck.innerHTML == 'contact')
   {
    home.classList.remove("active");
    contact.classList.add("active");
   }
   else{
    contact.classList.remove("active");
    home.classList.add("active");
   }