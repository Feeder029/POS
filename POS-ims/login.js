document.addEventListener("DOMContentLoaded", function() {
    const defaultUsername = 'admin';
    const defaultPassword = 'admin123';

    document.getElementById('loginform').addEventListener('submit', function(event) {
        event.preventDefault();

        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username === defaultUsername && password === defaultPassword) {
            alert('Login successfully!');
            window.location.href = "dashboard.html";
        } else {
            alert('Invalid username or password!');
        }
    });
});
