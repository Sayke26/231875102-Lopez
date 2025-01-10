function toggleContent(sectionId) {
    var sections = document.querySelectorAll('.resume-section');
    
    sections.forEach(function(section) {
        section.style.display = 'none';
    });

    var selectedSection = document.getElementById(sectionId);
    selectedSection.style.display = 'block';
}
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
});


function toggleContent(sectionId) {
    const section = document.getElementById(sectionId);

    if (section.style.display === 'none' || !section.style.display) {
        section.style.display = 'block';
    } else {
        section.style.display = 'none';
    }
}