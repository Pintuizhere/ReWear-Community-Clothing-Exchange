// Animation on scroll
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate__animated')
    
    function checkIfInView() {
        animateElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top
            const elementBottom = element.getBoundingClientRect().bottom
            
            // Check if element is in viewport
            if (elementTop < window.innerHeight && elementBottom >= 0) {
                element.style.visibility = 'visible'
                element.classList.add(element.getAttribute('data-animation'))
            }
        })
    }
    
    // Initial check
    checkIfInView()
    
    // Check on scroll
    window.addEventListener('scroll', checkIfInView)
})