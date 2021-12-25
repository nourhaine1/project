let distance =3600;
let i=0;
function countDown(){
    
    var x = setInterval(function() {
    
     
      distance--;
        
      if ((distance < 15*60) &&( i==0)) {
        i=1;
      alert("Il vous reste que 15 minutes ..");
      
  
    }
      if (distance < 0) {
        alert("C'est le temps de sortir ..Byee");
        clearInterval(x);
        location.replace("./logout.php");
      }
    }, 1000);
}