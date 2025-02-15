function bukInputs() {
    // Najdeme element s id "additional-inputs"
    const extraInputs = document.getElementById("buk-inputs");
    // Najdeme checkbox s id "extra-options"
    const checkbox = document.getElementById("buk");

    // Pokud je checkbox zaškrtnutý
    if (checkbox.checked) {
        // Odstraníme třídu "hidden", čímž zobrazíme další inputy
        extraInputs.classList.remove("hidden");
    } else {
        // Pokud není zaškrtnutý, přidáme třídu "hidden" a skryjeme inputy
        extraInputs.classList.add("hidden");
    }
}
