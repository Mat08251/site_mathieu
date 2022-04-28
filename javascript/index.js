const sr = ScrollReveal();



sr.reveal('.titre_qui_suisje, .titre_section_service, .titre_section_competences, .titre_section_projets', {
    origin: 'top',
    distance: '20px',
    reset: true,
    duration: 2200
});

sr.reveal('.description', {
    origin: 'right',
    distance: '50px',
    reset: true,
    duration: 2200,
    mobile: false
});

const pr = ScrollReveal({
    delay: 200,
    reset: true,
    duration: 2000
});

pr.reveal('.texte_para', {
    
});

pr.reveal('.texte_para3', {
    
});


sr.reveal('.bloc_design, .bloc_dev, .bloc_referencement', {
    scale:0.5,
    reset: true,
    duration: 2000
});


sr.reveal('.competence_texte', {
    origin: 'left',
    distance: '100px',
    reset: true,
    duration: 2500
});

sr.reveal('.progress', {
    origin: 'right',
    distance: '100px',
    reset: true,
    duration: 2500,
    mobile: false
});

sr.reveal('.projet_card', {
    delay: 400,
    interval: 400,
    reset: false
}, 500);

sr.reveal('.texte-pub', {
    duration: 2000,
    scale: 0.5,
    reset: true,
});

sr.reveal('.lien-pub', {
    origin: 'bottom',
    duration: 2000,
    distance: '50px',
    eset: true
});