'use strict'

const buttons=document.querySelectorAll(".button");
document.querySelector("#result").value="";
buttons.forEach((item)=>{

    item.addEventListener('click',(event)=>{
        if(item.value!="="){
            event.preventDefault();
        }
        inserir(item.value);
    })
})

function inserir(value) {
   
    if(value==="C"){
        clear();
    }
    else if(value==="<"){
        back();
    }
    else{
        document.querySelector("#result").value+=value;
         let result=document.querySelector("#result").value;
    }
}

function clear() {
    document.querySelector("#result").innerHTML="";
}

function back() {
    let number=document.querySelector("#result").value;

    document.querySelector("#result").innerHTML=number.substring(0,number.length-1);
}
