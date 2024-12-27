// import _ from "https://code.jquery.com/jquery-3.7.1.min.js";
// // jQuery
 

// // Bootstrap 5
// import _ from "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js";

// // Bootstrap 4 bundle
// import _ from "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js";



 

      function setMainHeight() {
        const header = document.querySelector("header");
        const main = document.getElementById("main");

        // Get the header's height
        const headerHeight = header.offsetHeight;

        // Calculate the height for main
        const mainHeight = `calc(100vh - ${headerHeight}px + 2rem )`;

        // Set the height of main
        main.style.height = mainHeight;
      }

      // Run the function on page load
      window.addEventListener("load", setMainHeight);
      // Optionally, also run it on window resize
      window.addEventListener("resize", setMainHeight);
  
 
 