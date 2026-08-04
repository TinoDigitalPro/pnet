 
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".step-number[data-target]");

    const speed = 50; // lower = faster

    const animateCounter = (counter) => {
        const target = +counter.getAttribute("data-target");
        let count = 0;

        const update = () => {
            const increment = Math.ceil(target / 50);

            if (count < target) {
                count += increment;
                counter.innerText = count + "+";
                setTimeout(update, speed);
            } else {
                counter.innerText = target + "+";
            }
        };

        update();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(counter => observer.observe(counter));
});
 