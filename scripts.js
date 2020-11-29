window.onload = function () {

    /*The Lookup Country Button*/
    document.getElementById("loginbtn").addEventListener('click', function () {

        /* Sending a http request to the server*/
        var url = "http://localhost/COMP2140-GROUP-PROJECT/login.php";
        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                request.responseText;

            }

        };

        request.open("GET", url, true);
        request.send();

    });



}