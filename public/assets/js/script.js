document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const navbar = document.querySelector('.navbar');
    const downloadCvBtn = document.getElementById('downloadCV');
    const yearElement = document.getElementById('copyright-year');

    // Smooth scrolling 
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return; // Skip empty hashes

            const targetElement = document.querySelector(targetId);
            if (!targetElement) return; // Skip if target doesn't exist

            e.preventDefault();

            // Calculate navbar height dynamically
            const navbarHeight = navbar ? navbar.offsetHeight : 80;

            window.scrollTo({
                top: targetElement.offsetTop - navbarHeight,
                behavior: 'smooth'
            });
        });
    });

    if (downloadCvBtn) {
        downloadCvBtn.addEventListener('click', function(e) {
            // Only prevent default if we're handling the download
            if (this.getAttribute('href') !== '#') {
                e.preventDefault();
                
                alert('Thank you for your interest! Your download will start shortly.');
                
                // Create a temporary link to force download
                setTimeout(() => {
                    const link = document.createElement('a');
                    link.href = this.getAttribute('href');
                    link.download = 'your-cv-filename.pdf'; // Suggested filename
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                }, 1000);
            }
        });
    }
    

});


    
    
    

