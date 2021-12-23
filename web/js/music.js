var aud = document.getElementById("aud");
    var img=document.getElementById("musicimg");

    function enableMute() { 
        aud.play();
        if(aud.muted){
     img.src="images/megaphone.png"
      aud.muted = false;}
      else {
        img.src="images/mute.png"
        aud.muted = true;}
    }