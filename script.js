//signin func

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
    try {
        //defocus drop menu
        if (!document.getElementById('profile').contains(e.target)){
            if( signup_box.style.display == 'block'){
                signup_box.classList.toggle("show_signup");
                setTimeout(function(){signup_box.style.display = 'none';},300);
            }
        }
        //defocus search results list
        if(!document.getElementById("searchq").contains(e.target)){
            document.getElementById("search_result").style.display = "none";
        }
    } catch (error) {
        //
    }
});

function closebtn(){
    element = document.getElementById('imageview');
    if( element.style.display != 'flex'){
        element.style.display = 'flex';
        setTimeout(function(){element.classList.toggle("imageviewClose");},30);
        
    }
    else{
        
        element.classList.toggle("imageviewClose");
        setTimeout(function(){element.style.display = 'none';},300);
    }
}