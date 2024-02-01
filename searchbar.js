//auto-suggestion for search..
document.getElementById("searchq").addEventListener("keyup",(e)=>{
    var query = document.getElementById("searchq").value;
    if (e.key === "Enter") {
        e.preventDefault();
        searched();
    }
    else if(query.length > 0){
        var form_data = new FormData();
        form_data.append('query',query);
        var ajax_request = new XMLHttpRequest();
        ajax_request.open('POST','autosuggest.php');
        ajax_request.send(form_data);
        ajax_request.onreadystatechange = function(){
            if(ajax_request.readyState == 4 && ajax_request.status == 200){
                var response = JSON.parse(ajax_request.responseText);
                var html = "";
                if(response.length > 0){
                    for(var count = 0;count < response.length; count++){
                        html += '<a class="move" onclick="get_text(this)" href="javascript:" aria-current="true"><li>'+response[count].name+'</li></a>';
                    }
                }
                else{
                    html += '<li class="disabled">No Match Found!</li>';
                }
                document.getElementById('search_result').innerHTML = html;
            }
        }
    }
    else{
        document.getElementById('search_result').innerHTML = '';
    }
});
//search clicked list li
function get_text(e){
    var s_text = e.textContent;
    document.getElementById("searchq").value = s_text;
    document.getElementById("search_result").innerHTML = '';
    // document.getElementById("searchq").focus();
    searched();
}

// After searched // after pressed enter
function searched(){
    var query = document.getElementById("searchq").value;
    if(query.length > 0){
        window.location.assign("index.php?search="+query);
    }
}



// move focus aerokeys
var keycount = -1;
document.getElementsByClassName("searchbar_body")[0].addEventListener("keydown",(e)=>{
    var li_len = document.querySelectorAll(".move").length-1;
    var query = document.getElementById("searchq").value;
    if(e.key == "ArrowDown"){
        keycount++;
        if(keycount > li_len){
            keycount = 0;
        }
        document.getElementsByClassName("move")[keycount].focus();
        e.preventDefault();
    }
    else if(e.key == "ArrowUp"){
        keycount--;
        if(keycount < 0){
            keycount = li_len;
        }
        document.getElementsByClassName("move")[keycount].focus();
        e.preventDefault();
    }
    else{
        keycount = -1;
    }
    console.log(li_len);
});
