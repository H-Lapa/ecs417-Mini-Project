let clearButton = document.getElementById('clear');

clearButton.addEventListener ('click', function clear(event) {
    //retreives elements and makes the value they store a blank string
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
    //if any of the inputs are blank then it prevents default and colors the label red to signla to the user
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
