
window.onload = function() {

    (function hoverEvent(){
        var hiddenDiv = document.getElementById('hidden-div');
        hiddenDiv.addEventListener('mouseover',handleHover);
    }());

    (function submitEvent(){
        var contactForm = document.getElementById('contactForm');
        var applyForm = document.getElementById('applyForm');
        contactForm.addEventListener('submit',handleSubmit);
        applyForm.addEventListener('submit',handleSubmit);
    })();

    (function modalEvent(){
        var modal = document.getElementById('form-modal');
        modal.children[1].addEventListener('click',handleModalClose);
    })();

}
