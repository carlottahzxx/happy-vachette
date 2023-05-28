
function drawChart(date,valeur,typeCapteur){
    const id = 'myChart'+typeCapteur.toString();
    const can = document.getElementById(id);

    const labels = date;
    var titre = "";

    if(typeCapteur ===1){
        titre = "Rythme Cardiaque";
    }else if(typeCapteur === 2){
        titre = "Température";
    }else if(typeCapteur === 3){
        titre = "Niveau Sonore";
    }else if(typeCapteur === 2){
        titre = "CO2";
    }


    const data = {
    labels: labels,
    datasets: [{
        label: titre,
        data: valeur,
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options:{
            responsive: false,
            maintainAspectRatio: false,
        }
    };

    new Chart(can,config);
}

function updateInput(collier){
    const inStart1 = document.getElementById('timeInputMin1');
    const inEnd1 = document.getElementById('timeInputMax1');

    var str1 = "";

    if(inStart1!==null && inEnd1 !== null){
        str1 = "&timeStart1="+inStart1.value+"&timeEnd1="+inEnd1.value;
    }

    const inStart2 = document.getElementById('timeInputMin2');
    const inEnd2 = document.getElementById('timeInputMax2');

    var str2 = "";

    if(inStart2!==null && inEnd2 !== null){
        str2 = "&timeStart2="+inStart2.value+"&timeEnd2="+inEnd2.value;
    }

    const inStart3 = document.getElementById('timeInputMin3');
    const inEnd3 = document.getElementById('timeInputMax3');

    var str3 = "";

    if(inStart3!==null && inEnd3 !== null){
        str3 = "&timeStart3="+inStart3.value+"&timeEnd3="+inEnd3.value;
    }

    const inStart4 = document.getElementById('timeInputMin4');
    const inEnd4 = document.getElementById('timeInputMax4');

    var str4 = "";

    if(inStart4!==null && inEnd4 !== null){
        str4 = "&timeStart4="+inStart4.value+"&timeEnd4="+inEnd4.value;
    }

    window.location.href = "../colliers/graph_page.php?collier="+collier+str1+str2+str3+str4;

}