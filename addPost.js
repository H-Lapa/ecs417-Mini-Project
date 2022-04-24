let clearButton = document.getElementById('clear');

clearButton.addEventListener ('click', function clear(event) {
    event.preventDefault();
    let inputArray = getElementsByTagName('input');
    inputArray.forEach(element => {
        element.value = "";
    });

});

let submitButton = document.getElementById('submit');

submitButton.addEventListener('click', function onClick(event) {
    event.preventDefault();
    console.log("heard!");
    let titleInput = document.getElementById('title');
    if (titleInput.value == "") {
        document.getElementById('titlelabel').style.color = "red";
    }
    let descInput = document.getElementById('desc');
    if (descInput.value == "") {
        document.getElementById("desclabel").style.color = 'red';
        console.log("desc is empty");
    }
    
});
