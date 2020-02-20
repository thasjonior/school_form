<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/sf.css" >
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" action="/action_page.php">
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Student Particulars:
  <div class="row">
    <div class="col">
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    </div>
    <div class="col">
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-4">
    <input type="date" placeholder="Birth Date">
    </div>
    <div class="col-md-4">
    <input type="number" placeholder="Age">
    </div>
    <div class="col-md-4">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-primary">
      <input type="radio" name="options" id="option2"> Male
    </label>
    <label class="btn btn-primary">
      <input type="radio" name="options" id="option3"> Female
    </label>
    </div>
    </div>
  </div>
  <div class="row address">
    <div class="col-md-4">
    <input type="tel" placeholder="Phone number">
    </div>
    <div class="col-md-4">
    <input type="text" placeholder="Physical Address">
    </div>
    <div class="col-md-4">
    <input type="text" placeholder="Postal Address">
    </div>
  </div>
  </div>

  <div class="tab">Parents Particular:
    <div class="row">
    <div class="col-md-6">
    <input type="text" placeholder="Mother's Name">
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Address">
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
    <input type="text" placeholder="Phone Number">
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Signature">
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <input type="text" placeholder="Father's Name">
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Address">
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
    <input type="text" placeholder="Phone Number">
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Signature">
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <input type="text" placeholder="Guardian's Name">
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Address">
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
    <input type="text" placeholder="Phone Number">
    </div>
    <div class="col-md-6">
    <input type="text" placeholder="Signature">
    </div>
    </div>
  </div>
  <div class="tab">Academics:
   <div class="row">
     <div class="col-md-6">
       <input type="text" placeholder="School Name">
     </div>
     <div class="col-md-6">
       <input type="text" placeholder="School Address">
     </div>
   </div>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>