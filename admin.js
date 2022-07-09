const var1=document.getElementById('input1');
var1.addEventListener('keyup',(e)=>{
value1=e.target.value
})
const var2=document.getElementById('input2');
var2.addEventListener('keyup',(o)=>{
value2=o.target.value
})

const btnvalue1=document.getElementById('btn1');
btnvalue1.addEventListener('click',()=>{

        if(value1=="admin"&&value2=="admin"){
        window.open('adminpanel.html');
           }
        else{
        alert("Invalid Username and Password!");
        }
})

