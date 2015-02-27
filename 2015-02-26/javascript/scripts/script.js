
window.onload = function() {
    document
        .getElementById("calculator_form")
        .addEventListener("submit", function(event){
            event.preventDefault();
            return false;
        });

    document
        .getElementById("calculator_submit")
        .addEventListener("click", function(event){

            var field_one = parseInt(document.getElementById("field_1").value);
            var field_two = parseInt(document.getElementById("field_2").value);

            document.getElementById("answer").innerHTML = field_one + field_two;

            event.preventDefault()
            return false;
        });

}
