

function closeAllMassage(exceptBloc = null) {
    const blocs = document.querySelectorAll('.massage_bloc');

    blocs.forEach(bloc => {
        if (bloc !== exceptBloc) {
            bloc.classList.remove('active');
            bloc.querySelector('.massage_answer-bloc').style.height = '0';
        }
    });
}

function toggleMassage(bloc) {
    const isOpen = bloc.classList.contains('active');
    const wrapper = bloc.querySelector('.massage_answer-bloc');
    const content = bloc.querySelector('.massage_answer');

    if (isOpen) {
        bloc.classList.remove('active');
        wrapper.style.height = '0';
    } else {
        closeAllMassage(bloc);
        bloc.classList.add('active');
        wrapper.style.height = content.clientHeight + 'px';
    }
}

function initMassage() {
    const blocs = document.querySelectorAll('.massage_bloc');

    blocs.forEach(bloc => {
        const title = bloc.querySelector('.massage_title');
        title.addEventListener('click', () => toggleMassage(bloc));

        // Ouverture initiale
        if (bloc.classList.contains('active')) {
            const wrapper = bloc.querySelector('.massage_answer-bloc');
            const content = bloc.querySelector('.massage_answer');
            wrapper.style.height = content.clientHeight + 'px';
        }
    });
}

// Initialisation
initMassage();