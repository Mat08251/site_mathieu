const sr = ScrollReveal();

sr.reveal('.titre_page', {
    distance: '20px',
    origin: 'top',
    reset: true,
    duration: 2400
});

sr.reveal('.texte_accroche', {
    duration: 2500,
    distance: '30px'
});

sr.reveal('.titre_objectif', {
    duration: 2500,
    distance: '40px',
    origin: 'top'
});

sr.reveal('.texte_objectif', {
    duration: 2500,
    distance: '40px',
    origin: 'left'
});

sr.reveal('.bloc_maquettage', {
    duration: 2500,
    origin: 'right',
    distance: '50px',
    reset: true,
    mobile: false,
    delay: 500
});

sr.reveal('.bloc_developpement', {
    duration: 2500,
    origin: 'left',
    distance: '50px',
    reset: true,
    mobile: false,
    delay: 500
});

sr.reveal('.titre_rdv', {
    duration: 2400,
    origin: 'top',
    reset: true,
    scale: 0.5
})

sr.reveal('.texte_rdv', {
    duration: 2500,
    origin: 'bottom',
    distance: '30px',
    reset: true,
    delay: 500
})

sr.reveal('.btn', {
    duration: 2500,
    distance: '30px',
    scale: 0.2,
    reset: true,
    delay: 500
})

const st = ScrollReveal({
    duration: 2500,
    reset: true,
    scale: 0.3
});

st.reveal('.maquettage', {

});

st.reveal('.developpement', {

});

