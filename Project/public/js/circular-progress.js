
let circularProgress = document.querySelector(".circular-pro"),
    progressValue = document.querySelector(".progre-value");

let progressStarValue = 0,
    progressEndValue = 90,
    speed = 100;

let progress = setInterval(() => {
    progressStarValue++;
    progressValue.textContent = `${progressStarValue}%` 
    circularProgress.style.background = `conic-gradient(#1524ad ${progressStarValue * 3.6}deg, #f7f7f7 0deg);`

    if (progressStarValue == progressEndValue) {
        clearInterval(progress);
    }
   
}, speed);