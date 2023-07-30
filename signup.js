// script.js

window.addEventListener('DOMContentLoaded', function() {
    const signupForm = document.getElementById('signupForm');
  
    signupForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
  
      // Get form values
      const nom = document.getElementById('nom').value;
      const prenom = document.getElementById('prenom').value;
      const telephone = document.getElementById('telephone').value;
      const bacAnnee = document.getElementById('bac-annee').value;
      const option = document.getElementById('option').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
  
      // Create an object with the form data
      const formData = {
        nom,
        prenom,
        telephone,
        bacAnnee,
        option,
        password,
        confirmPassword
      };
  
      // Convert the object to JSON string
      const jsonData = JSON.stringify(formData);
  
      // Save the JSON data to a file using the telephone number as the filename
      saveDataToFile(jsonData, `${telephone}.json`);
  
      // Redirect to login.html
      window.location.href = 'login.html';
    });
  
    function saveDataToFile(data, filename) {
      const blob = new Blob([data], { type: 'application/json' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = filename;
      a.click();
      URL.revokeObjectURL(url);
    }
  });
  