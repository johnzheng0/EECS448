let error = document.getElementById("error")

let inputUsername = document.getElementById("loginUsername")
let inputPassword = document.getElementById("loginPassword")
let inputQuantity = document.getElementsByClassName("shopItemQuantity")
let inputShipping = document.getElementsByClassName("radioShipping")


function checkValid(e) {

    message=[]

    let cost = 0
    let flag = false
    for (let i=0; i<inputQuantity.length; i++) {
        if (inputQuantity[i].value == "" || inputQuantity[i].value < 0 || isNaN(inputQuantity[i].value)) {
            e.preventDefault()
            message.push("invalid quantity(s) found")
            flag = true
            break
        }
        cost += inputQuantity[i].value
    }
    if (flag == false && cost == 0) {
        e.preventDefault()
        message.push("please purchase at least one item")
    }

    if (!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(inputUsername.value))) {
        e.preventDefault()
        message.push("invalid username (email)")
    }
    if (inputPassword.value=="") {
        e.preventDefault()
        message.push("invalid password")
    }


    flag = false
    for (let i=0; i<inputShipping.length; i++) {
        if (inputShipping[i].checked == true) {flag = true; break}
    }
    if (flag == false) {
        e.preventDefault()
        message.push("invalid shipping option")
    }

    if (message.length>0) {alert(message.join('\n'))}
}

function buy(name) {
    document.getElementById(name).stepUp()
}
