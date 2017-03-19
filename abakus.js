window.onload = function() {
    var beads = document.getElementsByClassName("bead");
    var beads2 = document.getElementsByClassName("bead2");

    for (var i = 0; i < beads.length; i++) {
        beads[i].onclick = function () {
            otherSide(this);
            //alert(i)
        }
    }
    for (var i = 0; i < beads2.length; i++) {
        beads2[i].onclick = function () {
            otherSide(this);
            //alert(i)
        }
    }

    function otherSide(bead) {
        if (window.getComputedStyle(bead).getPropertyValue("float") == "left"){
            bead.style.float = "right"
        }
        else {
            bead.style.float = "left"
        }
    }

    };