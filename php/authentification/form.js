function openConForm() {
    document.getElementById("conForm").style.display = "block";
    document.getElementById("insForm").style.display = "none";
}

function openInsForm() {
    document.getElementById("insForm").style.display = "block";
    document.getElementById("conForm").style.display = "none";
}

function closeForms() {
    if(count($errors)===0){
        document.getElementById("insForm").style.display = "none";
        document.getElementById("conForm").style.display = "none";
    }
}