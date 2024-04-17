let currentStock = 0;
    
    function addStock() {
      var stockNumber = document.getElementById('stockNumber').value;
      var quantity = parseInt(document.getElementById('quantity').value);
      currentStock += quantity;
      document.getElementById('displayedStock').textContent = currentStock;
      
      document.getElementById('stockForm').reset();
      document.getElementById('currentStock').style.display = 'block';
      document.getElementById('takeOutButton').style.display = 'block';
    }
    
    function takeOutStock() {
      var takeOutQuantity = parseInt(prompt("Enter quantity to take out:"));
      if (isNaN(takeOutQuantity) || takeOutQuantity > currentStock) {
        alert("Invalid quantity!");
      } else {
        currentStock -= takeOutQuantity;
        document.getElementById('displayedStock').textContent = currentStock;
      }
    }