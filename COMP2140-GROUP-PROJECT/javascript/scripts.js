window.onload = function () {

<<<<<<< HEAD
    /*The login Button*/
=======
    /*The Lookup Country Button*/
>>>>>>> 33bb13e59b08dc126b1f729afae1394874338c08
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


<<<<<<< HEAD
    function getUSerData() {
        var emailaddr = documentgetElementbyId(emailaddr).value;
        var password = documentgetElementbyId(password).value;

        if (emailaddr.length < 20) {
            document.getElementById("result").innerHTML = "Invalid Email";
        }
        else {
            return true;
        }

        if (password.length >= 10) {
            document.getElementById("result").innerHTML = "Password must be more 8 characters";
        }
        else {
            return true;
        }

    }
=======

}
>>>>>>> 33bb13e59b08dc126b1f729afae1394874338c08
