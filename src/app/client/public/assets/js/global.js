// Adds the class 'current' to the active page the user is on, which then is used in CSS for styling in global.scss
var path = window.location.pathname;
//console.log("Pathname: " + path);     // For troubleshooting
var page = path.split("/").pop();
//console.log("Pagename: " + page);     // For troubleshooting
var links = document.querySelectorAll('nav ul li a');

for (var i = 0; i < links.length; i++) {
    if (links[i].getAttribute('href') === page) {
        links[i].classList.add('current');
    }
}