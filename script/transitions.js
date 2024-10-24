document.addEventListener('DOMContentLoaded', function () {

    // Seleciona as seções para animar.
    const productSections = document.querySelector('#product');
    const aboutSections = document.querySelector('#about');
    const ctatSections = document.querySelector('#cta');
    const footerSections = document.querySelector('footer');

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
    observer.observe(footerSections);
});