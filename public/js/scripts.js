document.getElementById('employee-login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Employee login feature is under development.');
    document.getElementById('employee-content').style.display = 'block';
});

document.getElementById('training-request-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Training request has been sent.');
    // Here you would add code to send the form data to an email or a backend service
});

document.getElementById('career-application-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Career application has been sent.');
    // Here you would add code to send the form data to an email or a backend service
});

document.getElementById('director-login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Director login feature is under development.');
    document.getElementById('director-content').style.display = 'block';
});
