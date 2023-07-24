
const point = document.querySelectorAll(".nav-indicator a")

const removeActiveClass = () => {
    point.forEach((point) => {
        point.classList.remove("active");
    });
};

const addActiveClass = (entries, observer) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            let currentpoint = document.querySelector(
                `.nav-indicator a[href='#${entry.target.id}']`
            );
            removeActiveClass();
            currentpoint.classList.add("active");
            console.log(entry.target.id);
        }
    })
};

// const idScroll = document.querySelectorAll('nav-link');
// console.log(idScroll.length);

const options = {
    threshold: 0.5,
}; 

const observer = new IntersectionObserver(addActiveClass, options)
const sections = document.querySelectorAll("section");

sections.forEach((section) => {
    observer.observe(section);
});