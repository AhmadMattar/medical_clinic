const patientsForm = document.getElementById("patientsForm");
const addIconButt = document.getElementById("addButt");
const buttChangePatient = document.getElementById("buttChangePatient");

const editIconPatient = document.querySelectorAll(".editIcon");
const buttAddPatient = document.getElementById("buttAddPatient");

const close = document.getElementById("close");

buttAddPatient.onclick=showPatientsFormWhenAdd;
editIconPatient.forEach(function(value){
    value.onclick=showPatientsFormWhenChange;
})
close.onclick=hidePatientsForm;

function showPatientsFormWhenAdd(){
    patientsForm.style.display="block";
    buttChangePatient.style.display="none";
    addIconButt.style.display="block";
}
function showPatientsFormWhenChange(){
    patientsForm.style.display="block";
    addIconButt.style.display="none";
    buttChangePatient.style.display="block";
}
function hidePatientsForm(){
    patientsForm.style.display="none";
}