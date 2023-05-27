function updateCollier(){
    
    const selector = document.getElementById('grange-selector');
    const grange = selector.value;
    window.location.href = "../colliers/colliers.php?grange="+grange;
    
}