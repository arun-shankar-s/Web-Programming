var screen=document.getElementById('screen');
function btnClick(value){
    screen.value+=value;
}

function btnClr(value){
    screen.value='';
}

function calc(){
    screen.value=eval(screen.value)
}
