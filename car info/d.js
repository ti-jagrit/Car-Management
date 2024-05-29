
// const submit = document.getElementById("submit");
// // Get the necessary elements
// // const uploadForm = document.getElementById('uploadForm');
// // const imageUpload = document.getElementById('imageUpload');
// // const cancelButton = document.getElementById('cancelButton');
// // const previewContainer = document.getElementById('previewContainer');
// // const uploadedImagesContainer = document.getElementById('uploadedImagesContainer');

// const isEmpty = (str) => str.length === 0;
// const checkLength = (str, min, max) => str.length <= max && str.length >= min;
// const alphabetOnly = (str) => {
//   let pattern = /^[a-zA-Z]+$/;
//   return pattern.test(str);
// };
// const numberOnly = (str) => {
//   let pattern = /^[0-9]+$/;
//   return pattern.test(str);
// };
// const isValidaddress = (str) => {
//   var pattern = /^[a-zA-Z]+-[0-9]+$/;
//   return pattern.test(str);
// };

// submit.addEventListener("click", (e) => {
//   e.preventDefault();

//   // extracting DOM objects
//   const model = document.getElementById("model");
//   const price = document.getElementById("price");
//   const cc = document.getElementById("cc");
//   const mileage = document.getElementById("mileage");
//   const distance = document.getElementById("distance");
//   const address = document.getElementById("address");
//   const phone = document.getElementById("phone");

//   //error message container
//   const modelMessage = document.getElementById("model-message");
//   const priceMessage = document.getElementById("price-message");
//   const ccMessage = document.getElementById("cc-message");
//   const mileageMessage = document.getElementById("mileage-message");
//   const distanceMessage = document.getElementById("distance-message");
//   const addressMessage = document.getElementById("address-message");
//   const phoneMessage = document.getElementById("phone-message");

//   //for model
//   if (isEmpty(model.value)) {
//     modelMessage.innerText = "Please enter your Model Number.";
//   } else {
//     modelMessage.innerText = "";
//   }

//   //for price
//   if (isEmpty(price.value)) {
//     priceMessage.innerText = "Please enter your price";
//   } else if (!numberOnly(price.value)) {
//     priceMessage.innerText = "Price must be Numbers";
//   } else {
//     priceMessage.innerText = "";
//   }

//   //for cc
//   if (isEmpty(cc.value)) {
//     ccMessage.innerText = "Please enter cc price";
//   } else if (!numberOnly(cc.value)) {
//     ccMessage.innerText = "CC must be Numbers";
//   } else {
//     ccMessage.innerText = "";
//   }

//   //for mileage
//   if (isEmpty(mileage.value)) {
//     mileageMessage.innerText = "Please enter your Mileage";
//   } else if (!numberOnly(mileage.value)) {
//     mileageMessage.innerText = "Mileage should be in Number";
//   } else {
//     mileageMessage.innerText = "";
//   }

//   //distance
//   if (isEmpty(distance.value)) {
//     distanceMessage.innerText = "Please enter the distance";
//   } else if (!numberOnly(distance.value)) {
//     distanceMessage.innerText = "Distance should be in Number";
//   } else {
//     distanceMessage.innerText = "";
//   }

//   //for address
//   if (isEmpty(address.value)) {
//     addressMessage.innerText = "Please enter your Address";
//   // } else if (!numberOnly(address.value)) {
//   //   addressMessage.innerText = "Address should contain Number";
//   // } else if (!alphabetOnly(address.value)) {
//   //   addressMessage.innerText = "Address should be alphabets";
//   } else if (!isValidaddress(address.value)){
// addressMessage.innerText = "The address should be in the formatKathmandu-15.";
//   } else {
//     addressMessage.innerText = "";
//   }

//   //for phone
//   if (isEmpty(phone.value)) {
//     phoneMessage.innerText = "Please enter your phone";
//   } else if (!numberOnly(phone.value)) {
//     phoneMessage.innerText = "Phone should be in Numbers";
//   } else {
//     phoneMessage.innerText = "";
//   }
// });


const submit = document.getElementById("submit");
// Get the necessary elements
// const uploadForm = document.getElementById('uploadForm');
// const imageUpload = document.getElementById('imageUpload');
// const cancelButton = document.getElementById('cancelButton');
// const previewContainer = document.getElementById('previewContainer');
// const uploadedImagesContainer = document.getElementById('uploadedImagesContainer');

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
const isValidaddress = (str) => {
  var pattern = /^[a-zA-Z]+-[0-9]+$/;
  return pattern.test(str);
};

submit.addEventListener("click", (e) => {
  // extracting DOM objects
  const model = document.getElementById("model");
  const price = document.getElementById("price");
  const cc = document.getElementById("cc");
  const mileage = document.getElementById("mileage");
  const distance = document.getElementById("distance");
  const address = document.getElementById("address");
  const phone = document.getElementById("phone");

  //error message container
  const modelMessage = document.getElementById("model-message");
  const priceMessage = document.getElementById("price-message");
  const ccMessage = document.getElementById("cc-message");
  const mileageMessage = document.getElementById("mileage-message");
  const distanceMessage = document.getElementById("distance-message");
  const addressMessage = document.getElementById("address-message");
  const phoneMessage = document.getElementById("phone-message");

  let isValid = true;
  //for model
  if (isEmpty(model.value)) {
    modelMessage.innerText = "Please enter your Model Number.";
    isValid = false;
  } else {
    modelMessage.innerText = "";
  }

  //for price
  if (isEmpty(price.value)) {
    priceMessage.innerText = "Please enter your price";
    isValid = false;
  } else if (!numberOnly(price.value)) {
    priceMessage.innerText = "Price must be Numbers";
    isValid = false;
  } else {
    priceMessage.innerText = "";
  }

  //for cc
  if (isEmpty(cc.value)) {
    ccMessage.innerText = "Please enter cc price";
    isValid = false;
  } else if (!numberOnly(cc.value)) {
    ccMessage.innerText = "CC must be Numbers";
    isValid = false;
  } else {
    ccMessage.innerText = "";
  }

  //for mileage
  if (isEmpty(mileage.value)) {
    mileageMessage.innerText = "Please enter your Mileage";
    isValid = false;
  } else if (!numberOnly(mileage.value)) {
    mileageMessage.innerText = "Mileage should be in Number";
    isValid = false;
  } else {
    mileageMessage.innerText = "";
  }

  //distance
  if (isEmpty(distance.value)) {
    distanceMessage.innerText = "Please enter the distance";
    isValid = false;
  } else if (!numberOnly(distance.value)) {
    distanceMessage.innerText = "Distance should be in Number";
    isValid = false;
  } else {
    distanceMessage.innerText = "";
  }

  //for address
  if (isEmpty(address.value)) {
    addressMessage.innerText = "Please enter your Address";
  // } else if (!numberOnly(address.value)) {
  //   addressMessage.innerText = "Address should contain Number";
  // } else if (!alphabetOnly(address.value)) {
  //   addressMessage.innerText = "Address should be alphabets";
  isValid = false;  
} else if (!isValidaddress(address.value)){
    addressMessage.innerText = "The address should be in the format Kathmandu-15.";
    isValid = false;
  } else {
    addressMessage.innerText = "";
  }

  //for phone
  if (isEmpty(phone.value)) {
    phoneMessage.innerText = "Please enter your phone";
    isValid = false;
  } else if (!numberOnly(phone.value)) {
    phoneMessage.innerText = "Phone should be in Numbers";
    isValid = false;
  } else if (!checkLength(phone.value, 10, 10)) {
    phoneMessage.innerText = "  Phone must be 10 digits.";
    isValid = false;
  } else {
    phoneMessage.innerText = "";
  }
  if (!isValid) {
    e.preventDefault();
}
});

