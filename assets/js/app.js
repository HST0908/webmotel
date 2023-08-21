function user_login(){
    document.getElementById("modal").style.display = "flex";
}

function back_login() {
    document.getElementById("modal").style.display = "none";
}

function dangbai() {
    window.location.href='admin/dangphong.php';
}
// counter = 1;
// setInterval(function(){
//     document.getElementById('radio' + counter).checked = true;
//     counter++
//     if(counter > 3){
//         counter = 1;
//     }
// }, 5000);

function Onback_press() {
    history.back();
}


// function admin add hover

let  list = document.querySelectorAll('.navigation li');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
item.addEventListener('mouseover',activeLink));

// MenuToggle

let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function() {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}