const elem = document.querySelector(".display_inner");
let file;
const dragArea = document.querySelector('.drag-drop');
var btn = dragArea.querySelector("button");
var input = dragArea.querySelector("input");


function form_fill_check1(){
    var check = 1;
    if(document.getElementById('i_image').value == ''){
        dragArea.style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_name').value == ''){
        document.getElementById('i_name').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_author').value == ''){
        document.getElementById('i_author').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_subject').value == ''){
        document.getElementById('i_subject').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_date').value == ''){
        document.getElementById('i_date').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_mrp').value == ''){
        document.getElementById('i_mrp').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_price').value == ''){
        document.getElementById('i_price').style.outlineColor = 'red';
        check = check-1;
    }
    if(check == 1){
        return true;
    }
    else{
        return false;
    }
}

function form_fill_check2(){
    var check = 1;
    if(document.getElementById('i_publisher').value == ''){
        document.getElementById('i_publisher').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_pubdate').value == ''){
        document.getElementById('i_pubdate').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_edition').value == ''){
        document.getElementById('i_edition').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_pagenumber').value == ''){
        document.getElementById('i_pagenumber').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_lang').value == ''){
        document.getElementById('i_lang').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_used').value == ''){
        document.getElementById('i_used').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_rate').value == ''){
        document.getElementById('i_rate').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_email').value == ''){
        document.getElementById('i_email').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_whatsapp').value == ''){
        document.getElementById('i_whatsapp').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_contact').value == ''){
        document.getElementById('i_contact').style.outlineColor = 'red';
        check = check-1;
    }
    if(document.getElementById('i_address').value == ''){
        document.getElementById('i_address').style.borderColor = 'red';
        check = check-1;
    }
    if(check == 1){
        return true;
    }
    else{
        return false;
    }
}


function nextdiv() {
    if(form_fill_check1()){
        elem.style.transform="translateX(-100vw)";
        window.scrollTo(top);
    }
}
function backdiv(){
    elem.style.transform="translateX(0vw)";
  window.scrollTo(top);
}



function file_browse(){
    input.click();
}

input.addEventListener("change", function(){
    file = this.files[0];
    show_file();
});

function show_file(){
    // let fileType = file.type;
    let fileReader = new FileReader();
    fileReader.onload = ()=>{
        let fileUrl = fileReader.result;
        // dragArea.style.background = `url("${fileUrl}")`;
        select = document.getElementById("selected");
        let imgtag = `<img src="${fileUrl}" alt="notloaded">`;
        select.innerHTML = imgtag;
        // dragArea.style.background="cover";
    }
    fileReader.readAsDataURL(file);
    document.querySelector("#dragheader").style.display = "none";
    document.querySelector("#selectedheader").style.display = "flex";
    btn.innerText = "Change Image";
}

//submit func
let loadingdiv = document.querySelector(".loadingpost");
function submit(){
if(form_fill_check2()){
    if(file != undefined){
        var form_data = new FormData();
        //appending all inputs here
        form_data.append('file',file);
        form_data.append('name',document.getElementById('i_name').value);
        form_data.append('author',document.getElementById('i_author').value);
        form_data.append('subject',document.getElementById('i_subject').value);
        form_data.append('date',document.getElementById('i_date').value);
        form_data.append('mrp',document.getElementById('i_mrp').value);
        form_data.append('price',document.getElementById('i_price').value);
        form_data.append('publisher',document.getElementById('i_publisher').value);
        form_data.append('pubdate',document.getElementById('i_pubdate').value);
        form_data.append('edition',document.getElementById('i_edition').value);
        form_data.append('pagenumber',document.getElementById('i_pagenumber').value);
        form_data.append('lang',document.getElementById('i_lang').value);
        form_data.append('used',document.getElementById('i_used').value);
        form_data.append('rate',document.getElementById('i_rate').value);
        form_data.append('email',document.getElementById('i_email').value);
        form_data.append('whatsapp',document.getElementById('i_whatsapp').value);
        form_data.append('contact',document.getElementById('i_contact').value);
        form_data.append('address',document.getElementById('i_address').value);
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "postupload.php", true);
        xhttp.onload = function(event){
            if(xhttp.status == 200){
                redirecthome();
            }
            else{
                alert(xhttp.status);
                //stop loading screen
                loadingdiv.style.display = "none";
            }
        }
        xhttp.send(form_data);
        // loading screen
        loadingdiv.style.display = "flex";
    }
}
}

function redirecthome(){
    loadingdiv.style.backgroundColor = "white";
    loadingdiv.innerHTML = `<img src="images/tick.gif" alt="gif" style="width: 250px; height: auto;">
        <span>Published Successfully!</span>
        <p>Redirecting to homepage...3..2..1</p>`;
    setTimeout(() => {
        location.href = "index.php";
    }, 5000);
}