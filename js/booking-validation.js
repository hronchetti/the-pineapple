// <![CDATA[
/*=================================
COLLECTING FORM ELEMENTS
=================================*/
// Form submit button
var submitButton = document.getElementsByName('submit')[0];
// Form elements
var nameInput = document.getElementsByName('name')[0];
var dateInput = document.getElementsByName('event-date')[0];
var phoneInput = document.getElementsByName('phone')[0];
var attendanceInput = document.getElementsByName('attendance')[0];
var emailInput = document.getElementsByName('email')[0];
// Error messages
var nameErrorMessage = document.getElementById('error--name');
var dateErrorMessage = document.getElementById('error--date');
var phoneErrorMessage = document.getElementById('error--phone');
var attendanceErrorMessage = document.getElementById('error--attendance');
var emailErrorMessage = document.getElementById('error--email');
// Error states
var dateErrorState = false;
var attendanceErrorState = false;
/*=================================
VALIDATING WHOLE FORM BEOFRE SUBMISSION
=================================*/
function preSendValidation(){
    if (dateErrorState == true || attendanceErrorState == true || !nameInput.value || !phoneInput.value || !attendanceInput.value || !emailInput.value) {
        // Atleast 1 error
        submitButton.disabled = true;
    } else{
        // No errors
        submitButton.disabled = false;
    }
}
/*=================================
VALIDATING NAME INPUT
=================================*/
function nameInputCheck(){
    if(!nameInput.value){
        // No value is present
        nameErrorMessage.innerHTML = 'You must enter a name';
        nameInput.classList.add('booking-form__field-text--error');
    } else{
        // Value is present
        nameErrorMessage.innerHTML = '';
        nameInput.classList.remove('booking-form__field-text--error');
    }
}
nameInput.addEventListener('change', function(){
    nameInputCheck();
    preSendValidation();
});
/*=================================
VALIDATING DATE INPUT
=================================*/
function dateValidation(){

    var todaysDate = new Date;
    var userDate = new Date(dateInput.value);

    if(userDate <= todaysDate){
        // Date picked by user is in the past
        dateErrorMessage.innerHTML = 'Your event date must be in the future';
        dateInput.classList.add('booking-form__field-text--error');
        dateErrorState = true;
    } else{
        // Date picked is in the future
        dateErrorMessage.innerHTML = '';
        dateInput.classList.remove('booking-form__field-text--error');
        dateErrorState = false;
    }
}
dateInput.addEventListener('change', function(){
    dateValidation();
    preSendValidation();
});
/*=================================
VALIDATING PHONE INPUT
=================================*/
function phoneInputCheck(){
    if(!phoneInput.value){
        // No value is present
        phoneErrorMessage.innerHTML = 'You must enter a contact number';
        phoneInput.classList.add('booking-form__field-text--error');
    } else{
        // Value is present
        phoneErrorMessage.innerHTML = '';
        phoneInput.classList.remove('booking-form__field-text--error');
    }
}
phoneInput.addEventListener('change', function(){
    phoneInputCheck();
    preSendValidation();
});
/*=================================
VALIDATING ATTENDANCE INPUT
=================================*/
function attendanceValidation(){
    if (attendanceInput.value > 100) {
        // Attendance is above 100
        attendanceErrorMessage.innerHTML = 'Attendance must be below 100';
        attendanceInput.classList.add('booking-form__field-text--error');
        attendanceErrorState = true;
    } else{
        // Attendance is below 100
        attendanceErrorMessage.innerHTML = '';
        attendanceInput.classList.remove('booking-form__field-text--error');
        attendanceErrorState = false;
    }
}
function attendanceInputCheck(){
    if(!attendanceInput.value){
        // No value is present
        attendanceErrorMessage.innerHTML = 'You must enter an expected attendance';
        attendanceInput.classList.add('booking-form__field-text--error');
    } else{
        // Value is present
        attendanceErrorMessage.innerHTML = '';
        attendanceInput.classList.remove('booking-form__field-text--error');
        attendanceValidation();
    }
}
attendanceInput.addEventListener('change', function(){
    attendanceInputCheck();
    preSendValidation();
});
/*=================================
VALIDATING EMAIL INPUT
=================================*/
function emailValidation (){

    var emailValidated = emailInput.value;

    var atpos = emailValidated.indexOf("@");
    var dotpos = emailValidated.lastIndexOf(".");

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailValidated.length) {
        emailErrorMessage.innerHTML = 'You must enter a valid email address';
        emailInput.classList.add('booking-form__field-text--error');
    } else{
        emailErrorMessage.innerHTML = '';
        emailInput.classList.remove('booking-form__field-text--error');
    }
}
function emailInputCheck(){
    if(!emailInput.value){
        // No value is present
        emailErrorMessage.innerHTML = 'You must enter an email address';
        emailInput.classList.add('booking-form__field-text--error');
    } else{
        // Value is present
        emailErrorMessage.innerHTML = '';
        emailInput.classList.remove('booking-form__field-text--error');
        emailValidation();
    }
}emailInput.addEventListener('change', function(){
    emailInputCheck();
    preSendValidation();
});
// ]]>