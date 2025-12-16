const username = document.getElementById('username');
const pass = document.getElementById('pass');
const form = document.getElementById('form');
const error = document.getElementById('error');

form.addEventListener('submit' ,(e)=>{
    let messages = []
    if(username.value === '' || username.value == null)

        {
            messages.push('Name is required!!!');
        }

    if(pass.value.length<=6){
        messages.push('password is too short!!!')
    }

    if(pass.value.length>=20 ){
        messages.push('password is too long!!!')
    }

    if(messages.length>0){

            e.preventDefault()
            error.innerText = messages.join(', ')
        }
        
})