// Funkce pro zobrazení detailu objednávky
function showDetail(orderId) {
  var modal = document.getElementById("orderModal");
  var orderIdElement = document.getElementById("orderId");
  var orderDetails = document.getElementById("orderDetails");

  // AJAX požadavek pro načtení detailů objednávky
  $.ajax({
      url: 'php/get_order_detail.php', // Tento soubor musí načítat detaily objednávky podle ID
      type: 'POST',
      data: { order_id: orderId },
      dataType: 'json',
      success: function(response) {
          console.log(response); // Pro kontrolu, co vrací server

          if (!response.success) {
              alert("Chyba: " + response.message);
              return;
          }

          // Vykreslení produktů na nové řádky s fontem Arial
          let productsHtml = "<ul style='font-family: Arial;'>";
          Object.entries(response.products).forEach(([product, count]) => {
              productsHtml += `<li>${product}: ${count} ks</li>`;
          });
          productsHtml += "</ul>";

          // Zobrazení detailů objednávky
          orderIdElement.textContent = orderId;
          orderDetails.innerHTML = `
              <p><strong>Jméno zákazníka:</strong> ${response.customer_name}</p>
              <p><strong>Telefon:</strong> ${response.customer_phone}</p>
              <p><strong>Email:</strong> ${response.customer_email}</p>
              <p><strong>Datum vytvoření:</strong> ${response.created_at}</p>
              <p><strong>Status:</strong> ${response.status}</p>
              <h4>Produkty:</h4>
              ${productsHtml}
              <p><strong>Cena:</strong> ${response.total} Kč</p>
          `;

          modal.style.display = "flex"; // Zobrazení modálního okna
      },
      error: function(xhr, status, error) {
          console.log(xhr.responseText); // Pro diagnostiku chyb
          alert('Došlo k chybě při načítání detailů objednávky');
      }
  });
}

// Funkce pro zavření modálního okna
function closeModal() {
  var modal = document.getElementById("orderModal");
  modal.style.display = "none";
}

// Kliknutí mimo modální okno ho zavře
window.onclick = function(event) {
  var modal = document.getElementById("orderModal");
  if (event.target == modal) {
      modal.style.display = "none";
  }
}
