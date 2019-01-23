


// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactform').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  
// Get values
  var name = getInputVal('name');
  //var company = getInputVal('company');
  var email = getInputVal('email');
 // var phone = getInputVal('phone');
  var message = getInputVal('Comment');

  // Save message
  saveMessage(name, email, message);

  // Show alert
  //document.querySelector('.alert').style.display = 'block';
  window.alert("Thanks for Comment !");

  // Hide alert after 3 seconds
  setTimeout(function(){
    //document.querySelector('.alert').style.display = 'none';
    //window.alert("time out");
  },3000);

 
 // Clear form

  document.getElementById('contactform').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, email,  message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
   // company:company,
    email:email,
   // phone:phone,
    message:message
  });
}

