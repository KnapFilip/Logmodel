function borInputs() {
    // Najdeme element s id "additional-inputs"
    const extraInputs = document.getElementById("bor-inputs");
    // Najdeme checkbox s id "extra-options"
    const checkbox = document.getElementById("bor");

    // Pokud je checkbox zaškrtnutý
    if (checkbox.checked) {
        // Odstraníme třídu "hidden", čímž zobrazíme další inputy
        extraInputs.classList.remove("hidden");
    } else {
        // Pokud není zaškrtnutý, přidáme třídu "hidden" a skryjeme inputy
        extraInputs.classList.add("hidden");
    }
}
