
    // Define the search function in the global scope
    const fadeIn = (element) => {
        element.style.display = 'block'; // Show the card
        element.style.opacity = 0; // Set initial opacity to 0
    
        let opacity = 0;
        const duration = 500; // Adjust the duration as needed
        const interval = 20; // Interval for the animation
        const increment = interval / duration;
    
        const animate = () => {
          opacity += increment;
          element.style.opacity = opacity;
    
          if (opacity < 1) {
            requestAnimationFrame(animate);
          }
        };
    
        requestAnimationFrame(animate);
      };
    
      // Function to fade out a card
      const fadeOut = (element) => {
        let opacity = 1;
        const duration = 500; // Adjust the duration as needed
        const interval = 20; // Interval for the animation
        const increment = interval / duration;
    
        const animate = () => {
          opacity -= increment;
          element.style.opacity = opacity;
    
          if (opacity > 0) {
            requestAnimationFrame(animate);
          } else {
            element.style.display = 'none'; // Hide the card when the animation completes
          }
        };
    
        requestAnimationFrame(animate);
      };
    
      const search = () => {
        const searchValue = document.querySelector(".searchInput").value.trim().toLowerCase();
        console.log("Search Value:", searchValue);
    
        const cards = document.querySelectorAll('.card');
    
        for (const card of cards) {
          const headingText = card.querySelector('.infoheading h5').textContent.trim().toLowerCase();
          console.log("Heading Text:", headingText);
    
          if (headingText.includes(searchValue)) {
            console.log('FOUND IT');
            fadeIn(card); // Fade in the card if it matches the search
          } else {
            console.log('NOT FOUND');
            fadeOut(card); // Fade out the card if it doesn't match the search
          }
        }
      };
  
  document.addEventListener('DOMContentLoaded', () => {
    const searchButton = document.getElementById('searchButton');
    searchButton.addEventListener('click', search);
  
    // Your other code inside the DOMContentLoaded event listener
    // ...
   
  });
  
  // Your other functions and code in the global scope
  // ...
  const goToCreate = () => {
    location.href = "./create.php";
  };
    

