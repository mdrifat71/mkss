//mobile menu
let mobile_menu = document.querySelector(".hamburger");

mobile_menu.addEventListener("click", function(e){
    console.log("hello")
    let nav = document.querySelector("nav")
    
    if (mobile_menu.getAttribute("toggle") == "close")
    {
        nav.style.height = "100%";
        mobile_menu.setAttribute("toggle", "open")
    }
    else
    {
        nav.style.height = "0";

        mobile_menu.setAttribute("toggle", "close")
    }
    
    
})
