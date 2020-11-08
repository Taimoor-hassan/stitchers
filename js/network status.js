
// /* JS comes here */
// var status = document.getElementsByClassName("avtar");

// window.addEventListener('load', function(e) {
//     if (navigator.onLine) {
//         status.style.color = "green";
//     } else {
//         status.style.color = "red";
//     }
// }, false);

// window.addEventListener('online', function(e) {
//     status.style.color = "green";
// }, false);

// window.addEventListener('offline', function(e) {
//     status.style.color = "red";
// }, false);


function hasNetwork(online) {
    const element = document.querySelector(".avatar");
    // Update the DOM to reflect the current status
    if (online) {
        element.classList.remove("offline");
        element.classList.add("online");
        element.style.color = "green";
    } else {
        element.classList.remove("online");
        element.classList.add("offline");
        element.style.color = "red";
    }
}

window.addEventListener("load", () => {
    hasNetwork(navigator.onLine);

    window.addEventListener("online", () => {
        // Set hasNetwork to online when they change to online.
        hasNetwork(true);
    });

    window.addEventListener("offline", () => {
        // Set hasNetwork to offline when they change to offline.
        hasNetwork(false);
    });
});