(function() {
    const isMobile = window.innerWidth <= 850px; // Adjust breakpoint as needed

    const viewportMeta = document.createElement('meta');
    viewportMeta.name = 'viewport';

    if (isMobile) {
        viewportMeta.content = 'width=device-width, initial-scale=0.45, shrink-to-fit=no';
    } else {
        viewportMeta.content = 'width=device-width, initial-scale=1, shrink-to-fit=no';
    }

    document.head.appendChild(viewportMeta);
})();