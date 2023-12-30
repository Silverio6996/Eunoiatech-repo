const form = document.querySelector('.form form');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const captchaResponse = grecaptcha.getResponse();

    if (!captchaResponse.length > 0) {
        throw new Error("Captcha not complete");
    }

    const fd = new FormData(e.target);
    const params = new URLSearchParams(fd);

    fetch('http://localhost/EunioaTech/', {
        method: 'POST',
        body: params,
    })
    .then(res => res.json())
    .then((data) => {
        if (data.captchaSuccess) {
            console.log("Validation successful");
            // Redirect to homepage
            window.location.href = "http://localhost/EunioaTech/index.php"; // Replace with your actual homepage URL
        } else {
            console.error("Validation failed");
        }
    })
   
});
