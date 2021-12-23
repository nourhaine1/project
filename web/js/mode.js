let i=0;



function darkMode() {
    i=i+1;
    var element1 = document.getElementById("dark");
    var element2 = document.getElementById("features");
    var img =document.getElementById("darkmodeimg");
    if (i%2==0){
        img.src="images/light_mode.png";
    }
    else{
        img.src="images/dark_mode.png";
    }
    
   
    element1.classList.toggle("dark-mode");
    element2.classList.toggle("dark-mode");

 }