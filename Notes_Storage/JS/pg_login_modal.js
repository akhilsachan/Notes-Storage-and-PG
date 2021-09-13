// Modal opening and closing

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const modal_box = document.getElementById('modal_box');
const loginmodal_1 = document.getElementById('loginbtn1');
const signupmodal_1 = document.getElementById('signupbtn1');
const loginmodal_2 = document.getElementById('loginbtn2');
const signupmodal_2 = document.getElementById('signupbtn2');

signUpButton.addEventListener('click', () => {
	modal_box.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	modal_box.classList.remove("right-panel-active");
});

signupmodal_1.addEventListener('click', () => {
    signUpButton.click();
});


loginmodal_1.addEventListener('click', () => {
    signInButton.click();
});

signupmodal_2.addEventListener('click', () => {
    signUpButton.click();
});

loginmodal_2.addEventListener('click', () => {
    signInButton.click();
});

// Modal opening and closing

// Signup Form Validation

var url_string = window.location.href;
var url = new URL(url_string);
var c = url.searchParams.get("code");
if(c == 1)
{
  loginmodal_1.click();
}
else if(c == 0){
  signupmodal_1.click();
  var ele = document.getElementById('signup_error');
  ele.style.marginTop = '15px';
  ele.style.marginBottom = '5px';
  ele.style.fontSize = '16px';
  ele.style.fontWeight = '450';
  ele.style.color = 'red';
  ele.style.display = 'block';
  ele.innerHTML = "Something went wrong :(";
  ele.style.border = '1px solid red';
  ele.style.borderRadius = "5px";
  ele.style.paddingLeft = "15px";
  ele.style.paddingRight = "15px";
  ele.style.paddingTop = "8px";
  ele.style.paddingBottom = "8px";
}
else if(c == 3)
{
  loginmodal_1.click();
  var ele = document.getElementById('login_error');
  ele.style.marginTop = '15px';
  ele.style.marginBottom = '5px';
  ele.style.fontSize = '16px';
  ele.style.fontWeight = '450';
  ele.style.color = 'red';
  ele.style.display = 'block';
  ele.innerHTML = "Incorrect login credentials";
  ele.style.border = '1px solid red';
  ele.style.borderRadius = "5px";
  ele.style.paddingLeft = "15px";
  ele.style.paddingRight = "15px";
  ele.style.paddingTop = "8px";
  ele.style.paddingBottom = "8px";
}
else if(c == "signup"){
  signupmodal_1.click();
}


var emailReg = /\S+@\S+\.\S+/;
var passReg = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

var hold=0;

function clearErrors(){
  errors = document.getElementsByClassName('form_error');
  for(let item of errors)
  {
      item.innerHTML = "";
  }
}

function seterror(id, error){
  element = document.getElementById(id);
  element.innerHTML = error;
}

function setsuccess(id, success){
  element = document.getElementById(id);
  element.getElementsByClassName('form_success')[0].innerHTML = success;
}

function validateForm(){

  // var returnval = true;
  clearErrors();
  
  // Akhil yaha per agar koi top fields mein wrong details bhaerga or phir baad mein 
  // agar usne sahi details bhar di to hold ki value 1 ho jayegi or form error dikha ker submit ho jayega..
  // to isse bachne ke liye har fields ke liye ek seperate value hold karo then fir last mein un sabki values
  // ko check karo or fir true ya false return karao..... to sahi rahega....!!

  var name = document.forms['signupForm']["name"].value;
  if (name.length==""){
      seterror("span_name", "*This field is required");
      hold=0;
      // returnval = false;
  }
  else if(name.length>25){
    seterror("span_name", "*Name length should be under 25");
    hold=0;
    // returnval = false;
  }
  else{
    hold = 1;
  }

  var phone = document.forms['signupForm']["Mobile_no"].value;
  if (phone.toString().length == 0){
    seterror("span_mob", "*This field is required");
    hold=0;
    // returnval = false;
}
  else if (phone.length != 10){
      seterror("span_mob", "*Mobile number should be of 10 digits!");
      hold=0;
      // returnval = false;
  }
  else{
    hold=1;
  }

  var email = document.forms['signupForm']["email"].value;
  if (email.length==""){
    seterror("span_email", "*This field is required");
    hold=0;
    // returnval = false;
}
  else if (email.length>50){
      seterror("span_email", "*Email is too long");
      hold=0;
      // returnval = false;
  }
  else if(emailReg.test(email) != true){
    seterror("span_email", "*Email is not valid");
    hold=0;
    // returnval = false;
  }
  else{
    hold=1;
  }

  var password = document.forms['signupForm']["password"].value;
  if (password.length== 0){
    seterror("span_pass", "*This field is required");
    hold=0;
    // returnval = false;
}
  else if (password.length < 8){
      seterror("span_pass", "*Password must contain atleast 8 characters");
      hold=0;
      // returnval = false;
  }
  else if(passReg.test(password) != true){
    seterror("span_pass", "*Please choose Strong Password");
    hold=0;
    // returnval = false;
  }
  else{
    hold=1;
  }


  var cpassword = document.forms['signupForm']["confirm_password"].value;
  if (cpassword.length== 0){
    seterror("span_cpass", "*This field is required");
    hold=0;
    // returnval = false;
}
  else if (cpassword != password){      
      seterror("span_cpass", "*Password and Confirm password should match!");
      hold=0;
      // returnval = false;
  }
  else{
    hold=1;
  }
// alert(hold)
  if(hold == 1)
  {
    return true;
  }
  else{
    return false;
  }
  // return returnval;
}

