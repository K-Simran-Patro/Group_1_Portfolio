document.addEventListener('DOMContentLoaded', function() {
    const projectList = document.getElementById('project-list');
    
    const projects = [
        { title: 'Project 1', description: 'JID  Luxe is luxurious website. We do designing and manufacturing of fashionable clothes to a client' },
        { title: 'Project 2', description: 'Placement prediction is a Deep learning integrated web application withbackend. It is used to predict the result whether the student will get placed or not. This task is crucial for educational institutions, recruiters, and students,as it helps in understanding and improving employability prospects' },
        { title: 'Project 3', description: 'Fraud detection app is a machine learning application.it is use to detect frauds from various platforms.' }
    ];

    projects.forEach(project => {
        const projectItem = document.createElement('div');
        projectItem.classList.add('project-item');
        projectItem.innerHTML = `<h3>${project.title}</h3><p>${project.description}</p>`;
        projectList.appendChild(projectItem);
    });

    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        
        fetch('submit_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert('Message sent!');
            contactForm.reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
