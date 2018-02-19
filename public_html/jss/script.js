function myFunction()
 {
     document.getElementById("notif").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.notification')) {

        var dropdowns = document.getElementsByClassName("notif");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
