function handleSubmit(event) {
    event.preventDefault();
    var form = event.target;
    var userInfo = validateInputs(form);
    var formEndpoint = '/public_html/templates/pages/home/form.php';
    console.log(userInfo);
    if (form.id === "applyForm" || userInfo === null) {

        var parent = form.parentNode;
        var htmlNode = form.id === "applyForm" ? document.getElementById('apply-form-message') : document.getElementById('contact-form-message');
        var errorMessage = "Sorry we could not process the application at this time";
        var successMessage = "Thank you for your submission";
        var promise = sendRequest(formEndpoint, 'post',userInfo);

        if(promise) {

            promise.then(function(response) {
                    handleError(response);
                }).then(function(result){
                    htmlNode.firstChild.textContent = successMessage;
                    parent.appendChild(htmlNode);
                    form.style.visibility = "hidden";
                    htmlNode.style.display = "block"; 
                }).catch(function(error){
                    alert(error.message);
                });

            } else {
                htmlNode.firstChild.textContent = errorMessage;
                parent.appendChild(htmlNode);
                form.style.visibility = "hidden";
                htmlNode.style.display = "block"; 
            }
    
    } else if(userInfo) {

        var modal = document.getElementById('form-modal');
        var successMessage = "Thank you for your submission, someone will be in touch with you shortly!";
        var errorMessage = "Sorry we could not process the application at this time";
        var promise = sendRequest(formEndpoint, 'post',userInfo);
        promise.then(function(response){
            return handleError(response);
        }).then(function(result){
            console.log(result);
            modal.firstElementChild.textContent = successMessage;
            modal.style.opacity = "1";
            modal.style.zIndex = "1";
        }).catch(function(error){
            alert(error.message);
        });
    } 
}

function handleError(response) {
    if(!response.ok){
        throw Error(response.statusText);
    }
    return response.json();
}

function sendRequest(endpoint, method, body) {
    if(endpoint && method && body) {
        return window.fetch(endpoint, {
            method: method,
            body : JSON.stringify(body)
        });
    }
    return false;
    
}
function handleModalClose(event) {
    var parent = event.target.parentNode;
    if(parent.style.opacity === "0" || parent.style.opacity === "") {
        return;
    }
    parent.style.opacity = "0";
    parent.style.zIndex = "-1";
}
function handleHover(event) {
    alert("Surprise!");
}