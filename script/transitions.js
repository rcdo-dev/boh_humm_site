document.addEventListener('DOMContentLoaded', function () {

    // Seleciona todas as seções que para animar.
    const productSections = document.querySelector('#product');
    const aboutSections = document.querySelector('#about');
    const ctatSections = document.querySelector('#cta');

    // Configura o Intersection Observer.
    let observer = new IntersectionObserver(function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Adiciona a classe 'visible' à seção que entra na tela.
                entry.target.classList.add('visible');
            }
        });
    });

    // Observa cada seção.
    observer.observe(productSections);
    observer.observe(aboutSections);
    observer.observe(ctatSections);
});