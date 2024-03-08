/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  



// function expandedCard(card){
//     card.classList.add('expanded');
// }
// function shrinkCard(card){
//     card.classList.remove('expanded');
// }
// Function to update the progress bar based on the percentage completed
function updateProgress(percentage) {
  var progressBar = document.getElementById("progress");
  progressBar.style.width = percentage + "%";
} 

// Function to increase progress by 25% when submission button is clicked
function increaseProgress() {
  var progressBar = document.getElementById("progress");
  var currentWidth = parseFloat(progressBar.style.width) || 0;
  var newWidth = Math.min(currentWidth + 25, 100); // Ensure progress doesn't exceed 100%
  updateProgress(newWidth);

  // Change progress bar color based on current width
  if (newWidth <= 25) {
    progressBar.style.backgroundColor = "red"; // Change to red when progress is less than or equal to 25%
  } else if (newWidth <= 50) {
    progressBar.style.backgroundColor = "yellow"; // Change to yellow when progress is less than or equal to 50%
  } else if (newWidth <= 75) {
    progressBar.style.backgroundColor = "orange"; // Change to orange when progress is less than or equal to 75%
  } else {
    progressBar.style.backgroundColor = "green"; // Change to green when progress is greater than 75%
  }
}

// Add event listener to the submission button in the form
var submitButton = document.getElementById("submit-button");
submitButton.addEventListener("click", function(event) {
  // Increase progress when the form is submitted
  increaseProgress();
  console.log("hello");
});



