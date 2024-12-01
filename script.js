
let form = document.getElementById('validate-form');

function validate(e){
    e.preventDefault();
   
    let name = e.target.name.value;
    let address = e.target.address.value;
    let email = e.target.email.value;
    let phone = e.target.phone.value;
    let emailpattern= "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"

    if(!name){
        alert("Name is required");
        return false;
    }

    if(!address){
        alert("Address is required");
        return false;
    }
    if(!email){
        alert("Email is required");
        return false;
    }

    if(!(email.match(emailpattern))){
        alert("Invalid Email");
        return false;
    }

    if(!phone){
        alert("Phone No. is required");
        return false;
    }
    if(!(phone.length===10)){
        alert("Invalid Phone Number");
        return false;
    }
    
    
    form.submit();
}

form.addEventListener('submit', validate);
