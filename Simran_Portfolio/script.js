fetch('fetch_data.php')
    .then(response => response.json())
    .then(data => {
        document.getElementById('email').textContent = 'Email: ' + data.email;
        document.getElementById('phone').textContent = 'Phone: ' + data.phone;
        document.getElementById('age').textContent = 'Age: ' + data.age;
    });
