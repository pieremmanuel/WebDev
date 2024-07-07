const navBar = document.querySelector(".navbar");

document.addEventListener("scroll", 
    () => { 
        if(window.scrollY < 20){
            navBar.classList.add("scrolling") ;     
        }

        else{             
            navBar.classList.remove("scrolling") ;
        }
        console.log(window.scrollY); 
    } 
);