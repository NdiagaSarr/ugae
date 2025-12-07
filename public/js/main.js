document.addEventListener('DOMContentLoaded', () => {
    // Language Toggle Logic
    const langBtns = document.querySelectorAll('.lang-toggle');
    const body = document.body;

    // Check local storage for saved preference
    const currentLang = localStorage.getItem('ugae_lang') || 'en';
    setLanguage(currentLang);

    langBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const isFr = body.classList.contains('fr-active');
            const newLang = isFr ? 'en' : 'fr';
            setLanguage(newLang);
        });
    });

    function setLanguage(lang) {
        const langLabel = document.querySelector('.current-lang');
        if (lang === 'fr') {
            body.classList.add('fr-active');
            if (langLabel) langLabel.textContent = 'FR';
        } else {
            body.classList.remove('fr-active');
            if (langLabel) langLabel.textContent = 'EN';
        }
        localStorage.setItem('ugae_lang', lang);
    }
});
