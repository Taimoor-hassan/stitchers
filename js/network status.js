
var connected = navigator.onLine;

console.log(connected);

if (connected == true) {
    console.log("You are now back online.");
    document.querySelector(".fa-user-circle").style.color = "green" ;

} ;
if (connected == false) {
    console.log("You lost connection.");
    document.querySelector(".fa-user-circle").style.color = "red" ;

};

// var connected = navigator.onLine;

// window.addEventListener('online', () => console.log("You are now back online."), document.querySelector(".fa-user-circle").style.color = "green" );
// window.addEventListener('offline', () =>  console.log("You lost connection."), document.querySelector(".fa-user-circle").style.color = "red");

