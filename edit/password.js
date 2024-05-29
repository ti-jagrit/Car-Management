const submit = document.getElementById("update_pass");
const isEmpty = (str) => str.length === 0;
const checkLength = (str, min, max) => str.length <= max && str.length >= min;
function checkEqual(str1, str2) {
    return str1 === str2;
}
const isValidPassword = (str) => {
    var pattern = /^(?=.*\d)(?=.*[@_])(?=.*[A-Z])(?=.*[a-z])[a-zA-Z\d@_]+$/;
    return pattern.test(str);
};
submit.addEventListener("click", (e) => {
    const password1 = document.getElementById("newPassword");
    const password2 = document.getElementById("confirmPassword");
    const password1Message = document.getElementById("password1-message");
    const password2Message = document.getElementById("password2-message");
let isValid = true;
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