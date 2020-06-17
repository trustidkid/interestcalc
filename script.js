let rate=document.querySelector("#rate");
let product=document.querySelector('#product');
const form=document.querySelector('form');
let productError=document.querySelector('#product-error');
let capitalError=document.querySelector('#capital-error');
const calculateButton=document.querySelector('#calculate-btn');

let validateUserInput=()=>{
  let userCapital=document.querySelector('#capital').value;
  let selectedProduct=document.querySelector('#product').value;
  let formValid=form.checkValidity();
  if(formValid){
    calculateInterest();
  }
  else{
    console.log('please enter necessary field');
    console.log(product.value);
    if(userCapital.length===0){
      capitalError.textContent='Please Enter a Valid Capital'
    }
    if (selectedProduct==='Select Product'){
      productError.textContent='Please Select from the Available Product';
    }
  }
  console.log(formValid);
}

const calculateInterest=()=>{
  let userCapital=document.querySelector('#capital').value;
  let selectedProduct=document.querySelector('#product').value;
  let userInterest=document.querySelector('#interest');
  let interest;
  if(selectedProduct==='Piggybank'){
    rate.value='10%';
    interest=0.1;
  }
  if(selectedProduct==='SafeLock'){
    rate.value='15.5%';
    interest=0.155;
  }
  if(selectedProduct==='Targets'){
    rate.value='10%';
    interest=0.1;
  }
  if(selectedProduct==='Flex'){
    rate.value='10%';
    interest=0.1;
  }
  if(selectedProduct==='Flex Dollar'){
    rate.value='6%';
    interest=0.6;
  }
  let totalInterest=userCapital*interest;
  userInterest.textContent=totalInterest;
  
}
calculateButton.addEventListener('click', ()=>{
  validateUserInput();
})