document.getElementById("shs").addEventListener('click', function(){
    const select = document.getElementById("course");
    select.innerHTML = '';

    const newOptions =  [
        {value: 'default', text: 'Select Course'},
        {value: 'ABM', text: 'SHS - ABM'},
        {value: 'STEM', text: 'SHS - STEM'},
        {value: 'HUMSS', text: 'SHS - HUMSS'},
        {value: 'GAS', text: 'SHS - GAS'}
    ]

    newOptions.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.value;
        newOption.text = option.text;
        select.appendChild(newOption);
    });
});

document.getElementById("c").addEventListener('click', function(){
    const select = document.getElementById("course");
    select.innerHTML = '';

    const newOptions =  [
        {value: 'default', text: 'Select Course'},
        {value: 'ACT', text: 'Associate in Computer Technology'},
        {value: 'BSA', text: 'BS in Acccountancy'},
        {value: 'BSBAFM', text: 'BS in Business Administration - Financial Management'},
        {value: 'BSBAMM', text: 'BS in Business Administration - Marketing Managements'}
    ]

    newOptions.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.value;
        newOption.text = option.text;
        select.appendChild(newOption);
    });
});

document.getElementById("m").addEventListener('click', function(){
    const select = document.getElementById("course");
    select.innerHTML = '';

    const newOptions =  [
        {value: 'default', text: 'Select Course'},
        {value: 'MSCJ', text: 'MS in Criminal Justice - CRIMINOLOGY'},
        {value: 'MAE', text: 'Master of Arts - ENGLISH'},
        {value: 'MAGC', text: 'Master of Arts - Guidance Counceling'},
        {value: 'MAED', text: 'Master of Arts - Guidance Counceling'}
    ]

    newOptions.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.value;
        newOption.text = option.text;
        select.appendChild(newOption);
    });
});

document.getElementById("t").addEventListener('click', function(){
    const select = document.getElementById("course");
    select.innerHTML = '';

    const newOptions =  [
        {value: 'default', text: 'Select Course'},
        {value: 'TVET', text: 'Technical Vocational Education Training'},
    ]

    newOptions.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.value;
        newOption.text = option.text;
        select.appendChild(newOption);
    });
});

const newDate = new Date();
//Container 1 - Level and Course
document.getElementById("summer").innerHTML = "Summer " + newDate.getFullYear() + " - " + (newDate.getFullYear () + 1);
const sel = document.getElementById("year");
for (let index = newDate.getFullYear(); index > 2020; index--) {
    const newOption = document.createElement('option');
    newOption.value = index;
    newOption.text = index + " - " + (index + 1);
    sel.appendChild(newOption);
}

//Container 3 - Educational Background
const elemYear = document.getElementById("elemyear");
const junYear = document.getElementById("jun-year");
const senYear = document.getElementById("sen-year");
for (let index = newDate.getFullYear() - 1; index > 1950; index--){
        const newOption = document.createElement('option');
        newOption.value = index;
        newOption.text = index + " - " + (index + 1);
        elemYear.appendChild(newOption);
    }
for (let index = newDate.getFullYear() - 1; index >= 1999; index--){
        const newOption = document.createElement('option');
        newOption.value = index;
        newOption.text = index + " - " + (index + 1);
        junYear.appendChild(newOption);
    }
    for (let index = newDate.getFullYear() - 1; index >= 1999; index--){
        const newOption = document.createElement('option');
        newOption.value = index;
        newOption.text = index + " - " + (index + 1);
        senYear.appendChild(newOption);
    }
