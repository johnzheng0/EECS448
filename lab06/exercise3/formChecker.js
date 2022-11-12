let error = document.getElementById("error")

let inputUsername = document.getElementById("loginUsername")
let inputPassword = document.getElementById("loginPassword")
let inputShipping = document.getElementById("fieldShipping")
let inputQuantity = document.getElementsByClassName("shopItemQuantity")


function checkValid(e) {

    message=[]

    if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/gi.test(inputUsername.value))) {
        e.preventDefault()
        message.push("invalid email/username")
    }
    if (inputPassword.value=="") {
        e.preventDefault()
        message.push("invalid password")
    }

    for (let i=0; i<inputQuantity.length; i++) {
        console.log(inputQuantity[i].value)
        if (inputQuantity[i].value < 0 || isNaN(inputQuantity[i].value)) {
            e.preventDefault()
            message.push("invalid quantity")
            break;
        }
    }
    console.log(message.length);
    if (message.length>0) {alert(message.join(', '))}
}

function test(name) {
    document.getElementById(name).stepUp()

}
