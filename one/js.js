
let input = document.getElementById('input');
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



// form2

let input2 = document.getElementById('input2');
let icon2 = document.getElementById('icon2');

input2.oninput = function(){
    
    if(input2.value == ''){
        icon2.style.display = 'none';
    }else{
        icon2.style.display = 'block';
    }
}

icon2.onclick = function(){

   if(input2.type == 'password'){
        input2.type = 'text';
		icon2.classList.remove('fa-eye-slash');
		icon2.classList.add('fa-eye');

   }else{
    input2.type = 'password';
	icon2.classList.remove('fa-eye');
	icon2.classList.add('fa-eye-slash');
   }
   
}