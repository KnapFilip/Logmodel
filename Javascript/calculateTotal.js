// Funkce pro výpočet mezisoučtu pro Smrk
function calculateSubtotalSmrk() {
    const prices = {
        "0101A": 160, "0102A": 210, "0103A": 160, "0104A": 210, "0105A": 160,
        "0106A": 210, "0107A": 160, "0108A": 210, "0109A": 160, "0110A": 210,
        "0111A": 160, "0112A": 210, "0113A": 210, "0114A": 0, "0101B": 160,
        "0102B": 210, "0103B": 160, "0104B": 210, "0105B": 160, "0106B": 210,
        "0107B": 160, "0108B": 210, "0109B": 160, "0110B": 210, "0111B": 160,
        "0112B": 210, "0113B": 210, "0114B": 0
    };
    let subtotal = 0;
    for (let id in prices) {
        const quantity = document.getElementById(id).value;
        subtotal += Number(quantity) * prices[id];
    }
    document.getElementById("subtotal_smrk").value = subtotal.toFixed(1) + " Kč";
}

// Funkce pro výpočet mezisoučtu pro Bor
function calculateSubtotalBor() {
    const prices = {
        "0201A": 160, "0202A": 210, "0203A": 160, "0204A": 210, "0205A": 160,
        "0206A": 210, "0207A": 160, "0208A": 210, "0209A": 160, "0210A": 210,
        "0211A": 160, "0212A": 210, "0201B": 160, "0202B": 210, "0203B": 160,
        "0204B": 210, "0205B": 160, "0206B": 210, "0207B": 160, "0208B": 210,
        "0209B": 160, "0210B": 210, "0211B": 160, "0212B": 210
    };
    let subtotal = 0;
    for (let id in prices) {
        const quantity = document.getElementById(id).value;
        subtotal += Number(quantity) * prices[id];
    }
    document.getElementById("subtotal_bor").value = subtotal.toFixed(1) + " Kč";
}

// Funkce pro výpočet mezisoučtu pro Buk
function calculateSubtotalBuk() {
    const prices = {
        "0301A": 160, "0302A": 210, "0303A": 160, "0304A": 210, "0305A": 160,
        "0306A": 210, "0307A": 160, "0308A": 210, "0309A": 160, "0310A": 210,
        "0311A": 160, "0312A": 210, "0301B": 160, "0302B": 210, "0303B": 160,
        "0304B": 210, "0305B": 160, "0306B": 210, "0307B": 160, "0308B": 210,
        "0309B": 160, "0310B": 210, "0311B": 160, "0312B": 210
    };
    let subtotal = 0;
    for (let id in prices) {
        const quantity = document.getElementById(id).value;
        subtotal += Number(quantity) * prices[id];
    }
    document.getElementById("subtotal_buk").value = subtotal.toFixed(1) + " Kč";
}

// Funkce pro výpočet mezisoučtu pro Dub
function calculateSubtotalDub() {
    const prices = {
        "0401A": 160, "0402A": 210, "0403A": 160, "0404A": 210, "0405A": 160,
        "0406A": 210, "0407A": 160, "0408A": 210, "0409A": 160, "0410A": 210,
        "0411A": 160, "0412A": 210, "0401B": 160, "0402B": 210, "0403B": 160,
        "0404B": 210, "0405B": 160, "0406B": 210, "0407B": 160, "0408B": 210,
        "0409B": 160, "0410B": 210, "0411B": 160, "0412B": 210
    };
    let subtotal = 0;
    for (let id in prices) {
        const quantity = document.getElementById(id).value;
        subtotal += Number(quantity) * prices[id];
    }
    document.getElementById("subtotal_dub").value = subtotal.toFixed(1) + " Kč";
}

// Funkce pro výpočet mezisoučtu pro Topol
function calculateSubtotalTopol() {
    const prices = {
        "0501A": 160, "0502A": 210, "0503A": 160, "0504A": 210, "0505A": 160,
        "0506A": 210, "0507A": 160, "0508A": 210, "0509A": 160, "0510A": 210,
        "0511A": 160, "0512A": 210, "0501B": 160, "0502B": 210, "0503B": 160,
        "0504B": 210, "0505B": 160, "0506B": 210, "0507B": 160, "0508B": 210,
        "0509B": 160, "0510B": 210, "0511B": 160, "0512B": 210
    };
    let subtotal = 0;
    for (let id in prices) {
        const quantity = document.getElementById(id).value;
        subtotal += Number(quantity) * prices[id];
    }
    document.getElementById("subtotal_topol").value = subtotal.toFixed(1) + " Kč";
}

// Funkce pro výpočet mezisoučtu pro Javor
function calculateSubtotalJavor() {
    const prices = {
        "0601A": 160, "0602A": 210, "0603A": 160, "0604A": 210, "0605A": 160,
        "0606A": 210, "0607A": 160, "0608A": 210, "0609A": 160, "0610A": 210,
        "0611A": 160, "0612A": 210, "0601B": 160, "0602B": 210, "0603B": 160,
        "0604B": 210, "0605B": 160, "0606B": 210, "0607B": 160, "0608B": 210,
        "0609B": 160, "0610B": 210, "0611B": 160, "0612B": 210
    };
    let subtotal = 0;
    for (let id in prices) {
        const quantity = document.getElementById(id).value;
        subtotal += Number(quantity) * prices[id];
    }
    document.getElementById("subtotal_javor").value = subtotal.toFixed(1) + " Kč";
}

// Funkce pro výpočet celkového součtu
function calculateTotal() {
    const subtotalSmrk = parseFloat(document.getElementById("subtotal_smrk").value) || 0;
    const subtotalBor = parseFloat(document.getElementById("subtotal_bor").value) || 0;
    const subtotalBuk = parseFloat(document.getElementById("subtotal_buk").value) || 0;
    const subtotalDub = parseFloat(document.getElementById("subtotal_dub").value) || 0;
    const subtotalTopol = parseFloat(document.getElementById("subtotal_topol").value) || 0;
    const subtotalJavor = parseFloat(document.getElementById("subtotal_javor").value) || 0;

    const total = subtotalSmrk + subtotalBor + subtotalBuk + subtotalDub + subtotalTopol + subtotalJavor + dop;
    document.getElementById("total").value = total.toFixed(1) + " Kč";
}

// Automatické přepočítání součtu při změně hodnot
document.querySelectorAll("input[type='number']").forEach(input => {
    input.addEventListener('input', function() {
        calculateSubtotalSmrk();
        calculateSubtotalBor();
        calculateSubtotalBuk();
        calculateSubtotalDub();
        calculateSubtotalTopol();
        calculateSubtotalJavor();
        calculateTotal(); // Po každém přepočtu mezisoučtu
    });
});
