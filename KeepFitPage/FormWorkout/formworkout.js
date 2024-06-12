function validateForm(){
    document.getElementById("Fitness Details").addEventListener("submit", function (event) {
        var name = document.getElementById("name").value;
        var age = document.getElementById("age").value;
    
        // Simple validation
        if (name.trim() === "") {
            alert("Name must not be empty.");
            event.preventDefault(); // Prevent form submission
        } 
         else if (age <= 0) {
            alert("Age must be a positive number.");
            event.preventDefault();
        }
    });

}
