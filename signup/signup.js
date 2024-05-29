
const submit = document.getElementById("sign_up");

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
const isValidcity = (str) => {
    var pattern = /^[0-9][0-9\-/]*[0-9]$/;
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
    const email = document.getElementById("email");
    const dob = document.getElementById("dob");
    const gender = document.getElementById("gender");
    const address = document.getElementById("address");
    const province = document.getElementById("province");
    const district = document.getElementById("district");
    const citizenship =document.getElementById("citizenship");
    const phone = document.getElementById("phone");
    // const email = document.getElementById("email");
    const username = document.getElementById("username");
    const password1 = document.getElementById("password1");
    const password2 = document.getElementById("password2");
    // error message container
    const fnameMessage = document.getElementById("fname-message");
    const lnameMessage = document.getElementById("lname-message");
    const emailMessage = document.getElementById("email-message");
    const dobMessage = document.getElementById("dob-message");
    const genderMessage = document.getElementById("gender-message");
    const addressmessage = document.getElementById("address-message");
    const provinceMessage = document.getElementById("province-message");
    const districtMessage = document.getElementById("district-message");
    const citizenshipMessage = document.getElementById("citizenship-message");
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
    if (isEmpty(email.value)) {
        emailMessage.innerText = "Please enter your valid email";
        isValid = false;

    } else if (!emailOnly(email.value)) {
        emailMessage.innerText = "Please enter proper format";
        isValid = false;


    } else {
        emailMessage.innerText = "";
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
    if (isEmpty(citizenship.value)) {
        citizenshipMessage.innerText = "Please enter your citizenship number.";
        isValid = false;

    // } else if (!numberOnly(citizenship.value)) {
    //     citizenshipMessage.innerText = " Citizenship must be numbers.";
    //     isValid = false;
    } else if (!isValidcity(citizenship.value)) {
    citizenshipMessage.innerText = "Only Numbers '-' And '/' is allowed";
    isValid = false;

    } else if (!checkLength(citizenship.value, 4, 16)) {
        citizenshipMessage.innerText = "Citizenship must be 4 to 11 digits.";
        isValid = false;

 

   
    } else {
        citizenshipMessage.innerText = "";
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

    if (isEmpty(password1.value)) {
        password1Message.innerText = "Please enter your password.";
        isValid = false;

    } else if (!checkLength(password1.value, 8, 20)) {
        password1Message.innerText = "  Password must be 8 to 20 characters.";
        isValid = false;

    } else if (!isValidPassword(password1.value)) {
        password1Message.innerText = "  Must contain at least a digit,  special character,uppercase letter and  lowercase letter";
        isValid = false;

    } else {
        password1Message.innerText = "";
    }
    if (isEmpty(password2.value)) {
        password2Message.innerText = " Please re-enter your password.";
        isValid = false;

    } else if (!checkEqual(password1.value, password2.value)) {
        password2Message.innerText = "  Password does not match.";
        isValid = false;

    } else {
        password2Message.innerText = "";
    }
    if (!isValid) {
        e.preventDefault();
    }
 
    
 
});



// const submit = document.getElementById("sign_up");

// const isEmpty = (str) => str.length === 0;
// const checkLength = (str, min, max) => str.length <= max && str.length >= min;
// const alphabetOnly = (str) => {
//     let pattern = /^[a-zA-Z]+$/;
//     return pattern.test(str);
// };
// const numberOnly = (str) => {
//     let pattern = /^[0-9]+$/;
//     return pattern.test(str);
// };
// const emailOnly = (str) => {
//     let pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//     return pattern.test(str);
// };
// function checkEqual(str1, str2) {
//     return str1 === str2;
// }
// const isValidString = (str) => {
//     let pattern = /^[a-zA-Z][a-zA-Z0-9@_]{0,}[a-zA-Z0-9]{0,1}$/;
//     return pattern.test(str);
// };
// const isValidPassword = (str) => {
//     var pattern = /^(?=.*\d)(?=.*[@_])(?=.*[A-Z])(?=.*[a-z])[a-zA-Z\d@_]+$/;
//     return pattern.test(str);
// };
// function validateDateOfBirth() {
//     var dobInput = document.querySelector('#dob');
//     var dobMessage = document.querySelector('#dob-message');
// };

// submit.addEventListener("click", () => {
//     // extracting DOM objects
//     const fname = document.getElementById("fname");
//     const lname = document.getElementById("lname");
//     const email = document.getElementById("email");
//     const dob = document.getElementById("dob");
//     const gender = document.getElementById("gender");
//     const address = document.getElementById("address");
//     const province = document.getElementById("province");
//     const district = document.getElementById("district");
//     const citizenship = document.getElementById("citizenship");
//     const phone = document.getElementById("phone");
//     const username = document.getElementById("username");
//     const password1 = document.getElementById("password1");
//     const password2 = document.getElementById("password2");
//     // error message container
//     const fnameMessage = document.getElementById("fname-message");
//     const lnameMessage = document.getElementById("lname-message");
//     const emailMessage = document.getElementById("email-message");
//     const dobMessage = document.getElementById("dob-message");
//     const genderMessage = document.getElementById("gender-message");
//     const addressmessage = document.getElementById("address-message");
//     const provinceMessage = document.getElementById("province-message");
//     const districtMessage = document.getElementById("district-message");
//     const citizenshipMessage = document.getElementById("citizenship-message");
//     const phoneMessage = document.getElementById("phone-message");
//     const password1Message = document.getElementById("password1-message");
//     const password2Message = document.getElementById("password2-message");

//     if (isEmpty(fname.value)) {
//         fnameMessage.innerText = "Please enter your First name.";
//     } else if (!checkLength(fname.value, 2, 50)) {
//         fnameMessage.innerText = "Field must be 2 to 50 characters.";
//     } else if (!alphabetOnly(fname.value)) {
//         fnameMessage.innerText = "First Name must be characters.";
//     } else {
//         fnameMessage.innerText = "";
//     }
//     if (isEmpty(lname.value)) {
//         lnameMessage.innerText = "Please enter your Last name.";
//     } else if (!checkLength(lname.value, 2, 50)) {
//         lnameMessage.innerText = "Field must be 2 to 50 characters.";
//     } else if (!alphabetOnly(lname.value)) {
//         lnameMessage.innerText = "Last Name must be characters.";
//     } else {
//         lnameMessage.innerText = "";
//     }
//     if (isEmpty(email.value)) {
//         emailMessage.innerText = "Please enter a valid email";
//     } else if (!emailOnly(email.value)) {
//         emailMessage.innerText = "Please enter a proper format";
//     } else {
//         emailMessage.innerText = "";
//     }

//     if (isEmpty(dob.value)) {
//         dobMessage.innerText = "Please select a date.";
//     } else {
//         var dateOfBirth = new Date(dob.value);
//         var today = new Date();
//         var minDate = new Date(today.getFullYear() - 16, today.getMonth(), today.getDate());

//         if (dateOfBirth > minDate) {
//             dobMessage.innerText = "Minimum age should be 16 years.";
//         } else {
//             dobMessage.innerText = "";
//             // Proceed with further actions or form submission
//         }
//     }

//     function isEmpty(value) {
//         return !value || value.trim().length === 0;
//     }

//     if (isEmpty(citizenship.value)) {
//         citizenshipMessage.innerText = "Please enter your citizenship number.";
//     } else if (!numberOnly(citizenship.value)) {
//         citizenshipMessage.innerText = "Citizenship must be numbers.";
//     } else {
//         citizenshipMessage.innerText = "";
//     }
//     if (isEmpty(phone.value)) {
//         phoneMessage.innerText = "Please enter your phone number.";
//     } else if (!numberOnly(phone.value)) {
//         phoneMessage.innerText = "Phone must be numbers.";
//     } else if (!checkLength(phone.value, 10, 10)) {
//         phoneMessage.innerText = "Phone must be 10 digits.";
//     } else {
//         phoneMessage.innerText = "";
//     }
//     if (isEmpty(address.value)) {
//         addressmessage.innerText = "Please enter your address.";
//     } else if (!alphabetOnly(address.value)) {
//         addressmessage.innerText = "Address must be characters.";
//     } else {
//         addressmessage.innerText = "";
//     }

//     if (isEmpty(password1.value)) {
//         password1Message.innerText = "Please enter your password.";
//     } else if (!checkLength(password1.value, 8, 20)) {
//         password1Message.innerText = "Password must be 8 to 20 characters.";
//     } else if (!isValidPassword(password1.value)) {
//         password1Message.innerText = "Must contain at least a digit, a special character, an uppercase letter, and a lowercase letter.";
//     } else {
//         password1Message.innerText = "";
//     }
//     if (isEmpty(password2.value)) {
//         password2Message.innerText = "Please re-enter your password.";
//     } else if (!checkEqual(password1.value, password2.value)) {
//         password2Message.innerText = "Password does not match.";
//     } else {
//         password2Message.innerText = "";
//     }
// });
