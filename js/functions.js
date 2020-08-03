'use strict'

const saveUser = function(event,data){
    event.preventDefault();
    let user = {
        name:data.name.value
    }
    if(user.name!=''){
        fetch('http://localhost:3000/register',{
            method:'POST',
            body: JSON.stringify(user),
            headers:{
            'Content-Type': 'application/json'
            }
        }).then(res=>res.json())
        .catch(error=>console.error('Error',error))
        .then(response=>console.log('Success',response))
    }else{
        console.log('Empty Field')
    }
}
