var path = window.location.pathname;
var page = path.split("/").pop();
console.log(page);
var links = document.querySelectorAll('nav ul li a');

for (var i = 0; i < links.length; i++) {
    if (links[i].getAttribute('href') === page) {
        links[i].classList.add('current');
    }
}