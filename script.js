document.addEventListener("DOMContentLoaded", function () {
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumbnail => {
        const originalSrc = thumbnail.src;
        const gifSrc = thumbnail.getAttribute('data-gif');

        thumbnail.addEventListener('mouseover', function () {
            this.src = gifSrc;
        });

        thumbnail.addEventListener('mouseout', function () {
            this.src = originalSrc;
        });
    });
});