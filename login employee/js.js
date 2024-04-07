
let input = document.getElementById ('input');
let icon = document.getElementById('icon');

input.oninput = function(){
    
    if(input.value == ''){
        icon.style.display = 'none';
    }else{
        icon.style.display = 'block';
    }
}

icon.onclick = function(){

   if(input.type == 'password'){
        input.type = 'text';
		icon.classList.remove('fa-eye-slash');
		icon.classList.add('fa-eye');

   }else{
    input.type = 'password';
	icon.classList.remove('fa-eye');
	icon.classList.add('fa-eye-slash');
   }
   
}