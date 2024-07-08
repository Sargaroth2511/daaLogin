console.log("showPasswordFieldTooltip.js");
const passwordField = document.getElementById("password");
const restrictPara = document.getElementById("restrictPara");
let timeout;
passwordField.addEventListener("click", () => {
        restrictPara.classList.remove("hiddenEl");
        timeout = setTimeout(() => {
            restrictPara.classList.add("hiddenEl");
            
        }, 6000);
        
});
passwordField.addEventListener("focusout", () => {
        restrictPara.classList.add("hiddenEl");
        clearTimeout(timeout);
    });