const fighterCard = document.getElementById('fighter-card');
const radios = document.querySelectorAll('.character-list input[type="radio"]');


radios.forEach(radio => {
    radio.addEventListener('change', () => {
        if (radio.checked) {
            fighterCard.style.display = 'flex';
        }
    });
});

// Bouton Retour -> redirection vers la page d'accueil
const backBtn = document.getElementById('back-btn');
backBtn.addEventListener('click', () => {
});
