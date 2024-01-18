const body = document.querySelector('body');
    sidebar = body.querySelector('nav');
    toggle =body.querySelector(".toggle");
    modeswitch = body.querySelector(".toggle-switch");
    modetext= body.querySelector(".mode-text");


toggle.addEventListener("click", ()=> {
    sidebar.classList.toggle("close")
})