window.onload = function() {
   var target = document.getElementById('target');

   function newCoordinates(movingObject) {
       var newpos = Math.random()*300;
       movingObject.style.marginLeft = newpos + "px";
       movingObject.style.marginTop = newpos + "px";
       //alert(newpos);
   }

    target.onclick=function(){
        newCoordinates(this);
    }
};