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


document.addEventListener('DOMContentLoaded', function () {
    const typeSelect = document.getElementById('typeSelect');
    const toolSelect = document.getElementById('toolSelect');

    function filterImages() {
        const selectedType = typeSelect.value;
        const selectedTool = toolSelect.value;

        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach(img => {
            const imgTypes = img.getAttribute('data-type').split(',').map(type => type.trim());
            const imgTools = img.getAttribute('data-tool').split(',').map(tool => tool.trim());
            const imgParent = img.parentNode;

            let typeMatch = selectedType === 'All' || imgTypes.includes(selectedType);
            let toolMatch = selectedTool === 'All' || imgTools.includes(selectedTool);

            if (typeMatch && toolMatch) {
                imgParent.style.display = 'block';
                //imgParent.removeAttribute('href');
            } else {
                imgParent.style.display = 'none';
                //imgParent.setAttribute('href', '#');
            }
        });
    }

    typeSelect.addEventListener('change', filterImages);
    toolSelect.addEventListener('change', filterImages);

    filterImages();
});