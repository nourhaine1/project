let distance =3600;
let i=0;
function countDown(){
    
    var x = setInterval(function() {
    
     
      distance--;
        
      if ((distance < 15*60) &&( i==0)) {
        i=1;
      alert("15 Minutes Remaining");
      
  
    }
      if (distance < 0) {
        alert("Time To Go Out and Make Some Friends");
        clearInterval(x);
        location.replace("logout.php");
      }
    }, 1000);
}