const sr = ScrollReveal();

sr.reveal('.titre_page', {
    distance: '20px',
    origin: 'top',
    reset: true,
    duration: 2400
});

sr.reveal('.card', {
    delay: 300,
    interval: 600
}, 500);