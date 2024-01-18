/** Cards de conteo estadistica */
let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) =>{
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute
        ("data-val"));
    let duration = Math.floor(interval/endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration );
}); 
/*
let circularProgress = document.querySelector(".circular-progress"),
    progressValue = document.querySelector(".progress-value");

let progressStarValue = 0,
    progressEndValue = 50,
    speed = 100;

let progress = setInterval(() => {
    progressStarValue++;
    progressValue.textContent = `${progressStarValue}%` 
    circularProgress.style.background = 'conic-gradient(#2f179c ${progressStarValue * 3.6}deg, #ededed 0deg)'

    if (progressStarValue == progressEndValue) {
        clearInterval(progress);
    }
   
}, speed);*/