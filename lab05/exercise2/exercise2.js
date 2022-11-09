
//get objects
let imgMain = document.getElementById("imgMain")
let btnPrev = document.getElementById("btnPrev")
let btnNext = document.getElementById("btnNext")

//define bounds and index
let index = 1
let max = 22

//sets first image
imgMain.src = "img/" + index + ".jpg" 

//adds button functionality to prev and next
btnPrev.addEventListener("mousedown", function() {
    if (event.button == 0) {
        //deincrement index, handle index underflow, and update image
        index--
        if (index == 0) {index = max}
        imgMain.src = "img/" + index + ".jpg" 
    }
})
btnNext.addEventListener("mousedown", function() {
    if (event.button == 0) {
        //increment index, handle index overflow, and update image
        index++
        if (index > max) {index = 1}
        imgMain.src = "img/" + index + ".jpg" 
    }
})