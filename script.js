function menu(){
    signup_box = document.getElementById("signup_box");
    if( signup_box.style.display == 'block'){
        signup_box.classList.toggle("show_signup");
        setTimeout(function(){signup_box.style.display = 'none';},300);
    }
    else{
        signup_box.style.display = 'block';
        signup_box.classList.toggle("show_signup");
    }
}

window.addEventListener('click', function(e){
    if (!document.getElementById('profile').contains(e.target)){
        if( signup_box.style.display == 'block'){
            signup_box.classList.toggle("show_signup");
            setTimeout(function(){signup_box.style.display = 'none';},300);
        }
  } 
})