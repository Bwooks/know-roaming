function validateInputs(form) {
    var inputs = form.children;
    var formName = form.id;
    var boolEmail, 
        boolPhone, 
        boolName, 
        boolCountry,
        boolAddress;
    var email, 
        phone, 
        name, 
        country,
        address,
        model,
        message;
    var userInput = {};
    for(var i = 0;i<inputs.length;i++) {
        var input = inputs[i].children[1];

        if(input) {

            if(input.value === "" || input.value.length > 250) {
                return null;
            }
            switch(input.id) {
                case "user-email" :
                    var email = input.value;
                    boolEmail = /\w@\w/g.test(email);
                    break;
                case "user-name" :
                    var name = input.value;
                    boolName = !/[0-9]/g.test(name);
                    break;
                case "user-phone" :
                    var phone = input.value;
                    boolPhone = /^\d{10,15}$/g.test(phone); 
                    break;               
                case "user-message" :
                    var message = input.value;
                    break;
                case "user-address" :
                    var address = input.value;
                    boolAddress = /\w/g.test(address);
                    break;
                case "user-country" :
                    var country = input.value;
                    boolCountry = /\w/g.test(country);
                    break;
                case "user-model" :
                    var selected = input.options[input.selectedIndex].value;
                    if(selected === "select") {
                        return null;
                    }
                    break;
                default : 
                    return null;
            }

        }
    }

    return boolEmail && boolPhone && boolName ? userInput = { 
        "email" :  email,
        "phone" : phone,
        "name" : name,
        "message" : message,
        "address" : address,
        "model" : model,
        "country" : country,
        "form"    : formName
    } : null;

}