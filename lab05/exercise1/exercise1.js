
//get objects
let firstPass = document.getElementById("firstPass")
let secondPass = document.getElementById("secondPass")
let btnValidate = document.getElementById("btnValidate")
let lblAlert = document.getElementById("lblAlert")

//disable paste into passwords
firstPass.onpaste = e => e.preventDefault()
secondPass.onpaste = e => e.preventDefault()

//adds functionality to button
btnValidate.addEventListener("mousedown", function() {
    //checks if left click
    if (event.button == 0) {
        //check passwords
        if (firstPass.value.length >= 8) {
            if (firstPass.value == secondPass.value) {
                lblAlert.textContent="" //success
                alert("Success: Password Matches") //alerts match
            } else {
                lblAlert.textContent="Password do not match" //fail
                alert("Error: Password do not match") //alerts failure
            }
        } else {
            lblAlert.textContent="Password must be at least 8 characters long" //fail
            alert("Erro: Password must be at least 8 characters long") //alerts fail
        }
            
    }
})
