function validation() {
    const firstName = document.getElementById('fname');
        const lastName=document.getElementById('lname');
        const city=document.getElementById('city');
        const state=document.getElementById('state');
        const pwd=document.getElementById('pwd');
        const cpwd=document.getElementById('cpwd');
        const dob=document.getElementById('dob');
        const mobile=document.getElementById('tel');
        const descript=document.getElementById('dec');
        const email=document.getElementById('mail');
    alert('firstName');
  
  
// window.onload =function select() {
// var stateSel = document.getElementById("state");
// var citySel = document.getElementById("city");
// alert("stateSel");
// for (var x in stateObject) {
// stateSel.options[stateSel.options.length] = new Option(x, x);
// }
// stateSel.onchange = function sub() {
// //empty  dropdowns
// citySel.length = 1;
// //display correct values
// for (var y in stateObject[this.value]) {
//   citySel.options[citySel.options.length] = new Option(y, y);
// }
// }
// }
/* var firstName = document.myForm.fname.value;

var lastName = document.myForm.lname.value;
var city = document.myForm.city.value;
var state = document.myForm.state.value;  
var pwd = document.myForm.pwd.value;
var cpwd = document.myForm.cpwd.value;

var dob = document.myForm.dob.value;
var age = document.myForm.age.value;
var mobile = document.myForm.tel.value;
var descript = document.myForm.des.value;
var email = document.myForm.mail.value;*/

   /* const form  = document.getElementsByTagName('form')[0];
let firstName = document.forms["myForm"]["fname"].value;

let lastName = document.forms["myForm"]["lname"].value;
let city = document.forms["myForm"]["city"].value;
let state = document.forms["myForm"]["state"].value;  
let pwd = document.forms["myForm"]["pwd"].value;
let cpwd = document.forms["myForm"]["cpwd"].value;

let dob = document.forms["myForm"]["dob"].value;
let age = document.forms["myForm"]["age"].value;
let mobile = document.forms["myForm"]["tel"].value;
let descript = document.forms["myForm"]["des"].value;
let email = document.forms["myForm"]["mail"].value;
// Defining a function to display error message
function printError(elemId, hintMsg) {
document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
/*Retrieving the values of form elements 
var name = document.contactForm.name.value;
var email = document.contactForm.email.value;
var mobile = document.contactForm.mobile.value;
var country = document.contactForm.country.value;
var gender = document.contactForm.gender.value;
var hobbies = [];
var checkboxes = document.getElementsByName("hobbies[]");
for(var i=0; i < checkboxes.length; i++) {
    if(checkboxes[i].checked) {
        // Populate hobbies array with selected values
        hobbies.push(checkboxes[i].value);
    }
}*/

// Defining error variables with a default value
/* var fErr = lErr=mErr=cErr =pErr= ctErr=stErr=dErr= desErr=telErr = pcErr = true;
var fErr = lErr=true;*/
// Validate name
if(firstName == "") {
 document.getElementById('fErr').innerHTML= "<span style='color:red'>Please enter your name</span>"
    //alert("fErr", "Please enter your name");
} else {
    var regex = /^[a-zA-Z\s]+$/;                
    if(regex.test(fname) === false) {
        document.getElementById('fErr').innerHTML= "<span style='color:red'>Please enter valid name</span>"
        //printError("fErr", "Please enter a valid name");
      //  alert("Please enter a valid name");
    } else {
        printError("fErr", "");
        nameErr = false;
    }
}
if(lastName == "") {
   // printError("lErr", "Please enter your name");
    document.getElementById('lErr').innerHTML= "<span style='color:red'>Please enter your last name</span>"
} else {
    var regex = /^[a-zA-Z\s]+$/;                
    if(regex.test(lname) === false) {
       // printError("lErr", "Please enter a valid name");
       document.getElementById('lErr').innerHTML= "<span style='color:red'>Please enter valid name</span>"

    } else {
        printError("mErr", "");
        nameErr = false;
    }
}
//validate password
if(pwd == "") {
   // printError("lErr", "Please enter your name");
    document.getElementById('pErr').innerHTML= "<span style='color:red'>Please enter password</span>"
} else {
    var regex = /^[a-zA-Z\s]+$/;                
    if((regex.test(pwd) === false)||(regex.length(pwd) < 8)) {
       // printError("lErr", "Please enter a valid name");
       document.getElementById('pErr').innerHTML= "<span style='color:red'>Please enter password with minimum 8 character with symbol or special characters!</span>"

    } else {
        printError("pErr", "");
        nameErr = false;
    }
}
//validate confirm password
if(cpwd == "") {
   // printError("lErr", "Please enter your name");
    document.getElementById('pErr').innerHTML= "<span style='color:red'>Please enter one more time the same password</span>"
} else {
               
    if(cpwd != pwd) {
       // printError("lErr", "Please enter a valid name");
       document.getElementById('cErr').innerHTML= "<span style='color:red'>password does not match!</span>"

    } else {
        printError("cErr", "");
        nameErr = false;
    }
}
// Validate email address
if(email == "") {
    //printError("mErr", "Please enter your email address");
    document.getElementById('mErr').innerHTML= "<span style='color:red'>Please enter your mail!</span>"

} else {
    // Regular expression for basic email validation
    var regex = /^\S+@\S+\.\S+$/;
    if(regex.test(email) === false) {
       // printError("mErr", "Please enter a valid email address");
       document.getElementById('mErr').innerHTML= "<span style='color:red'>Please enter your mail!</span>"

        alert("helo")
    } else{
        printError("mErr", "");
        emailErr = false;
    }
}

// Validate mobile number
if(mobile == "") {
    //printError("telErr", "Please enter your mobile number");
    document.getElementById('telErr').innerHTML= "<span style='color:red'>Please enter your mobile!</span>"

} else {
    var regex = /^[1-9]\d{9}$/;
    if(regex.test(mobile) === false) {
        //printError("telErr", "Please enter a valid 10 digit mobile number");
        document.getElementById('telErr').innerHTML= "<span style='color:red'>Please enter a valid 10 digit mobile number!</span>"

    } else{
        printError("telErr", "");
        mobileErr = false;
    }
}

// Validate country
if(state == "choose") {
    //printError("stErr", "Please select your state");
    document.getElementById('stErr').innerHTML= "<span style='color:red'>Please select your state!</span>"

} else {
    printError("stErr", "");
    countryErr = false;
}
if(city == "choose") {
    //printError("stErr", "Please select your state");
    document.getElementById('ctErr').innerHTML= "<span style='color:red'>Please select your city!</span>"

} else {
    printError("ctErr", "");
    countryErr = false;
}
if(dob == "") {
    //printError("stErr", "Please select your state");
    document.getElementById('ctErr').innerHTML= "<span style='color:red'>Please select your birth day!</span>"

} else {
    printError("ctErr", "");
    countryErr = false;
}
if(descript == "") {
    //printError("stErr", "Please select your state");
    document.getElementById('desErr').innerHTML= "<span style='color:red'>Please add description!</span>"

} else {
    printError("ctErr", "");
    countryErr = false;
}
/* Validate gender
if(gender == "") {
    printError("genderErr", "Please select your gender");
} else {
    printError("genderErr", "");
    genderErr = false;
}*/

// Prevent the form from being submitted if there are any errors
if((fErr || lErr || mErr|| cErr || pErr||ctErr||stErr||dErr||desErr||telErr) == true) {
   return false;
} 
else {
    /* Creating a string from input data for preview
    var dataPreview = "You've entered the following details: \n" +
                      "Full Name: " + fname + lname+"\n" +
                      "Email Address: " + email + "\n" +
                      "Mobile Number: " + mobile + "\n" +
                      "State: " + state + "\n" +
                      "City: " + city + "\n" +
                      "dob: " + dob + "\n" 


                   
    
    // Display input data in a dialog box before submitting the form
    alert(dataPreview);*/
    window.alert("success");
}
};


