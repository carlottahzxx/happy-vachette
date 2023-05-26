$(document).mousemove(function(e){
    const eyeL = document.getElementById("left-eye");
    const eyeR = document.getElementById("right-eye");

    const img = document.getElementById("vachette");
    var offset_x = img.getBoundingClientRect().left + $(document).scrollLeft();
    var offset_y = img.getBoundingClientRect().top + $(document).scrollTop();
    
    const fact = img.clientWidth/680;

    var mousex = e.pageX;
    var mousey = e.pageY;

    const eyeLx = 284*fact +offset_x;
    const eyeLy = 164*fact +offset_y;

    const eyeRx = 397*fact +offset_x;
    const eyeRy = 165*fact +offset_y;

    const a = 9*fact;
    const b = 12*fact;
    
    var angleL = -Math.PI/2;
    var angleR = -Math.PI/2;

    if(mousex != eyeLx){
        angleL = Math.atan((mousey-eyeLy)/(mousex-eyeLx))
        if(mousex-eyeLx<0){
            angleL = -Math.PI + angleL;
        }
    }

    if(mousex != eyeRx){
        angleR = Math.atan((mousey-eyeRy)/(mousex-eyeRx))
        if(mousex-eyeRx<0){
            angleR = -Math.PI + angleR;
        }
    }
    
    eyeL.style.width = 12*fact+"px";
    eyeL.style.height = 18*fact+"px";

    eyeR.style.width = 12*fact+"px";
    eyeR.style.height = 18*fact+"px";

    eyeL.style.left = eyeLx+a*Math.cos(angleL)-6*fact+"px";
    eyeL.style.top = eyeLy+b*Math.sin(angleL)-9*fact+"px";

    eyeR.style.left = eyeRx+a*Math.cos(angleR)-6*fact+"px";
    eyeR.style.top = eyeRy+b*Math.sin(angleR)-9*fact+"px";
    
});

