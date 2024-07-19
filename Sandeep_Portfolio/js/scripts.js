document.addEventListener('DOMContentLoaded', function() {
    fetch('php/fetch_data.php')
        .then(response => response.json())
        .then(data => {
            let workItemsContainer = document.getElementById('work-items');
            data.forEach(project => {
                let workItem = document.createElement('div');
                workItem.className = 'work-item';
                
                let img = document.createElement('img');
                img.src = 'images/project' + project.image;
                img.alt = project.title;

                let title = document.createElement('h3');
                title.textContent = project.title;

                let description = document.createElement('p');
                description.textContent = project.description;

                workItem.appendChild(img);
                workItem.appendChild(title);
                workItem.appendChild(description);
                workItemsContainer.appendChild(workItem);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Form submitted!');
});
