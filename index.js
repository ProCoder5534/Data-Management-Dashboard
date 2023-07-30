
    // Define the search function in the global scope
    const search = () => {
        const searchValue = document.querySelector(".searchInput").value.trim().toLowerCase();
        console.log("Search Value:", searchValue);
    
        const cards = document.querySelectorAll('.card');
    
        for (const card of cards) {
          const headingText = card.querySelector('.infoheading h5').textContent.trim().toLowerCase();
          console.log("Heading Text:", headingText);
    
          if (headingText.includes(searchValue)) {
            console.log('FOUND IT');
            card.classList.remove('hidden'); // Show the card if it matches the search
          } else {
            console.log('NOT FOUND');
            card.classList.add('hidden'); // Hide the card if it doesn't match the search
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
    

