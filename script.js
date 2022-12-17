 const name = document.getElementById('name').value;
 const secondName = document.getElementById('secondName').value;
 const email = document.getElementById('email').value;
 const password = document.getElementById('password').value;
 const news =  document.getElementById('news').value;
 const company=   document.getElementById('company').value;
 const street = document.getElementById('street').value;
 const postCode = document.getElementById('name').value;
 const city = document.getElementById('name').value;
 const country = document.getElementById('country').value;
 const phone = document.getElementById('phone').value;

  function isPasswordSave(password){
    if (password.length<8){
        return false
    }
    if(!password.match(/[A-Z]/)|| !password.match(/[a-z]/)){
        return false
    }
    if(!password.match(/[0-9]/)){
        return false
    }
    return true
  }


  document.getElementById('submit').addEventListener('click',()=>{
        if(!isPasswordSave(password)){
            document.getElementById('password').style.border = "5px solid red"
            document.getElementById('password').style.backgroundColor = "red"
            
        }
        if(isPasswordSave(password)){
            document.getElementById('password').style.border = "5px solid green"
            document.getElementById('password').style.backgroundColor = "green"
            
            
        
    }
    });