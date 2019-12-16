
$(document).ready(function () {
    requestApi();
    $('#recipe').on('change', () => {
        var recipeId = $('#recipe').val();
        getRecipe(recipeId);
        $('#add').on('click', function () {
            var addPerson = $('#submit').val();
            getAdd(addPerson);

        })
        $('#minus').on('click', function () {
            var minusPerson = $('#submit').val();
            getMinus(minusPerson);
        })
    })
})

function getUrl() {
    var url = "https://raw.githubusercontent.com/radytrainer/test-api/master/test.json";
    return url;
}
function requestApi() {
    $.ajax({
        dataType: 'json',
        url: getUrl(),
        success: (data) => chooseRecipe(data.recipes),
        error: () => console.log("Can not  get data")
    })
}
var allData = [];
function chooseRecipe(recipe) {
    allData = recipe;
    var option = "";
    recipe.forEach(item => {
        option += `
            <option value = "${item.id}">${item.name}</option>
        `;
    })
    $('#recipe').append(option);
}
function getRecipe(id) {
    allData.forEach(item => {
        if (item.id == id) {
            eachRecipe(item.name, item.iconUrl)
            eachIngredient(item.ingredients);
            eachGuest(item.nbGuests);
            eachestep(item.instructions);
        }
    });
}
$('#show').hide();
function eachGuest(guest) {
    var result = "";
    result += `
    <input type="text" disabled selected id="submit" class="form-control text-center btn-outline-success" value="${guest}" min=1 max=15>
    `;
    $('#input').html(result);
    $('#show').show();
}
function eachRecipe(name, img) {
    var result = "";
    result += `
        <div class="col-3"></div>
        <div class="col-3" >
            <h1 class="text-center" >${name}</h1>
        </div>
        <div class="col-3" >
            <img src="${img}" width="200" height="200" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-3"></div>
    `;
    $('#recipe-result').html(result);
}
function eachestep(instruction) {
    $('#instruction').hide();
    var result = "";
    var splitStep = instruction.split('<step>');
    for (let i = 1; i < splitStep.length; i++) {
        result += `
                <h5 class = "text-primary mt-3">Step: ${i}</h5>
                <p class = "mt-3">${splitStep[i]}</p>
            `;
    }
    $('#instruction-result').html(result);
    $('instruction').show();
}
$('#vl').hide();
$('#inggredient-result').hide();
function eachIngredient(ing) {
    var result = "";
    ing.forEach(element => {
        const { iconUrl, quantity, unit, name } = element;
        result += `
                <tr class="mt-5">
                    <td><img src="${iconUrl}" width="70" class="img-fluid"></td>
                    <td>${quantity}</td>
                    <td>${unit[0]}</td>
                    <td>${name}</td>
                </tr> 
        `;
        $('#ingredient-result').html(result);
        $('#vl').show();
        $('#ingredient-result').show();
    })
}
function getAdd(person) {
    var add = parseInt(person) + 1;
    if (add <= 15) {
        $('#submit').val(add);
    }
}
function getMinus(person) {
    var minus = parseInt(person) - 1;
    if (minus >= 1) {
        $('#submit').val(minus);
    }
}
