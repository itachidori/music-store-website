$(document).ready(function () {
    $('.tabelaBD').DataTable();
});


function toggleTableGuitar() {
    var guitars = document.getElementById('tabelaGuitarras');
    if (guitars.style.display == "block") {
        guitars.style.display = "none";
    }
    else {
        guitars.style.display = "block";
    }
}

function toggleTableDrum() {
    var drums = document.getElementById('tabelaBaterias');
    if (drums.style.display == "block") {
        drums.style.display = "none";
    }
    else {
        drums.style.display = "block";
    }

}

function toggleTableBass() {
    var basses = document.getElementById('tabelaBaixos');
    if (basses.style.display == "block") {
        basses.style.display = "none";
    }
    else {
        basses.style.display = "block";
    }

}

function toggleTableKeyboard() {
    var Keyboards = document.getElementById('tabelaPianos');
    if (Keyboards.style.display == "block") {
        Keyboards.style.display = "none";
    }
    else {
        Keyboards.style.display = "block";
    }

}