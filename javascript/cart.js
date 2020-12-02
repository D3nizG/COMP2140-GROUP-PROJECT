var addToCartButtons = document.getElementsByClassName('shop-item-button')
for (var i = 0; i < addToCartButtons.length; i++) {
    var button = addToCartButtons[i]
    button.addEventListener('click', function (e) {
        e.preventDefault();
        url = "http://localhost/COMP140-GROUP-PROJECT/project.php";
        output = document.getElementsByClassName("result");
        httprequest.open("GET", url, true);
        httprequest.onreadystatechange = function () {
            console.log('reach');
            if (httprequest.readystate == XMLHttpRequest.DONE && httprequest.status == 200) {
                console.log('reach')
                var result = httprequest.responseTest;
                output.innerHTML = result;
            }
        };
        httprequest.send();

    });
}