function dropDown(id) {
    if(id === 1)
        document.getElementById("specimen_management").classList.toggle("show");
    else if(id === 2)
        document.getElementById("reporting").classList.toggle("show");
    else if(id === 3)
        document.getElementById("qc_eqa").classList.toggle("show");
    else if(id === 4)
        document.getElementById("supplies").classList.toggle("show");
    else if(id === 5)
        document.getElementById("complaints").classList.toggle("show");
}
