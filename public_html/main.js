// get modal element
var modal = document.getElementById('simpleModal');

//get open modal button
var modalBtn = document.getElementById('modalBtn');

//get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

// Listen for click on modal button
modalBtn.addEventListener('click', openModal);

// Listen for click on close button
closeBtn.addEventListener('click', closeModal);

//listen for outside click
window.addEventListener('click', clickOutside);

//function to open modal
function openModal() {
    modal.style.display = 'block';
}

//function to close modal
function closeModal() {
    modal.style.display = 'none';
}

//function to close modal if outside clicked
function clickOutside(e) {
    if(e.target == modal) {
        modal.style.display = 'none';
    }
}