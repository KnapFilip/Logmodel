$(document).ready(function() {
    // Pro změnu statusu objednávky
    $('.status-select').change(function() {
        var status = $(this).val();
        var orderId = $(this).data('order-id');

        $.ajax({
            url: 'php/update_status.php', // Cesta k souboru pro aktualizaci statusu
            type: 'POST',
            data: {
                order_id: orderId,
                status: status
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert('Status objednávky byl úspěšně aktualizován!');
                } else {
                    alert('Chyba: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                alert('Došlo k chybě při aktualizaci statusu.');
            }
        });
    });

    // Pro zobrazení detailu objednávky
function showDetail(orderId) {
    $.ajax({
        url: 'php/get_order_detail.php',  // Cesta k souboru
        type: 'POST',
        data: {
            order_id: orderId
        },
        dataType: 'json',
        success: function(response) {
            console.log(response); // Pro diagnostiku, co server vrací
            if (response.success) {
                // Aktualizuj obsah modálního okna
                var productsHtml = '';
                response.products.forEach(function(product) {
                    productsHtml += '<p>' + product + '</p>'; // Zobrazíme každý produkt
                });

                // Naplníme modal detaily
                $('#orderId').text(orderId);
                $('#orderDetails').html(
                    '<p>Zákazník: ' + response.customer_name + '</p>' +
                    '<p>Telefon: ' + response.customer_phone + '</p>' +
                    '<p>Email: ' + response.customer_email + '</p>' +
                    '<p>Datum vytvoření: ' + response.created_at + '</p>' +
                    '<p>Stav: ' + response.status + '</p>' +
                    '<p>Cena: ' + response.total + ' Kč</p>' +
                    '<h4>Seznam produktů:</h4>' + productsHtml
                );

                // Zobrazit modální okno
                $('#orderModal').show();
            } else {
                alert('Došlo k chybě: ' + response.message);
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText); // Pro diagnostiku chyb
            alert('Došlo k chybě při načítání detailů objednávky.');
        }
    });
}

});

