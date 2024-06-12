
        function validateForm() {
            var cardName = document.getElementById("cardname").value;
            var cardNumber = document.getElementById("cardnumber").value;
            var expirationMonth = document.getElementById("expirationmonth").value;
            var expirationYear = document.getElementById("expirationyear").value;
            var cvc = document.getElementById("cvc").value;
        

            // Regular expressions for validation
            var cardNumberPattern = /^\d{16}$/;
            var monthPattern = /^(0[1-9]|1[0-2])$/;
            var yearPattern = /^\d{4}$/;
            var cvcPattern = /^\d{3,4}$/;

            // Perform validation
            if (!cardName || !cardNumberPattern.test(cardNumber) || !monthPattern.test(expirationMonth) ||
                !yearPattern.test(expirationYear) || !cvcPattern.test(cvc)) {
                alert("Fill the required fields.");
                return false; // Prevent form submission
            }

            var currentYear = new Date().getFullYear();
            var currentMonth = new Date().getMonth() + 1; // Month is zero-based

            var cardYear = parseInt(expirationYear);
            var cardMonth = parseInt(expirationMonth);

            if (cardYear < currentYear || (cardYear === currentYear && cardMonth < currentMonth)) {
                alert("Unvalid Card!");
                return false; // Prevent form submission
            }

            // If everything is valid, you can perform additional actions or submit the form
            return true;
        }
 
  





