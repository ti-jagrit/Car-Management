const submit = document.getElementById("submit");

const checkLength = (str, min, max) => str.length <= max && str.length >= min;
const alphabetOnly = (str) => {
  let pattern = /^[a-zA-Z]+$/;
  return pattern.test(str);
};
const numberOnly = (str) => {
  let pattern = /^[0-9]+$/;
  return pattern.test(str);
};
const isValidaddress = (str) => {
  var pattern = /^[a-zA-Z]+-[0-9]+$/;
  return pattern.test(str);
};

submit.addEventListener("click", (e) => {

  // extracting DOM objects
  // const model = document.getElementById("model");
  const price = document.getElementById("price");
  const cc = document.getElementById("cc");
  const mileage = document.getElementById("mileage");
  const distance = document.getElementById("distance");
  const address = document.getElementById("address");
 

  //error message container
 
  const priceMessage = document.getElementById("price-message");
  const ccMessage = document.getElementById("cc-message");
  const mileageMessage = document.getElementById("mileage-message");
  const distanceMessage = document.getElementById("distance-message");
  const addressMessage = document.getElementById("address-message");
 
  let isValid = true;
  //for model
 

  //for price
 if (!numberOnly(price.value)) {
    priceMessage.innerText = "Price must be Numbers";
    isValid = false;
  } else {
    priceMessage.innerText = "";
  }

  //for cc
if (!numberOnly(cc.value)) {
    ccMessage.innerText = "CC must be Numbers";
    isValid = false;
  } else {
    ccMessage.innerText = "";
  }

  //for mileage
 if (!numberOnly(mileage.value)) {
    mileageMessage.innerText = "Mileage should be in Number";
    isValid = false;
  } else {
    mileageMessage.innerText = "";
  }

  //distance
  if (!numberOnly(distance.value)) {
    distanceMessage.innerText = "Distance should be in Number";
    isValid = false;
  } else {
    distanceMessage.innerText = "";
  }

  //for address
  if (!isValidaddress(address.value)){
    addressMessage.innerText = "The address should be in the format Kathmandu-15.";
    isValid = false;
  } else {
    addressMessage.innerText = "";
  }


  if (!isValid) {
    e.preventDefault();
}
});

