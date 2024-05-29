
const submit = document.getElementById("update_data");

const isEmpty = (str) => str.length === 0;
const checkLength = (str, min, max) => str.length <= max && str.length >= min;
const alphabetOnly = (str) => {
    let pattern = /^[a-zA-Z]+$/;
    return pattern.test(str);
};
const numberOnly = (str) => {
    let pattern = /^[0-9]+$/;
    return pattern.test(str);
};
const emailOnly = (str) => {
    let pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return pattern.test(str);
};
function checkEqual(str1, str2) {
    return str1 === str2;
}
const isValidString = (str) => {
    let pattern = /^[a-zA-Z][a-zA-Z0-9@_]{0,}[a-zA-Z0-9]{0,1}$/;
    return pattern.test(str);
};
const isValidPassword = (str) => {
    var pattern = /^(?=.*\d)(?=.*[@_])(?=.*[A-Z])(?=.*[a-z])[a-zA-Z\d@_]+$/;
    return pattern.test(str);
};

function validateDateOfBirth() {
    var dobInput = document.querySelector('#dob');
    var dobMessage = document.querySelector('#dob-message');
};

submit.addEventListener("click", (e) => {
    // e.preventDefault();
    // extracting DOM objects
    const fname = document.getElementById("fname");
    const lname = document.getElementById("lname");

    const dob = document.getElementById("dob");
    const gender = document.getElementById("gender");
    const address = document.getElementById("address");

    const phone = document.getElementById("phone");
    // const email = document.getElementById("email");
    
    // error message container
    const fnameMessage = document.getElementById("fname-message");
    const lnameMessage = document.getElementById("lname-message");
   
    const dobMessage = document.getElementById("dob-message");
    const genderMessage = document.getElementById("gender-message");
    const addressmessage = document.getElementById("address-message");
    
    const phoneMessage = document.getElementById("phone-message");
    //  const emailMessage = document.getElementById("email-message");
    // const usernameMessage = document.getElementById("username-message");
    const password1Message = document.getElementById("password1-message");
    const password2Message = document.getElementById("password2-message");
    let isValid = true;
    if (isEmpty(fname.value)) {
        fnameMessage.innerText = "Please enter your Fisrt name.";
        isValid = false;

    } else if (!checkLength(fname.value, 2, 50)) {
        fnameMessage.innerText = "  Field must be 2 to 50 characters.";
        isValid = false;

    } else if (!alphabetOnly(fname.value)) {
        fnameMessage.innerText = "First Name must be character.";
        isValid = false;

    } else {
        fnameMessage.innerText = "";
    }
    if (isEmpty(lname.value)) {
        lnameMessage.innerText = "Please enter your Last name.";
        isValid = false;

    } else if (!checkLength(lname.value, 2, 50)) {
        lnameMessage.innerText = "  Field must be 2 to 50 characters.";
        isValid = false;

    } else if (!alphabetOnly(lname.value)) {
        lnameMessage.innerText = "Last Name must be character.";
        isValid = false;

    } else {
        lnameMessage.innerText = "";
    }
    

    if (isEmpty(dob.value)) {
        dobMessage.innerText = "Please select a date.";
        isValid = false;

    } else {
        var dateOfBirth = new Date(dob.value);
        var today = new Date();
        var minDate = new Date(today.getFullYear() - 16, today.getMonth(), today.getDate());

        if (dateOfBirth > minDate) {
            dobMessage.innerText = "Minimum age should be 16 years.";
            isValid = false;

        } else {
            dobMessage.innerText = "";
            // Proceed with further actions or form submission
        }
    }

    function isEmpty(value) {
        return !value || value.trim().length === 0;
    }


    function isEmpty(value) {
        return !value || value.trim().length === 0;
    }
    
    if (isEmpty(phone.value)) {
        phoneMessage.innerText = "Please enter your phone number.";
        isValid = false;

    } else if (!numberOnly(phone.value)) {
        phoneMessage.innerText = "  Phone must be numbers.";
        isValid = false;

    } else if (!checkLength(phone.value, 10, 10)) {
        phoneMessage.innerText = "  Phone must be 10 digits.";
        isValid = false;

    } else {
        phoneMessage.innerText = "";
    }
    if (isEmpty(address.value)) {
        addressmessage.innerText = "Please enter your address.";
        isValid = false;

    } else if (!alphabetOnly(address.value)) {
        addressmessage.innerText = " Address must be characters.";
        isValid = false;

    } else {
        addressmessage.innerText = "";
    }

   
    if (!isValid) {
        e.preventDefault();
    }
 
    
 
});



