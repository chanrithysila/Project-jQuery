$(document).ready(function () {
    requestApi();
    $('#recipe').on('click', function () {
        $('#add').on('click', function () {
            var add = $('#submit').val();
            getAdd(add);
        })
        $('#minus').on('click', function () {
            var minus = $('#submit').val();
            getMinus(minus);
        })
    });
    $('#recipe').on('change', () => {
        var recipeId = $('#recipe').val();
        getRecipe(recipeId);
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
            eachestep(item.instructions);
        }
    });
}
function eachRecipe(name, img) {
    var result = "";
    result += `
        <tr class="mt-5">
            <td><h1>${name}</h1></td>
            <td><img src="${img}" width="300" class="img-fluid float-right "></td>
        </tr>
    `;
    $('#recipe-result').html(result);
}
function eachestep(instruction) {
    var result = "";
    var splitStep = instruction.split('<step>');
    for (let i = 1; i < splitStep.length; i++) {
        result += `
                <h5 class = "text-primary">Step: ${i}</h5>
                <p>${splitStep[i]}</p>
            `
    }
    $('#instruction-result').html(result);
}

function eachIngredient(ing) {
    var result = "";
    ing.forEach(element => {
        result += `
                <tr class="mt-5">
                    <td><img src="${element.iconUrl}" width="70" class="img-fluid"></td>
                    <td>${element.quantity * getAdd()}</td>
                    <td>${element.unit[0]}</td>
                    <td>${element.name}</td>
                </tr>
        `;
        $('#ingredient-result').html(result);
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