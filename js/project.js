$(document).ready(function () {
    requestApi();
    $('#recipe').on('change', () => {
        var recipeId = $('#recipe').val();
        getRecipe(recipeId);
    })
})

function getUrl() {
    var url = "https://raw.githubusercontent.com/radytrainer/test-api/master/test.json";
    return url;
}
// get api
function requestApi() {
    $.ajax({
        dataType: 'json',
        url: getUrl(),
        success: (data) => chooseRecipe(data.recipes),
        error: () => console.log("Can not  get data")
    })
}
var allData = [];
// choose recipe from select
function chooseRecipe(recipe) {
    allData = recipe;
    var option = "";
    recipe.forEach(item => {
        option += `
            <option style="color:  #79d2a6;" value = "${item.id}">${item.name}</option>
        `;
    })
    $('#recipe').append(option);
}
// get all recipe
var oldGuest;
var newGuest;
function getRecipe(id) {
    allData.forEach(item => {
        if (item.id == id) {
            eachRecipe(item.name, item.iconUrl)
            eachIngredient(item.ingredients);
            eachGuest(item.nbGuests);
            eachestep(item.instructions);
            //get oldGuest
            oldGuest= item.nbGuests;
            //get all data from api
            newGuest=item;
        }
    });
}
$('#show').hide();
//display number of guest
function eachGuest(guest) {
    var result = "";
    result += `
    <input type="text" disabled selected id="submit" class="form-control text-center btn-outline-success" value="${guest}" min=1 max=15>
    `;
    $('#input').html(result);
    $('#show').show();
}
//display recipe
function eachRecipe(name, img) {
    var result = "";
    result += `
        <div class="col-3"></div>
        <div class="col-3" >
            <div class="card" id="card">
                <h1 class="text-center text-white" >${name}</h1>
            </div>
        </div>
        <div class="col-3">
            <img src="${img}" width="200" height="200" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-3"></div>
    `;
    $('#recipe-result').html(result);
}
//display step in table
$('#ins').hide();
$('#background').hide();
function eachestep(instruction) {
    var result = "";
    var splitStep = instruction.split('<step>');
    for (let i = 1; i < splitStep.length; i++) {
        result += `
                <h5 class = "text-primary mt-3">Step: ${i}</h5>
                <p class = " text-white mt-3">${splitStep[i]}</p>
            `;
    }
    $('#instruction-result').html(result);
    $('#ins').show();
    $('#background').show();
}
// display default ingrediant in table
$('#ing').hide();
$('#color').hide();
function eachIngredient(ing) {
    var result = "";
    ing.forEach(element => {
        const { iconUrl, quantity, unit, name } = element;
        result += `
                <tr class=" text-white mt-5">
                    <td><img src="${iconUrl}" width="70" class="img-fluid"></td>
                    <td>${quantity}</td>
                    <td>${unit[0]}</td>
                    <td>${name}</td>
                </tr> 
        `;
        $('#ingredient-result').html(result);
        $('#ing').show();
        $('#color').show();
    })
}
//when click button to calculate 
$('#add').on('click', function () {
    var addPerson = $('#submit').val();
    var add = parseInt(addPerson) + 1;
    if (add <= 15) {
        $('#submit').val(add);
        calculate( $('#submit').val());
    }
})
$('#minus').on('click', function () {
    var minusPerson = $('#submit').val();
    var minus = parseInt(minusPerson) - 1;
    if (minus >= 1) {
        $('#submit').val(minus);
        calculate( $('#submit').val());
    }
})
//Calculate number of guest
function calculate(numbers){
    var getValue= "";
    newGuest.ingredients.forEach(el => {
        const {iconUrl,quantity,unit,name} = el;
        getValue +=`
        <tr class="mt-5">
        <td><img src="${iconUrl}" width="70" class="img-fluid"></td>
        <td>${quantity * numbers / oldGuest}</td>
        <td>${unit[0]}</td>
        <td>${name}</td>
    </tr> 
        `;
        $('#ingredient-result').html(getValue);
    })
}