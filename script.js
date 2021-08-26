onload = CheckDarkmode()

function CheckDarkmode() {
    let body = document.body;

    if (localStorage.getItem("darkmode") === "enabled") {
        body.classList.add("dark-mode");
        localStorage.setItem("darkmode", "enabled");
        console.log("Added darkmode.");
        console.log(localStorage.getItem("darkmode"));
    }else if (localStorage.getItem("darkmode") === "disabled") {
        body.classList.remove("dark-mode");
        localStorage.setItem("darkmode", "disabled");
        console.log("Removed darkmode.");
        console.log(localStorage.getItem("darkmode"));
    }
}

function ToggleDarkmode() {
    let body = document.body;

    if (body.classList.contains("dark-mode")) {
        //removes dark mode
        body.classList.remove("dark-mode");
        localStorage.setItem("darkmode", "disabled");
        console.log("Removed darkmode.");
        console.log(localStorage.getItem("darkmode"));
    }
    else {
        //adds darkmode
        body.classList.add("dark-mode");
        localStorage.setItem("darkmode", "enabled");
        console.log("Added darkmode.");
        console.log(localStorage.getItem("darkmode"));
    }
}

function postJoke() {
    window.open("postJoke.html","_self");
}

function postJoke_de() {
    window.open("postJoke_de.html","_self");
}

function gotogerman() {
    window.open("index_de.php", "_self");
}

function gotoenglish() {
    window.open("index.php", "_self");
}