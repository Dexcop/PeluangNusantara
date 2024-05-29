

var modalThanks = document.getElementById("thanksModal");

// Get the button that opens the modal
var btnThanks = document.getElementById("thanks-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btnThanks.onsubmit = function(e) {
    e.preventDefault();
    modalThanks.style.display = "block";
    console.log('Berhasil function');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modalThanks.style.display = "none";
}

// When the user clicks anywhere outside of the modalThanks, close it
window.onclick = function(event) {
    if (event.target == modalThanks) {
        modalThanks.style.display = "none";
    }
}

