/**
 * Sterling Commercial Solutions - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuIcon = document.getElementById('menu-icon');
    const mobileNav = document.getElementById('mobile-nav');

    if (menuIcon && mobileNav) {
        menuIcon.addEventListener('click', function() {
            mobileNav.classList.toggle('mobile-nav-open');
        });
    }

    // Close mobile nav when clicking a link
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link, .mobile-nav-button');
    mobileNavLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            if (mobileNav) {
                mobileNav.classList.remove('mobile-nav-open');
            }
        });
    });

    // Footer section toggle
    const footerHeaders = document.querySelectorAll('[data-footer-toggle]');
    footerHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            const footerCol = header.closest('.footer-col');
            if (footerCol) {
                footerCol.classList.toggle('footer-open');
            }
        });
    });

    // Industry Services Carousel
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(document.querySelectorAll('.carousel-slide'));
    const prevBtn = document.querySelector('.carousel-btn-prev');
    const nextBtn = document.querySelector('.carousel-btn-next');
    const indicators = Array.from(document.querySelectorAll('.indicator'));

    if (track && slides.length > 0) {
        let currentIndex = 0;

        function updateCarousel() {
            // Update slide positions
            slides.forEach(function(slide, index) {
                slide.classList.remove('active');
                if (index === currentIndex) {
                    slide.classList.add('active');
                }
            });

            // Update indicators
            indicators.forEach(function(indicator, index) {
                indicator.classList.remove('active');
                if (index === currentIndex) {
                    indicator.classList.add('active');
                }
            });
        }

        function goToSlide(index) {
            currentIndex = index;
            if (currentIndex < 0) currentIndex = slides.length - 1;
            if (currentIndex >= slides.length) currentIndex = 0;
            updateCarousel();
        }

        // Navigation buttons
        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                goToSlide(currentIndex - 1);
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                goToSlide(currentIndex + 1);
            });
        }

        // Indicator buttons
        indicators.forEach(function(indicator, index) {
            indicator.addEventListener('click', function() {
                goToSlide(index);
            });
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') goToSlide(currentIndex - 1);
            if (e.key === 'ArrowRight') goToSlide(currentIndex + 1);
        });

        // Auto-play (optional - uncomment to enable)
        // setInterval(function() {
        //     goToSlide(currentIndex + 1);
        // }, 5000);
    }
});
