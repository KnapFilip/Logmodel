 // Funkce pro třídění objednávek podle stavu (dokončeno, v přípravě, čekající)
 document.querySelectorAll('.status').forEach(function(element) {
    element.addEventListener('click', function() {
      var status = this.getAttribute('data-status');
      var rows = document.querySelectorAll('#orderTable tbody tr');
      
      rows.forEach(function(row) {
        var rowStatus = row.querySelector('.status').getAttribute('data-status');
        if (rowStatus !== status) {
          row.style.display = 'none';
        } else {
          row.style.display = '';
        }
      });
    });
  });