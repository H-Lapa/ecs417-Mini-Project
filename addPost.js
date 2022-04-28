let clearButton = document.getElementById('clear');

clearButton.addEventListener ('click', function clear(event) {
    event.preventDefault();
    let desc = document.getElementById('desc');
    let title = document.getElementById('title');
    title.value = "";
    desc.value = "";

});

let submitButton = document.getElementById('submit');

submitButton.addEventListener('click', function onClick(event) {
    console.log("heard!");
    let titleInput = document.getElementById('title');
    if (titleInput.value == "") {
        event.preventDefault();
        document.getElementById('titlelabel').style.color = "red";
    }
    let descInput = document.getElementById('desc');
    if (descInput.value == "") {
        event.preventDefault();
        document.getElementById("desclabel").style.color = 'red';
        console.log("desc is empty");
    }
    
});
