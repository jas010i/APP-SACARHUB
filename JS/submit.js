
var count = 6;  

var counter;


function redirect() {

    counter = setInterval(timer, 1000);

        function timer() {

            count = count - 1;

            document.getElementById("popup-notice").style.display = "block";

            document.getElementById("popup-notice").innerHTML = "Thank you for the heads up!"

            document.getElementById("form-submit").innerHTML = "Please wait " + count + " seconds before reporting again.";

            document.getElementById("form-submit").disabled = true;

                        if (count <= 0) {

                                clearInterval(counter);

                                location.reload();

                    }
        }

}
