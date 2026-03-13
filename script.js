document.getElementById("form").addEventListener("submit",function(e){

let phone = document.querySelector("input[name='phone']").value;

if(phone.length < 10){
alert("Phone must be at least 10 digits");
e.preventDefault();
}

});