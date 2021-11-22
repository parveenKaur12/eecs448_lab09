
function validate()
{
    console.log(validateflowerAmount());
    if(validateflowerAmount()== true && vallidateShipping() == true && validateUsername() == true)
    {
        //if true
        return true;
    }
    else{
        return false;
    }
    
}
function validateflowerAmount()
{
    let pinkAmount = document.getElementById("Pink").value;
    let daisyAmount = document.getElementById("Daisies").value;
    let tulipsAmount = document.getElementById("Tulips").value;
    if(pinkAmount < 0 || daisyAmount < 0 || tulipsAmount < 0)
    {
       // alert("ERROR! Please input a correct amount of flowers");
        return false;
    }
    if(pinkAmount.length == 0 || daisyAmount.length == 0 || tulipsAmount.length == 0)
    {
        //alert("Error! Please do not leave any of the 'Amount' fields empty!");
        return false;

    }
    else{
        return true;
    }
}
function vallidateShipping()
{
    let shippingChecked = false;
    if(document.getElementById("free_shipping").checked)
    {
        shippingChecked = true;
        return true;

    }
    else if(document.getElementById("threeDay_shipping").checked)
    {
        shippingChecked = true;
        return true;


    }
    else if(document.getElementById("overnight_shipping").checked)
    {
        shippingChecked = true;
        return true;


    }
    else{
        shippingChecked = false;
       // alert("Error! Please select a shipping method");
        return false;

    }
}
function validateUsername()
{
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    if(username.includes("@") && username.includes(".com"))
    {
       let word = username.split('@');
       let checkAddress = word[1].split('.com');
       if(checkAddress[0].length == 0)
       {
        //alert("Please enter a correct username! (name@domain.com)");
        return false;

       }
      
    }
    else{
      //  alert("Please enter a correct username! (name@domain.com)");
        return false;

    }
    if(password.length <= 0)
    {
    //    alert("Please input a password!");
        return false;

    }
    else{
        return true;

    }
}

function reset()
{
    document.getElementById("myForm").reset();

}
