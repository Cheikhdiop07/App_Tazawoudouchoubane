const form = document.getElementById('registrationForm');
const successMessage = document.getElementById('successMessage');
const inputs = form.querySelectorAll('input');

// Validation en temps réel
inputs.forEach(input => {
    input.addEventListener('blur', function() {
        validateField(this);
    });

    input.addEventListener('input', function() {
        if (this.parentElement.classList.contains('error')) {
            validateField(this);
        }
    });
});

function validateField(field) {
    const formGroup = field.parentElement;
    
    if (!field.validity.valid) {
        formGroup.classList.add('error');
        return false;
    } else {
        formGroup.classList.remove('error');
        return true;
    }
}

// Soumission du formulaire
form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    let isValid = true;
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });

    if (isValid) {
        // Afficher le message de succès
        successMessage.classList.add('show');
        
        // Exemple : récupération des données
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        console.log('Données du formulaire:', data);
        
        // Ici vous pouvez ajouter le code pour envoyer les données au serveur
        console.log('Formulaire valide - Données prêtes à être envoyées');
        
        // Rediriger vers la page de connexion après 2 secondes
        setTimeout(() => {
            window.location.href = 'login.html';
        }, 2000);
    } else {
        // Faire défiler jusqu'au premier champ en erreur
        const firstError = form.querySelector('.error');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
});

// Formatage automatique du numéro de téléphone
const telInput = document.getElementById('telephone');
telInput.addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 10) value = value.slice(0, 10);
    
    // Formater avec des espaces
    if (value.length > 2) {
        value = value.slice(0, 2) + ' ' + value.slice(2);
    }
    if (value.length > 5) {
        value = value.slice(0, 5) + ' ' + value.slice(5);
    }
    if (value.length > 8) {
        value = value.slice(0, 8) + ' ' + value.slice(8);
    }
    if (value.length > 11) {
        value = value.slice(0, 11) + ' ' + value.slice(11);
    }
    
    e.target.value = value;
});

// Formater le CIN en majuscules
const cinInput = document.getElementById('cin');
cinInput.addEventListener('input', function(e) {
    e.target.value = e.target.value.toUpperCase();
});