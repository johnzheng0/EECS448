
//get objects
let txtMain = document.getElementById("mainText")
let boRed = document.getElementById("borderRed")
let boGre = document.getElementById("borderGreen")
let boBlu = document.getElementById("borderBlue")
let boWidth = document.getElementById("borderWidth")
let bgRed = document.getElementById("bgRed")
let bgGre = document.getElementById("bgGreen")
let bgBlu = document.getElementById("bgBlue")
let btnSubmit = document.getElementById("btnSubmit")

//define submit button functionality
function submit() {
    /*
    update border width
    update border color
    update background color
    */
    txtMain.style.borderWidth=boWidth.value+"px"
    txtMain.style.borderColor="rgb("+boRed.value+","+boGre.value+","+boBlu.value+")"
    txtMain.style.backgroundColor="rgb("+bgRed.value+","+bgGre.value+","+bgBlu.value+")"
}
