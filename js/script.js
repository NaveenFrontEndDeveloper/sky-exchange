
// Function to handle link clicks
function handleLinkClick(event) {
  event.preventDefault(); // Prevent the default link behavior

  var width = 600;
  var height = 600;
  var left = (window.innerWidth - width) / 0;
  var top = (window.innerHeight - height) / 0;

// Open the new window
  var newWindow = window.open('', '', 'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top);


  // Get the ID of the clicked link
  var linkId = event.target.id;

  // Define the routes for each link
  var routes = {
    "policy-footer-link": "privacy.php",
    'terms-footer-link': 'terms.php',
    'rules-footer-link': 'rules.php',
    'kyc-footer-link': 'kyc.php',
    'reponsible-footer-link': 'responsible.php',
    'about-footer-link': 'about.php',
    'exclusion-footer-link': 'self-exclusion.php',
    'underage-footer-link': 'underage.php'
    // Add routes for other links here if needed
  };

  // Check if the link ID exists in the routes object
  if (routes.hasOwnProperty(linkId)) {
    // Redirect to the corresponding URL
    newWindow.location.href = routes[linkId];
  }
}

// Add click event listeners to the links
var links = document.querySelectorAll(".footer-links a");
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", handleLinkClick);
}
