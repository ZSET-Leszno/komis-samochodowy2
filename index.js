let nav = 1;

function openNav() {
    nav++;
    if (nav % 2 == 0) {
        document.getElementById("sidenav").style.width = "300px";
    } else {
        document.getElementById("sidenav").style.width = "0";
    }
    document.getElementById("toggler").classList.toggle("change");
}