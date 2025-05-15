// Cek apakah user sudah login
fetch('check-auth.php')
    .then(response => response.json())
    .then(data => {
        if (!data.loggedIn) {
            window.location.href = 'login.html';
        }
    })
    .catch(error => console.error('Error:', error));