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

            hideAll();

        });
    }

    typeSelect.addEventListener('change', filterImages);
    toolSelect.addEventListener('change', filterImages);

    filterImages();
});



function hideAll() {
    var elements = [
        "ctv", "jurnalWesport", "metallion", "mcrsrl", "dungeonsAndRabbits",
        "onag", "speedpie", "abth", "teorieMuzicala", "laInvartite",
        "trivia", "bucuria", "sah", "clicksphere", "pian",
        "unde", "mcdonalds", "basil", "garfieldGang", "tochka-rosta"
    ];

    elements.forEach(function (id) {
        var element = document.getElementById(id);
        if (element) {
            element.style.display = 'none';
        }
    });
}

function showElement(id) {
    hideAll();
    
    var element = document.getElementById(id);
    if (element) {
        element.style.display = 'table-row';
    }
}

function show_ctv() { showElement("ctv"); }
function show_jurnalWesport() { showElement("jurnalWesport"); }
function show_metallion() { showElement("metallion"); }
function show_mcrsrl() { showElement("mcrsrl"); }
function show_dungeonsAndRabbits() { showElement("dungeonsAndRabbits"); }
function show_onag() { showElement("onag"); }
function show_speedpie() { showElement("speedpie"); }
function show_abth() { showElement("abth"); }
function show_teorieMuzicala() { showElement("teorieMuzicala"); }
function show_laInvartite() { showElement("laInvartite"); }
function show_trivia() { showElement("trivia"); }
function show_bucuria() { showElement("bucuria"); }
function show_sah() { showElement("sah"); }
function show_clicksphere() { showElement("clicksphere"); }
function show_pian() { showElement("pian"); }
function show_unde() { showElement("unde"); }
function show_mcdonalds() { showElement("mcdonalds"); }
function show_basil() { showElement("basil"); }
function show_garfieldGang() { showElement("garfieldGang"); }
function show_tochka_rosta() { showElement("tochka-rosta"); }






