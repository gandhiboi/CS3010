function validateForm() {
    var x = document.forms["regForm"]["fname"].value;
    if (x == "") {
        alert("name must be filled out");
        return false;
    }
}