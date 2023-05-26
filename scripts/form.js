function openConForm() {
    document.getElementById("conForm").style.display = "block";
    document.getElementById("insForm").style.display = "none";
}

function openInsForm() {
    document.getElementById("insForm").style.display = "block";
    document.getElementById("conForm").style.display = "none";
}

function closeForms() {

    document.getElementById("insForm").style.display = "none";
    document.getElementById("conForm").style.display = "none";
    
}

function reset(){
    document.getElementById("insForm").style.display = "none";
    document.getElementById("conForm").style.display = "none";
    const p = document.getElementById('errorText');
    p.innerText = "";
    const p2 = document.getElementById('errorConText');
    p2.innerText = "";
}
